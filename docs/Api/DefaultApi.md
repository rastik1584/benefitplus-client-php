# BenefitPlus\DefaultApi

All URIs are relative to *https://inside.benefit-plus.eu/api_PG/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eshopsEshopGUIDEshopordersEshopOrderGUIDCancelPost**](DefaultApi.md#eshopseshopguideshoporderseshoporderguidcancelpost) | **POST** /eshops/{eshopGUID}/eshoporders/{eshopOrderGUID}/_cancel | Stornování objednávky ze strany eshopu.
[**eshopsEshopGUIDEshopordersEshopOrderGUIDGet**](DefaultApi.md#eshopseshopguideshoporderseshoporderguidget) | **GET** /eshops/{eshopGUID}/eshoporders/{eshopOrderGUID} | Zjištění stavu objednávky ze strany eshopu.
[**eshopsEshopGUIDEshopordersPost**](DefaultApi.md#eshopseshopguideshoporderspost) | **POST** /eshops/{eshopGUID}/eshoporders | Zaregistrování objednávky ze strany eshopu.
[**uiConfirmPost**](DefaultApi.md#uiconfirmpost) | **POST** /_ui/_confirm | Pokusí se již existující objednávku zaplatit.
[**uiNewconfirmcodePost**](DefaultApi.md#uinewconfirmcodepost) | **POST** /_ui/_newconfirmcode | Zašle zákazníkovi nový potvrzovací kód (SMS zprávu) k již existující objednávce.
[**uiOrderPost**](DefaultApi.md#uiorderpost) | **POST** /_ui/_order | Vytvoří objednávku.
[**uiPreorderPost**](DefaultApi.md#uipreorderpost) | **POST** /_ui/_preorder | Nasimuluje vytvoření objednávky.

# **eshopsEshopGUIDEshopordersEshopOrderGUIDCancelPost**
> \BenefitPlus\Model\PGv2CancelResult eshopsEshopGUIDEshopordersEshopOrderGUIDCancelPost($x_api_key, $eshop_guid, $eshop_order_guid, $body)

Stornování objednávky ze strany eshopu.

Servisní endpoint, slouží pro stornování objednávky ze strany eshopu. Odstraní objednávku. Odstraněná objednávka bude ve stavu Canceled. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1125613681/POST+api+PG+v2+eshops+eshopGUID+eshoporders+eshopOrderGUID+cancel)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new BenefitPlus\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Jedinečný bezpečnostní klíč eshopu. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-API-Key)
$eshop_guid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Jedinečný GUID eshopu. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#{eshopGUID})
$eshop_order_guid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Jedinečné GUID eshop objednávky, přidělené registračním endpointem. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#{eshopOrderGUID})
$body = new \BenefitPlus\Model\PGv2CancelRequest(); // \BenefitPlus\Model\PGv2CancelRequest | DTO obsahující informace o rušené objednávce. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1125744719/DTO+PGv2+Cancel+Request)

try {
    $result = $apiInstance->eshopsEshopGUIDEshopordersEshopOrderGUIDCancelPost($x_api_key, $eshop_guid, $eshop_order_guid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->eshopsEshopGUIDEshopordersEshopOrderGUIDCancelPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Jedinečný bezpečnostní klíč eshopu. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-API-Key) |
 **eshop_guid** | [**string**](../Model/.md)| Jedinečný GUID eshopu. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#{eshopGUID}) |
 **eshop_order_guid** | [**string**](../Model/.md)| Jedinečné GUID eshop objednávky, přidělené registračním endpointem. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#{eshopOrderGUID}) |
 **body** | [**\BenefitPlus\Model\PGv2CancelRequest**](../Model/PGv2CancelRequest.md)| DTO obsahující informace o rušené objednávce. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1125744719/DTO+PGv2+Cancel+Request) | [optional]

### Return type

[**\BenefitPlus\Model\PGv2CancelResult**](../Model/PGv2CancelResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eshopsEshopGUIDEshopordersEshopOrderGUIDGet**
> \BenefitPlus\Model\PGv2EshopOrderState eshopsEshopGUIDEshopordersEshopOrderGUIDGet($x_api_key, $eshop_guid, $eshop_order_guid)

Zjištění stavu objednávky ze strany eshopu.

Servisní endpoint, slouží pro zjištění stavu objednávky ze strany eshopu. Vrací informace o eshop objednávce a jednotlivých pokusech o zaplacení. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1125417014/GET+api+PG+v2+eshops+eshopGUID+eshoporders+eshopOrderGUID)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new BenefitPlus\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Jedinečný bezpečnostní klíč eshopu. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-API-Key)
$eshop_guid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Jedinečný GUID eshopu. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#{eshopGUID})
$eshop_order_guid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Jedinečné GUID eshop objednávky, přidělené registračním endpointem. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#{eshopOrderGUID})

try {
    $result = $apiInstance->eshopsEshopGUIDEshopordersEshopOrderGUIDGet($x_api_key, $eshop_guid, $eshop_order_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->eshopsEshopGUIDEshopordersEshopOrderGUIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Jedinečný bezpečnostní klíč eshopu. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-API-Key) |
 **eshop_guid** | [**string**](../Model/.md)| Jedinečný GUID eshopu. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#{eshopGUID}) |
 **eshop_order_guid** | [**string**](../Model/.md)| Jedinečné GUID eshop objednávky, přidělené registračním endpointem. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#{eshopOrderGUID}) |

### Return type

[**\BenefitPlus\Model\PGv2EshopOrderState**](../Model/PGv2EshopOrderState.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eshopsEshopGUIDEshopordersPost**
> \BenefitPlus\Model\PGv2EshopOrderResult eshopsEshopGUIDEshopordersPost($body, $x_api_key, $eshop_guid, $accept_language)

Zaregistrování objednávky ze strany eshopu.

Servisní endpoint, slouží pro zaregistrování objednávky ze strany eshopu.  [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1125744655/POST+api+PG+v2+eshops+eshopGUID+eshoporders)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new BenefitPlus\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \BenefitPlus\Model\PGv2EshopOrderRequest(); // \BenefitPlus\Model\PGv2EshopOrderRequest | DTO obsahující informace o registrované objednávce. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1125646362/DTO+PGv2+Eshop+Order+Request)
$x_api_key = "x_api_key_example"; // string | Jedinečný bezpečnostní klíč eshopu. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-API-Key)
$eshop_guid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Jedinečný GUID eshopu. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#{eshopGUID})
$accept_language = "accept_language_example"; // string | Jedinečný bezpečnostní klíč eshopu. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-API-Key)

try {
    $result = $apiInstance->eshopsEshopGUIDEshopordersPost($body, $x_api_key, $eshop_guid, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->eshopsEshopGUIDEshopordersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BenefitPlus\Model\PGv2EshopOrderRequest**](../Model/PGv2EshopOrderRequest.md)| DTO obsahující informace o registrované objednávce. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1125646362/DTO+PGv2+Eshop+Order+Request) |
 **x_api_key** | **string**| Jedinečný bezpečnostní klíč eshopu. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-API-Key) |
 **eshop_guid** | [**string**](../Model/.md)| Jedinečný GUID eshopu. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#{eshopGUID}) |
 **accept_language** | **string**| Jedinečný bezpečnostní klíč eshopu. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-API-Key) | [optional]

### Return type

[**\BenefitPlus\Model\PGv2EshopOrderResult**](../Model/PGv2EshopOrderResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uiConfirmPost**
> \BenefitPlus\Model\InlineResponse200 uiConfirmPost($x_confirm_code, $x_e_shop_id, $x_e_shop_order_guid, $body, $x_return_url)

Pokusí se již existující objednávku zaplatit.

Pokusí se již existující objednávku zaplatit, nebo alespoň posunout kupředu v platebním workflow. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1125875737/POST+api+PG+v2+ui+confirm)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new BenefitPlus\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_confirm_code = "x_confirm_code_example"; // string | Ověřovací kód (zaslaný pomocí SMS uživateli). [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-ConfirmCode)
$x_e_shop_id = "x_e_shop_id_example"; // string | GUID eshopu, ze kterého je požadavek zaslán. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-EShopID)
$x_e_shop_order_guid = "x_e_shop_order_guid_example"; // string | Jedinečné GUID eshop objednávky, přidělené registračním endpointem. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-EShopOrderGUID)
$body = new \BenefitPlus\Model\PGv2ConfirmRequest(); // \BenefitPlus\Model\PGv2ConfirmRequest | DTO obsahující informace o potvrzení objednávky. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1125449831/DTO+PGv2+Confirm+Request)
$x_return_url = "x_return_url_example"; // string | Url, které máme poslat na platební bránu ČSOB (při inicializaci platby na platební bráně). Na tuto url vrátí platební brána ČSOB řízení, jakmile uživatel dokončí proces platby v UI platební brány ČSOB.  Používá se při platbě doplatku privátní kartou na platební bráně ČSOB. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-Return-URL)

try {
    $result = $apiInstance->uiConfirmPost($x_confirm_code, $x_e_shop_id, $x_e_shop_order_guid, $body, $x_return_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->uiConfirmPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_confirm_code** | **string**| Ověřovací kód (zaslaný pomocí SMS uživateli). [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-ConfirmCode) |
 **x_e_shop_id** | **string**| GUID eshopu, ze kterého je požadavek zaslán. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-EShopID) |
 **x_e_shop_order_guid** | **string**| Jedinečné GUID eshop objednávky, přidělené registračním endpointem. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-EShopOrderGUID) |
 **body** | [**\BenefitPlus\Model\PGv2ConfirmRequest**](../Model/PGv2ConfirmRequest.md)| DTO obsahující informace o potvrzení objednávky. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1125449831/DTO+PGv2+Confirm+Request) | [optional]
 **x_return_url** | **string**| Url, které máme poslat na platební bránu ČSOB (při inicializaci platby na platební bráně). Na tuto url vrátí platební brána ČSOB řízení, jakmile uživatel dokončí proces platby v UI platební brány ČSOB.  Používá se při platbě doplatku privátní kartou na platební bráně ČSOB. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-Return-URL) | [optional]

### Return type

[**\BenefitPlus\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uiNewconfirmcodePost**
> uiNewconfirmcodePost($x_bp_card_number, $x_e_shop_id, $x_e_shop_order_guid)

Zašle zákazníkovi nový potvrzovací kód (SMS zprávu) k již existující objednávce.

Zašle zákazníkovi nový potvrzovací kód (SMS zprávu) k již existující objednávce. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1125810222/POST+api+PG+v2+ui+newconfirmcode)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new BenefitPlus\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_bp_card_number = "x_bp_card_number_example"; // string | Číslo BP karty, ve formátu s pomlčkami. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-BPCardNumber)
$x_e_shop_id = "x_e_shop_id_example"; // string | GUID eshopu, ze kterého je požadavek zaslán. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-EShopID)
$x_e_shop_order_guid = "x_e_shop_order_guid_example"; // string | Jedinečné GUID eshop objednávky, přidělené registračním endpointem. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-EShopOrderGUID)

try {
    $apiInstance->uiNewconfirmcodePost($x_bp_card_number, $x_e_shop_id, $x_e_shop_order_guid);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->uiNewconfirmcodePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_bp_card_number** | **string**| Číslo BP karty, ve formátu s pomlčkami. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-BPCardNumber) |
 **x_e_shop_id** | **string**| GUID eshopu, ze kterého je požadavek zaslán. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-EShopID) |
 **x_e_shop_order_guid** | **string**| Jedinečné GUID eshop objednávky, přidělené registračním endpointem. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-EShopOrderGUID) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uiOrderPost**
