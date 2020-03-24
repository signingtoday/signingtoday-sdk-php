# # DigitalSignatureTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The uuid code that identifies the Digital Signature Transaction | [optional] [readonly] 
**domain** | **string** | The _domain_ is the Organization which a user or a DST belongs | [optional] 
**title** | **string** | Title of the Digital Signature Transaction | [optional] 
**replaces** | **string** | The _DST_ which this one replaces | [optional] [readonly] 
**replaced_by** | **string** | The _DST_ which has replaces the current one | [optional] [readonly] 
**created_by_user** | **string** | The user created the Digital Signature Transaction | [optional] [readonly] 
**created_at** | [**\DateTime**](\DateTime.md) | Date of creation of the Digital Signature Transaction | [optional] [readonly] 
**documents** | [**\OpenAPI\Client\Model\Document[]**](Document.md) | The _documents_ field is an array containing document objects, where everyone of them is defined as follows | [optional] 
**published_at** | [**\DateTime**](\DateTime.md) | The _date-time_ the DST has been published | [optional] [readonly] 
**expires_at** | [**\DateTime**](\DateTime.md) | Indicates when the DST will expire | [optional] [readonly] 
**resources** | [**\OpenAPI\Client\Model\LFResource[]**](LFResource.md) | An array of resources attached to the _DST_, each one defined as follows | [optional] 
**signatures** | [**\OpenAPI\Client\Model\Signature[]**](Signature.md) | An array of signatures, each one defined as follows | [optional] 
**status** | **string** | Status of the _Digital Signature Transaction_ | [optional] [readonly] 
**error_message** | **string** | The explication of the occurred error | [optional] 
**deleted_at** | [**\DateTime**](\DateTime.md) | Indicates when the _DST_ has been deleted | [optional] [readonly] 
**tags** | **string[]** | An array of tags for the _DST_. In such way is possible to tag in the same way some _DSTs_ in order to keep them organized and been easy to find them through the custom search | [optional] 
**template** | **bool** | Indicates if a template has been used to create the DST or not | [optional] 
**public_template** | **bool** | Indicates if a public template has been used to create the DST or not | [optional] 
**extra_data** | **map[string,object]** | Extra information about the _DST_ | [optional] 
**visible_to** | **string[]** | UUIDs of the users to which the DST is visible | [optional] 
**cc_groups** | **string[]** | Name of groups that are informed about the DST | [optional] 
**cc_users** | **string[]** | UUIDs of the users that are informed about the DST | [optional] 
**urgent** | **bool** | True if the DST is flagged as urgent | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Indicates the last update of the DST, such as the performing of a signature | [optional] [readonly] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


