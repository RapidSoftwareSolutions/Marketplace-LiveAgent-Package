<?php

$app->post('/api/LiveAgent/addCompany', function ($request, $response) {

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey','organizationName', "name"]);

    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    $requiredParams = ['apiKey'=>'apiKey','organizationName'=>'organizationName'];
    $optionalParams = ['avatarUrl'=>'avatar_url','city'=>'city','countryCode'=>'countrycode','description'=>'description','emails'=>'emails','groups'=>'groups','id'=>'id','ip'=>'ip','language'=>'language','name'=>'name','phones'=>'phones','systemName'=>'system_name','type'=>'type','customFields'=>'custom_fields','coordinates'=>'coordinates','note'=>'note','screen'=>'screen','timeOffset'=>'time_offset','useragent'=>'useragent'];
    $bodyParams = [
       'json' => ['useragent','time_offset','screen','note','avatar_url','city','countrycode','description','emails','groups','id','ip','language','name','phones','system_name','type','latitude','longitude']
    ];

    $data = \Models\Params::createParams($requiredParams, $optionalParams, $post_data['args']);

    if(!empty($data['coordinates'])){
        $data['latitude'] = explode(',', $data['coordinates'])[0];
        $data['longitude'] = explode(',', $data['coordinates'])[1];
    }
    $client = $this->httpClient;
    $query_str = "https://{$data['organizationName']}.ladesk.com/api/v3/companies";

    

    $requestParams = \Models\Params::createRequestBody($data, $bodyParams);
    $requestParams['headers'] = ["apikey"=>"{$data['apiKey']}", "Content-Type"=>"application/json"];

    try {
        $resp = $client->post($query_str, $requestParams);
        $responseBody = $resp->getBody()->getContents();

        if(in_array($resp->getStatusCode(), ['200', '201', '202', '203', '204'])) {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
            if(empty($result['contextWrites']['to'])) {
                $result['contextWrites']['to']['status_msg'] = "Api return no results";
            }
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = json_decode($responseBody);
        }

    } catch (\GuzzleHttp\Exception\ClientException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ServerException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ConnectException $exception) {
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'INTERNAL_PACKAGE_ERROR';
        $result['contextWrites']['to']['status_msg'] = 'Something went wrong inside the package.';

    }

    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});