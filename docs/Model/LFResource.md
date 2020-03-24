# # LFResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique id of the resource | [optional] 
**domain** | **string** | The _domain_ is the Organization which a user or a DST belongs | [optional] 
**type** | **string** | Type of the resource, for example a _PDFResource_ | [optional] [readonly] 
**dst_uuid** | **string** | Unique id of the _DST_ which the resource is correlated | [optional] [readonly] 
**title** | **string** | Title of the resource | [optional] 
**filename** | **string** | Name of the file uploaded, with its extension as well | [optional] 
**url** | **string** | Url of the resource | [optional] [readonly] 
**size** | **int** | Size of the resource | [optional] [readonly] 
**created_at** | [**\DateTime**](\DateTime.md) | Indicates when the resource has been uploaded | [optional] [readonly] 
**mimetype** | **string** | _MIME_ type of the resource | [optional] [readonly] 
**pages** | **int** | Indicates how many pages the resource is | [optional] 
**extra_data** | **map[string,object]** | Extra data of the resource | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