> \BenefitPlus\Model\PGv2OrderResult uiOrderPost($x_bp_card_number, $x_e_shop_id, $x_e_shop_order_guid)

Vytvoří objednávku.

Vytvoří objednávku. Vytvořená objednávka bude ve stavu New. Endpoint vrací údaje o objednávce, výši doplatku a rozpad na peněženky. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1125941264/POST+api+PG+v2+ui+order)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new BenefitPlus\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_bp_card_number = "x_bp_card_number_example"; // string | Číslo BP karty, ve formátu s pomlčkami. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-BPCardNumber)
$x_e_shop_id = "x_e_shop_id_example"; // string | GUID eshopu, ze kterého je požadavek zaslán. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-EShopID)
$x_e_shop_order_guid = "x_e_shop_order_guid_example"; // string | Jedinečné GUID eshop objednávky, přidělené registračním endpointem. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-EShopOrderGUID)

try {
    $result = $apiInstance->uiOrderPost($x_bp_card_number, $x_e_shop_id, $x_e_shop_order_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->uiOrderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_bp_card_number** | **string**| Číslo BP karty, ve formátu s pomlčkami. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-BPCardNumber) |
 **x_e_shop_id** | **string**| GUID eshopu, ze kterého je požadavek zaslán. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-EShopID) |
 **x_e_shop_order_guid** | **string**| Jedinečné GUID eshop objednávky, přidělené registračním endpointem. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-EShopOrderGUID) |

