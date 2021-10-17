# PGv2ConfirmRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**balance_payment_type** | **string** | Zvolený typ doplatku privátní kartou. Jde o textový klíč (např. “OneClickSync“) dle enumu PGv2_E_BalancePayment. Pokud neuvedeno, jde o platbu bez doplatku (\&quot;WOBalancePayment\&quot;), nebo je typ zvoleného doplatku (zatím) neznámý. | [optional] 
**pc_number** | **string** | Čtyřmístný kód privátní karty (koncové čtyřčíslí karty), musí být uvedeno u metod doplatku “OneClickSync”. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

