# PGv2PaymentResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**result_code** | **string** | Jde o klíč stavu objednávky/platby/transakce, dle enumu PGv2_E_PaymentState. Používá se textový klíč enumu (např. “New“), nikoli číselná hodnota. | 
**is_authorized** | **bool** | Zda byla platba autorizována. Null &#x3D; false &#x3D; neautorizováno. | [optional] 
**guid** | **string** | GUID pokusu o platbu. | [optional] 
**currency** | **string** | Měna strona (je převzata z měny eshopu), vrací se klíč měny (CZK, EUR, PLN). | 
**income_price** | **float** | Částka objednávky. | [optional] 
**payed_price** | **float** | Již zaplacená částka. | [optional] 
**created** | [**\DateTime**](\DateTime.md) | Datumočas začátku pokusu o provedení platby. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

