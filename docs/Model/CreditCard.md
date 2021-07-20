# # CreditCard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cardholder_name** | **string** |  |
**number** | **string** |  |
**avs_address** | **string** |  | [optional]
**avs_city** | **string** |  | [optional]
**avs_state** | **string** |  | [optional]
**avs_zip** | **string** |  | [optional]
**avs_country** | **string** |  |
**expiration_date** | **string** |  |
**cvv** | **string** |  | [optional]
**type** | **string** |  | [optional]
**three_d_secure_data** | **object** | Holds the pre-authorized ThreeDSecure data in the case of a  \&quot;passthrough\&quot; 3DS scenario (where the 3DS authorization already occurred in the UI, for example, at the Online Travel Agency website).                3DS1 Format:  {      \&quot;eci\&quot;:\&quot;\&quot;,      \&quot;cavv\&quot;:\&quot;\&quot;,      \&quot;dsTransID\&quot;:\&quot;\&quot;,      \&quot;threeDSVersion\&quot;:\&quot;\&quot;  }                3DS2 Format:  {      \&quot;eci\&quot;:\&quot;\&quot;,      \&quot;cavv\&quot;:\&quot;\&quot;,      \&quot;xid\&quot;:\&quot;\&quot;,      \&quot;threeDSVersion\&quot;:\&quot;\&quot;,      \&quot;exceptionType:\&quot;\&quot;  }                 \&quot;eci\&quot;: Electronic Commerce Indicator. Provides a code that indicates whether the transaction was processed electronically.                Possible \&quot;eci\&quot; codes:                 \&quot;02\&quot; or \&quot;05\&quot; - Fully authenticated transaction                 \&quot;01\&quot; or \&quot;06\&quot; - Attempted authentication transaction                 \&quot;00\&quot; or \&quot;07\&quot; - Non 3D Secure transaction                 \&quot;cavv\&quot;: The CAVV is used to confirm that an authentication, or proof of an attempted authentication, was conducted.                 \&quot;dsTransID\&quot;: 3DS1 only. The transaction identifier assigned by the Directory Server (base64 encoded, 20 bytes in a decoded form).                 \&quot;xid\&quot;: 3DS2 only. The transaction identifier assigned by the Directory Server (base64 encoded, 20 bytes in a decoded form).                \&quot;threeDSVersion\&quot;: provides the 3-D Secure version used to process the transaction                 \&quot;exceptionType\&quot;: 3DS2 only. Provides the reason why 3DS2 authentication was bypassed | [optional]
**gateway_specific_fields** | **array<string,string>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
