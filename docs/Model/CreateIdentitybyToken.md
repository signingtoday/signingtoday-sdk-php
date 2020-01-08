# # CreateIdentitybyToken

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**certificate** | **string** | The X.509 certificate in PEM format is wanted to associate to the identity will be created | [optional] 
**data** | [**object**](.md) | The data associated to the identity, analogue to the _provider_data_ field used during traditional identity creation. Of course the _provider_data_ has to be congruent with the choosen cerficate | [optional] 
**label** | **string** | The label is an arbitrary name is possible to associate to an idenity. Doing so allows to distinguish different identities issued from the same provider during the performance of the signature in the signature tray | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


