# # Document

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_instance_id** | **int** | It is a reference for internal use | [optional] [readonly] 
**id** | **int** | Unique Id of the document | [optional] 
**plain_document_uuid** | **string** | Id of the associated Resource (plain PDF file e.g. the one uploaded by the user) | [optional] 
**filled_document_uuid** | **string** | Id of the associated PDF file that contains all the forms filled (present only once the whole document has been filled) | [optional] [readonly] 
**signed_document_uuid** | **string** | Id of the associated PDF file that contains all the signatures  (present only once the whole document has been signed) | [optional] [readonly] 
**status** | **string** | The status of the _Document_, which can be: - \&quot;plain\&quot;: The document has been correctly updated by the user - \&quot;filled\&quot;: The document has been filled - \&quot;signed\&quot;: The document has been signed | [optional] [readonly] 
**forms** | [**\OpenAPI\Client\Model\FillableForm[]**](FillableForm.md) | The fillable elements of the document. Use the type field to identify textual fillable fields and signature fields | [optional] 
**signature_requests** | [**\OpenAPI\Client\Model\SignatureRequest[]**](SignatureRequest.md) | The list of signature request of the document | [optional] 
**signer_groups** | [**\OpenAPI\Client\Model\SignersGroup[]**](SignersGroup.md) | The sign plan for the document | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


