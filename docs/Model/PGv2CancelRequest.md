# PGv2CancelRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | Popis důvodu storna. | [optional] 
**price** | **float** | Hodnota, kterou stornujeme. Pro určení měny se použije měna eshopu. Povinné pouze u částečného storna. Pokud neuvedeno, stornuje se celá částka. | [optional] 
**is_partial_cancel_allowed** | **bool** | Zda je povoleno částečné storno. Pokud parametr není zaslán, defaultem je false &#x3D; nepovoleno. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

