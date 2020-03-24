# # User

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique id of the User | [optional] [readonly] 
**username** | **string** | The username of the User. The username is used to login | [optional] 
**domain** | **string** | The _domain_ is the Organization which a user or a DST belongs | [optional] 
**language** | **string** | The default language of the User | [optional] 
**name** | **string** | The name of the User | [optional] 
**surname** | **string** | The name of the User | [optional] 
**email** | **string** | The email address of the User | [optional] 
**phone** | [**BigDecimal**](BigDecimal.md) | The phone number of the User | [optional] 
**role** | **string** | The role of the User. The **admin** can create users, as well as DSTs and can sign. The **instructor** can create DSTs and sign. The **signer** can only sign documents. | [optional] 
**groups** | [**\OpenAPI\Client\Model\UserGroup[]**](UserGroup.md) | A group of users. This is useful during DSTs creation, it is possible to select a group as signers. This way all the components of that group have to sign the document | [optional] 
**capabilities** | **string[]** | The capabilities represents the action a user is able to do | [optional] 
**created_by** | **string** | The one which created the User | [optional] [readonly] 
**created_at** | [**\DateTime**](\DateTime.md) | The date of the creation of the User | [optional] [readonly] 
**deleted_at** | [**\DateTime**](\DateTime.md) | The date of deletion of the User | [optional] [readonly] 
**automatic** | **bool** | If true the user is automatic | [optional] [readonly] 
**extra_data** | **map[string,object]** | Extra data associated to the User | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


