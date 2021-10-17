# PGv2ConfirmResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eshop_order_guid** | **string** | Jedinečný GUID založené objednávky. | 
**eshop_payment_guid** | **string** | Jedinečný GUID pokusu o platbu. | 
**price** | **float** | Celková částka platby, přejato z objednávky. | 
**pc_payment_price** | **float** | Velikost potřebného doplatku privátní kartou. Null &#x3D; 0. Vrací se pouze tehdy, bude-li třeba provést doplatek privátní kartou. Pokud probíhá platba (výběr z účtu), hodnota bude záporná. | [optional] 
**marketplace_name** | **string** | Název obchodního místa (eshopu). | 
**currency** | [**\BenefitPlus\Model\PGv2Unit**](PGv2Unit.md) |  | 
**pc_currency** | [**\BenefitPlus\Model\PGv2Unit**](PGv2Unit.md) |  | [optional] 
**wallets** | [**\BenefitPlus\Model\PGv2BalanceWalletResult[]**](PGv2BalanceWalletResult.md) | List rozpadu plateb na peněženky. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

