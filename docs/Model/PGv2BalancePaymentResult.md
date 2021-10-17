# PGv2BalancePaymentResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eshop_order_guid** | **string** | GUID zaregistrované objednávky. Vrací se stejná hodnota, která byla zaslána v žádosti. | 
**price** | **float** | Hodnota platby. | 
**pc_payment_price** | **float** | Doplatek privátní kartou. Pokud null, je doplatek roven 0. | [optional] 
**currency** | [**\BenefitPlus\Model\PGv2Unit**](PGv2Unit.md) |  | [optional] 
**pc_currency** | [**\BenefitPlus\Model\PGv2Unit**](PGv2Unit.md) |  | [optional] 
**pc_payment_methods** | [**\BenefitPlus\Model\PGv2BalancePaymentTypeResult[]**](PGv2BalancePaymentTypeResult.md) | List možností platby doplatku. Uvedeno pouze pokud doplatek existuje. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

