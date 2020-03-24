# # Signature

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_instance_id** | **int** | It is a reference for internal use | [optional] [readonly] 
**document_id** | **int** | Id of the document | [optional] 
**signature_request_id** | **int** | Id of the requested signature | [optional] 
**signed_at** | [**\DateTime**](\DateTime.md) | Indicates when the DST has been signed | [optional] 
**declined_reason** | **string** |  | [optional] 
**status** | **string** | Status of the signature, which can be _signed_ or _declined_ | [optional] [readonly] 
**extra_data** | **map[string,object]** | Extra data of the signature | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


