# PGv2EshopOrderRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | ID objednávky, přidělené eshopem. | 
**description** | **string** | Popis objednávky, který v eshopu zadal uživatel. | [optional] 
**price** | **float** | Hodnota benefitu, kterou objednáváme. Pro určení měny se použije měna eshopu. | 
**is_partial_payment_allowed** | **bool** | Zda je povolena částečná platba z interních účtů. Pokud parametr není zaslán, defaultem je true &#x3D; povolen. | [optional] 
**return_url** | **string** | Návratová URL, na kterou se má vrátit řízení. | [optional] 
**date_from** | [**\DateTime**](\DateTime.md) | Datum od - první den pobytu v hotelu. | [optional] 
**date_to** | [**\DateTime**](\DateTime.md) | Datum to - poslední den pobytu v hotelu. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

