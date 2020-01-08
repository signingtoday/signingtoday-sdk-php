# # Document1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**display_name** | **string** | The name associated to the document, provided during the Digital Signature Transaction creation | [optional] 
**document** | **string** | The url to download the document | [optional] 
**document_uri** | **string** | This is the url from where the document, commonly in pdf format, has been uploaded to the Digital Signature Transaction | [optional] 
**document_uri_options** | [**object**](.md) | Additional options about the upload of the document | [optional] 
**groups** | [**\OpenAPI\Client\Model\Signature[][]**](array.md) | The scheduled signatures ordered as groups of signers. The signatures of a group can be performed only once all the signatures of the previous groups have been completed | [optional] 
**preview** | **string** | The preview field is a parametric url which can be used to make a preview of the documents in the client integration of SigningToday. The parameters are:   - page: the page to display   - width: the width of the page   - heigth: the heigth of the page The width and height parameters allows to display the page in a preferred size. If both are provided the first one is only use because the proportion of the page remains unchanged | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