### Return type

[**\BenefitPlus\Model\PGv2OrderResult**](../Model/PGv2OrderResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uiPreorderPost**
> \BenefitPlus\Model\PGv2PreOrderResult uiPreorderPost($x_bp_card_number, $x_e_shop_id, $x_e_shop_order_guid)

Nasimuluje vytvoření objednávky.

Nasimuluje vytvoření objednávky. Endpoint nezakládá skutečnou objednávku, jen provede celý proces virtuálně, aby došlo k rozpočtu platby a ověření omezení a limitů. Endpoint vrací údaje o výši doplatku a rozpad platby na peněženky. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1125777448/POST+api+PG+v2+ui+preorder)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new BenefitPlus\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_bp_card_number = "x_bp_card_number_example"; // string | Číslo BP karty, ve formátu s pomlčkami. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-BPCardNumber)
$x_e_shop_id = "x_e_shop_id_example"; // string | GUID eshopu, ze kterého je požadavek zaslán. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-EShopID)
$x_e_shop_order_guid = "x_e_shop_order_guid_example"; // string | Jedinečné GUID eshop objednávky, přidělené registračním endpointem. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-EShopOrderGUID)

try {
    $result = $apiInstance->uiPreorderPost($x_bp_card_number, $x_e_shop_id, $x_e_shop_order_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->uiPreorderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_bp_card_number** | **string**| Číslo BP karty, ve formátu s pomlčkami. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-BPCardNumber) |
 **x_e_shop_id** | **string**| GUID eshopu, ze kterého je požadavek zaslán. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-EShopID) |
 **x_e_shop_order_guid** | **string**| Jedinečné GUID eshop objednávky, přidělené registračním endpointem. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1448902683/Platebn+br+na+pro+e-shopy+v2+-+HTTP+hlavi+ky+a+URL+parametry#X-EShopOrderGUID) |

### Return type

[**\BenefitPlus\Model\PGv2PreOrderResult**](../Model/PGv2PreOrderResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

