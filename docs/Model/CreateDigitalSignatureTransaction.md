# # CreateDigitalSignatureTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Title of the _Digital Signature Transaction_ | [optional] 
**documents** | [**\OpenAPI\Client\Model\CreateDocument[]**](CreateDocument.md) | The document or documents of the _DST_ | [optional] 
**status** | **string** | Status of the _DST_ | [optional] 
**expires_at** | [**\DateTime**](\DateTime.md) | Date of expiration of the _DST_ | [optional] 
**tags** | **string[]** | An array of tags for the DST. In such way is possible to tag in the same way some DSTs in order to keep them organized and been easy to find them through the custom search | [optional] 
**template** | **bool** | True if the _DST_ has been created from a template | [optional] 
**public_template** | **bool** | Indicates if a public template has been used to create the DST or not | [optional] 
**cc_groups** | **string[]** | Name of groups that are informed about the DST. | [optional] 
**cc_users** | **string[]** | UUIDs of the users that are informed about the DST. | [optional] 
**urgent** | **bool** | True if the DST is flagged as urgent | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


