# # Signature

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**automatic** | **bool** | If true indicates that the signer is an _automatic_ one, thus the signature procedure will be different from a regular signer | [optional] 
**constraints** | [**object**](.md) | Particular constraints for the Signature. For example constraints about the _firs tname_ or _last name_ of the certificate associated with the identity is going to sign. The way to use this field is through the _django lookups_, for example:   - \&quot;certificate__subject_givenName__iexact&#x3D;JOHN\&quot; | [optional] 
**declinable** | **bool** | If true the signer is able to decline the Signature if he wants to | [optional] 
**decline_url** | **string** | This is the url to decline a digital signature transaction | [optional] 
**description** | **string** | This is a simple description to attach with the Signature | [optional] 
**description_html** | **string** | This is a _html_ description to attach with the Signature | [optional] 
**display_name** | **string** | This is the name will be displayed on the signature tray associated to the Signature has to be performed. Usually is the _full name_ of the user is going to sign | [optional] 
**id** | **string** | The uuid code that identifies the Signature | [optional] 
**profile** | **string** | The _profile_ field of the Signature object specifies the modality of signature is going to be performed, and can be:   - _PADES_ : allows to exclusively sign a pdf file with the signature     directly affixed into the document;   - _CADES_ : allows to sign different types of documents; the signature     is not \&quot;physically\&quot; into the document but the signature and the file     are placed together in an envelope instead, making thus a .p7m extension. | [optional] 
**reason** | **string** | The reason of the Signature, or rather a motivational description associated to the Signature | [optional] 
**signature_ticket** | **string** | This is the url where a signature tray is predisposed for a specific signer that have to sign a specific digital signature transaction | [optional] 
**signer** | **string** | The user that have to sign the digital signature transaction | [optional] 
**signer_group** | **string** | The group which the signer belongs. This field is used in the scenario of a digital signature transaction that has multiple signatures to be performed, where the signers belongs to the same group. Let&#39;s think to the group _\&quot;teachers\&quot;_ of a school. Thus is possible to add the _signer_group_ _\&quot;teachers\&quot;_ as signers of the digital signature transaction without worrying about who really belong to that group | [optional] 
**status** | **string** | The status of the Signature. As the digital signature transaction is created the status of the Signature is _waiting_, if everything is legit than the status changes to _pending_, otherwise to _error_. Once the Signature is made the status changes to _performed_. If the DST expires before the Signature is performed then the status changes to _expired_ | [optional] 
**urlback** | **string** | The url for the redirection from Signature tray when the digital signature transaction is completed or annulled | [optional] 
**where** | [**\OpenAPI\Client\Model\SignatureWhere**](SignatureWhere.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


