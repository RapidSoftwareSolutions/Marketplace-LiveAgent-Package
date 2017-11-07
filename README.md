[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/LiveAgent/functions?utm_source=RapidAPIGitHub_LiveAgentFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# LiveAgent Package
LiveAgent is the most reviewed and #1 rated help desk software for SMB in 2017. Stay closer to your customers and answer their questions faster with LiveAgent.
* Domain: [LiveAgent](http://ladesk.com/)
* Credentials: apiKey

## How to get credentials: 
0. Browse to [Ladesk](http://ladesk.com)
1. Register or log in
2. Navigate in the admin panel, while logged in as an admin, to the following location: Configuration > System > API and wait there a few seconds and an API key is going to be generated for you



## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 

## LiveAgent.listAgents
List of agents

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization

## LiveAgent.deleteAgent
Delete agent

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| agentId         | String     | ID of the agent

## LiveAgent.getSingleAgent
Retrieves an agent

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| agentId         | String     | ID of the agent

## LiveAgent.logoutAgent
Logout an agent

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| agentId         | String     | ID of the agent

## LiveAgent.pauseAgent
Pauses an agent

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| agentId         | String     | ID of the agent

## LiveAgent.getAgentStatus
Gets agent statuses in departments

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| agentId         | String     | ID of the agent

## LiveAgent.updateAgentStatus
Updates agent statuses in departments

| Field             | Type       | Description
|-------------------|------------|----------
| apiKey            | credentials| Your API key
| organizationName  | String     | Name of your organization
| agentId           | String     | ID of the agent
| departmentStatuses| List       | Object with statuses in departments

## LiveAgent.listCalls
Retrieves list of all calls

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| page            | String     | Page to display. Not used if from is defined.
| perPage         | String     | Results per page. Used only if page is used.
| from            | String     | Result set start. Takes precedence over page.
| to              | String     | Result set end. Used only if _from is used.
| sortDir         | Select     | Sorting direction ASC or DESC
| sortField       | String     | Sorting field
| filters         | String     | Filters (json object{column:value, ...})

## LiveAgent.addCall
Creates new call (ingoing / outcoming / internal). Does not initiate the outgoing call

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| callId          | String     | ID of the call
| channelId       | String     | ID of the channel
| toNumber        | String     | Callee number
| viaNumber       | String     | Trunk number via which call was made / received
| fromNumber      | String     | Caller number
| ticketId        | String     | Ticket id or code
| direction       | Select     | Incoming call ('in' - default), outgoing call ('out') or internal call('int')

## LiveAgent.answerCall
Set call as answered by agent

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| callId          | String     | ID of the call
| toNumber        | String     | Callee number

## LiveAgent.mergeCalls
Merge secondary call into main call

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| callId          | String     | ID of the call
| secCallId       | String     | Callee number
| agentId         | String     | Agent ID for removing from the call

## LiveAgent.rerouteCall
Lets the call ring to an another agent if available

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| callId          | String     | ID of the call
| reason          | Select     | T - timeout, D - decline

## LiveAgent.ringCall
Lets the call ring to an another agent if available

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| callId          | String     | ID of the call
| departmentId    | String     | Department ID
| toNumber        | String     | Callee number

## LiveAgent.stopCall
Stops the call

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| callId          | String     | ID of the call
| fromNumber      | String     | Caller number

## LiveAgent.addMessageToCall
Adds a message to the call group in corresponfing ticket

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| callId          | String     | ID of the call
| fromNumber      | String     | Caller number
| message         | String     | Message body
| type            | Select     | T (text), H (html), A (audio - url to audio file or fileId), S (system), N (note), NF (note file)

## LiveAgent.getCallStatus
Return the status of call

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| callId          | String     | ID of the call

## LiveAgent.listCannedMessages
List all canned messages

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| page            | String     | Page to display. Not used if from is defined.
| perPage         | String     | Results per page. Used only if page is used.
| from            | String     | Result set start. Takes precedence over page.
| to              | String     | Result set end. Used only if _from is used.
| sortDir         | Select     | Sorting direction ASC or DESC
| sortField       | String     | Sorting field
| filters         | String     | Filters (json object{column:value, ...})

## LiveAgent.addCannedMessage
Creates new canned message`

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| departmentid    | String     | ID of the department
| cannedMessageId | String     | ID of the canned message
| keywords        | String     | Message keywords
| messageText     | String     | Text of the canned message
| userId          | String     | ID of the user

## LiveAgent.getSingleCannedMessage
Retrives canned message`

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| cannedMessageId | String     | ID of the canned message

## LiveAgent.updateCannedMessage
Updates canned message`

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| departmentid    | String     | ID of the department
| cannedMessageId | String     | ID of the canned message
| keywords        | String     | Message keywords
| messageText     | String     | Text of the canned message
| userId          | String     | ID of the user

## LiveAgent.deleteCannedMessage
Deletes canned message`

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| cannedMessageId | String     | ID of the canned message

## LiveAgent.listCompanies
Retrieves list of all companies

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| page            | String     | Page to display. Not used if from is defined.
| perPage         | String     | Results per page. Used only if page is used.
| from            | String     | Result set start. Takes precedence over page.
| to              | String     | Result set end. Used only if _from is used.
| sortDir         | Select     | Sorting direction ASC or DESC
| sortField       | String     | Sorting field
| filters         | String     | Filters (json object{column:value, ...})

## LiveAgent.addCompany
Creates new company

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| avatarUrl       | String     | Url to company avatar
| city            | String     | Company city
| countryCode     | String     | Company country code
| description     | String     | Company description
| emails          | List       | Company emails
| groups          | List       | Company groups
| id              | String     | Company id
| ip              | String     | Company ip
| language        | String     | Company language
| name            | String     | Company name
| phones          | List       | Company phones
| systemName      | String     | Company system name
| type            | Select     |  V - visitor, R - registered visitor
| customFields    | List       | Company custom fields
| coordinates     | String     | Company coordinates
| note            | String     | Company note
| screen          | String     | Company screen
| timeOffset      | String     | Company time offset
| useragent       | String     | Company useragent

## LiveAgent.getSingleCompany
Retrieves a company

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| companyId       | String     | ID of the company

## LiveAgent.updateCompany
Updates a company

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| companyId       | String     | ID of the company
| avatarUrl       | String     | Url to company avatar
| city            | String     | Company city
| countryCode     | String     | Company country code
| description     | String     | Company description
| emails          | List       | Company emails
| groups          | List       | Company groups
| id              | String     | Company id
| ip              | String     | Company ip
| language        | String     | Company language
| name            | String     | Company name
| phones          | List       | Company phones
| systemName      | String     | Company system name
| type            | Select     |  V - visitor, R - registered visitor
| customFields    | List       | Company custom fields
| coordinates     | String     | Company coordinates
| note            | String     | Company note
| screen          | String     | Company screen
| timeOffset      | String     | Company time offset
| useragent       | String     | Company useragent

## LiveAgent.deleteCompany
Deletes a company

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| companyId       | String     | ID of the company

## LiveAgent.listContacts
Retrieves list of all contacts

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| page            | String     | Page to display. Not used if from is defined.
| perPage         | String     | Results per page. Used only if page is used.
| from            | String     | Result set start. Takes precedence over page.
| to              | String     | Result set end. Used only if _from is used.
| sortDir         | Select     | Sorting direction ASC or DESC
| sortField       | String     | Sorting field
| filters         | String     | Filters (json object{column:value, ...})

## LiveAgent.addContact
Adds new contact

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| companyId       | String     | ID of the company
| avatarUrl       | String     | Url to contact avatar
| city            | String     | Contact city
| companyId       | String     | Id of the company
| countryCode     | String     | Contact country code
| description     | String     | Contact description
| emails          | List       | Contact emails
| firstname       | String     | Contact firstname
| gender          | Select     | Contact gender
| groups          | List       | Contact groups
| id              | String     | Contact id
| ip              | String     | Contact ip
| language        | String     | Contact language
| lastname        | String     | Contact lastname
| phones          | List       | Contact phones
| systemName      | String     | Contact system name
| type            | Select     |  V - visitor, R - registered visitor
| customFields    | List       | Contact custom fields
| jobPosition     | String     | Contact job position
| coordinates     | String     | Contact coordinates
| note            | String     | Contact note
| screen          | String     | Contact screen
| timeOffset      | String     | Contact time offset
| useragent       | String     | Contact useragent

## LiveAgent.getSingleContact
Retrieves a contact

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| contactId       | String     | ID of the contact

## LiveAgent.updateContact
Updates a contact

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| contactId       | String     | ID of the contact
| avatarUrl       | String     | Url to contact avatar
| city            | String     | Contact city
| companyId       | String     | Id of the company
| countryCode     | String     | Contact country code
| description     | String     | Contact description
| emails          | List       | Contact emails
| firstname       | String     | Contact firstname
| gender          | Select     | Contact gender
| groups          | List       | Contact groups
| id              | String     | Contact id
| ip              | String     | Contact ip
| language        | String     | Contact language
| lastname        | String     | Contact lastname
| phones          | List       | Contact phones
| systemName      | String     | Contact system name
| type            | Select     |  V - visitor, R - registered visitor
| customFields    | List       | Contact custom fields
| jobPosition     | String     | Contact job position
| coordinates     | String     | Contact coordinates
| note            | String     | Contact note
| screen          | String     | Contact screen
| timeOffset      | String     | Contact time offset
| useragent       | String     | Contact useragent

## LiveAgent.deleteContact
Deletes a contact

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| contactId       | String     | ID of the contact

## LiveAgent.addFile
Uploads file

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| file            | File       | File to upload

## LiveAgent.listGroups
Retrieves list of all groups

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| page            | String     | Page to display. Not used if from is defined.
| perPage         | String     | Results per page. Used only if page is used.
| from            | String     | Result set start. Takes precedence over page.
| to              | String     | Result set end. Used only if _from is used.

## LiveAgent.addGroup
Creates new group

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| backgroundColor | String     | Group background color
| color           | String     | Group color
| id              | String     | Group id
| name            | String     | Group name

## LiveAgent.getSingleGroup
Retrieves a group

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| groupId         | String     | ID of the group

## LiveAgent.updateGroup
Updates a group

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| groupId         | String     | ID of the group
| backgroundColor | String     | Group background color
| color           | String     | Group color
| id              | String     | Group id
| name            | String     | Group name

## LiveAgent.deleteGroup
Deletes a group

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| groupId         | String     | ID of the group

## LiveAgent.listPhoneNumber
Retrieves list of all phone numbers

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| page            | String     | Page to display. Not used if from is defined.
| perPage         | String     | Results per page. Used only if page is used.
| from            | String     | Result set start. Takes precedence over page.
| to              | String     | Result set end. Used only if _from is used.
| sortDir         | Select     | Sorting direction ASC or DESC
| sortField       | String     | Sorting field
| filters         | String     | Filters (json object{column:value, ...})

## LiveAgent.getSinglePhoneNumber
Retrieves a phone number

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| phoneNumberId   | String     | ID of the phone number

## LiveAgent.listPhoneDevicess
Retrieves list of all phone devices

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| page            | String     | Page to display. Not used if from is defined.
| perPage         | String     | Results per page. Used only if page is used.
| from            | String     | Result set start. Takes precedence over page.
| to              | String     | Result set end. Used only if _from is used.
| sortDir         | Select     | Sorting direction ASC or DESC
| sortField       | String     | Sorting field
| filters         | String     | Filters (json object{column:value, ...})

## LiveAgent.getSinglePhoneDevice
Retrieves a phone device

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| phoneDeviceId   | String     | ID of the phone device

## LiveAgent.updatePhoneDeviceParams
Retrieves a phone device

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| phoneDeviceId   | String     | ID of the phone device
| params          | String     | New params

## LiveAgent.pingAPI
Check that API is reponding

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization

## LiveAgent.listPredefinedAnswers
Retrieves list of all predefined answers

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| page            | String     | Page to display. Not used if from is defined.
| perPage         | String     | Results per page. Used only if page is used.
| from            | String     | Result set start. Takes precedence over page.
| to              | String     | Result set end. Used only if _from is used.
| sortDir         | Select     | Sorting direction ASC or DESC
| sortField       | String     | Sorting field
| filters         | String     | Filters (json object{column:value, ...})

## LiveAgent.addPredefinedAnswer
Create new predefined answer

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| body            | String     | Body of this predefined answer
| departmentId    | String     | Department of this predefined answer
| format          | Select     | Format of this predefined answer. T - text, H - html 
| id              | String     | Id of this predefined answer
| name            | String     | Name of this predefined answer
| subject         | String     | Subject of this predefined answer
| userId          | String     | ID of the user

## LiveAgent.getSinglePredefinedAnswer
Retrieves a predefined answer

| Field             | Type       | Description
|-------------------|------------|----------
| apiKey            | credentials| Your API key
| organizationName  | String     | Name of your organization
| predefinedAnswerId| String     | ID of the predefined answer

## LiveAgent.updatePredefinedAnswer
Update a predefined answer

| Field             | Type       | Description
|-------------------|------------|----------
| apiKey            | credentials| Your API key
| organizationName  | String     | Name of your organization
| predefinedAnswerId| String     | ID of the predefined answer
| body              | String     | Body of this predefined answer
| departmentId      | String     | Department of this predefined answer
| format            | Select     | Format of this predefined answer. T - text, H - html 
| id                | String     | Id of this predefined answer
| name              | String     | Name of this predefined answer
| subject           | String     | Subject of this predefined answer
| userId            | String     | ID of the user

## LiveAgent.deletePredefinedAnswer
Deletes a predefined answer

| Field             | Type       | Description
|-------------------|------------|----------
| apiKey            | credentials| Your API key
| organizationName  | String     | Name of your organization
| predefinedAnswerId| String     | ID of the predefined answer

## LiveAgent.listTags
Retrieves list of all tags

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| page            | String     | Page to display. Not used if from is defined.
| perPage         | String     | Results per page. Used only if page is used.
| from            | String     | Result set start. Takes precedence over page.
| to              | String     | Result set end. Used only if _from is used.

## LiveAgent.addTag
Creates new tag

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| backgroundColor | String     | Tag background color
| color           | String     | Tag color
| id              | String     | Tag id
| name            | String     | Tag name

## LiveAgent.getSingleTag
Retrieves a tag

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| tagId           | String     | ID of the tag

## LiveAgent.updateTag
Updates a tag

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| tagId           | String     | ID of the tag
| backgroundColor | String     | Tag background color
| color           | String     | Tag color
| id              | String     | Tag id
| name            | String     | Tag name

## LiveAgent.deleteTag
Deletes a tag

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| tagId           | String     | ID of the tag

## LiveAgent.listTickets
Retrieves list of all tickets

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| page            | String     | Page to display. Not used if from is defined.
| perPage         | String     | Results per page. Used only if page is used.
| from            | String     | Result set start. Takes precedence over page.
| to              | String     | Result set end. Used only if _from is used.
| sortDir         | Select     | Sorting direction ASC or DESC
| sortField       | String     | Sorting field
| filters         | String     | Filters (json object{column:value, ...})

## LiveAgent.getSingleTicket
Retrieves a ticket

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| ticketId        | String     | ID of the ticket

## LiveAgent.updateTicket
Updates a ticket

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| ticketId        | String     | ID of the ticket
| agentId         | String     | Agent ID
| departmentId    | String     | Department ID
| ownerContactId  | String     | Owner contact ID
| status          | Select     | Status of the ticket. I - init N - new T - chatting P - calling R - resolved X - deleted B - spam A - answered C - open W - postponed
| tags            | List       | List of tags

## LiveAgent.getTicketAttribute
Retrieves a ticket attribute

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| ticketId        | String     | ID of the ticket
| attribute       | Select     | Attribute of the ticket

## LiveAgent.setTicketAttribute
Sets a ticket attribute

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| ticketId        | String     | ID of the ticket
| attribute       | Select     | Attribute of the ticket
| value           | String     | Value of the ticket attribute

## LiveAgent.getTicketSla
Retrieves a ticket sla

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| ticketId        | String     | ID of the ticket

## LiveAgent.deleteTicket
Deletes a ticket

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API key
| organizationName| String     | Name of your organization
| ticketId        | String     | ID of the ticket

