# PGv2EshopOrderState

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | ID objednávky, přidělené eshopem. | 
**description** | **string** | Popis objednávky, který v eshopu zadal uživatel. | [optional] 
**price** | **float** | Hodnota benefitu, kterou objednáváme. | 
**is_partial_payment_allowed** | **bool** | Zda je povolena částečná platba z interních účtů. | 
**marketplace_name** | **string** | Název obchodního místa (eshopu). | 
**order_state** | **string** | Stav vyřízení/zaplacení objednávky na straně backendu. Klíče dle enumu Enum PGv2_E_OrderState. Používá se textový klíč enumu (např. “New“), nikoli číselná hodnota. | [optional] 
**created** | [**\DateTime**](\DateTime.md) | Datumočas založení objednávky. | [optional] 
**date_from** | [**\DateTime**](\DateTime.md) | Datum od - první den pobytu v hotelu. | [optional] 
**date_to** | [**\DateTime**](\DateTime.md) | Datum to - poslední den pobytu v hotelu. | [optional] 
**shopping_cart_id** | **string** | ID nákupního košíku, přidělené eshopem. | [optional] 
**currency** | [**\BenefitPlus\Model\PGv2Unit**](PGv2Unit.md) |  | [optional] 
**payment_results** | [**\BenefitPlus\Model\PGv2PaymentResult[]**](PGv2PaymentResult.md) | List objektů DTO PGv2_PaymentResult s informacemi o jednotlivých pokusech o platbu. List je seřazen dle času (nejnovější nahoře), tedy top(1) záznam listu obsahuje informace o aktuálním stavu. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

