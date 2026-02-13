# Aurigma\DesignAtoms\DesignAtomsViewerApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**designAtomsViewerCssFonts()**](DesignAtomsViewerApi.md#designAtomsViewerCssFonts) | **POST** /api/atoms/v1/ccviewer/cssfonts |  |
| [**designAtomsViewerFonts()**](DesignAtomsViewerApi.md#designAtomsViewerFonts) | **GET** /api/atoms/v1/ccviewer/fonts/{psName} |  |
| [**designAtomsViewerGetColorPreview()**](DesignAtomsViewerApi.md#designAtomsViewerGetColorPreview) | **POST** /api/atoms/v1/ccviewer/GetColorPreview |  |
| [**designAtomsViewerGetColorPreviews()**](DesignAtomsViewerApi.md#designAtomsViewerGetColorPreviews) | **POST** /api/atoms/v1/ccviewer/GetColorPreviews |  |
| [**designAtomsViewerGetCssFont()**](DesignAtomsViewerApi.md#designAtomsViewerGetCssFont) | **GET** /api/atoms/v1/ccviewer/GetCssFont |  |
| [**designAtomsViewerGetFallbackFonts()**](DesignAtomsViewerApi.md#designAtomsViewerGetFallbackFonts) | **GET** /api/atoms/v1/ccviewer/GetFallbackFonts |  |
| [**designAtomsViewerGetImageSize()**](DesignAtomsViewerApi.md#designAtomsViewerGetImageSize) | **POST** /api/atoms/v1/ccviewer/GetImageSize |  |
| [**designAtomsViewerGetLicense()**](DesignAtomsViewerApi.md#designAtomsViewerGetLicense) | **GET** /api/atoms/v1/ccviewer/license |  |
| [**designAtomsViewerGetShapeBounds()**](DesignAtomsViewerApi.md#designAtomsViewerGetShapeBounds) | **POST** /api/atoms/v1/ccviewer/GetShapeBounds |  |
| [**designAtomsViewerGetWatermarkItems()**](DesignAtomsViewerApi.md#designAtomsViewerGetWatermarkItems) | **POST** /api/atoms/v1/ccviewer/GetWatermarkItems |  |
| [**designAtomsViewerImg()**](DesignAtomsViewerApi.md#designAtomsViewerImg) | **GET** /api/atoms/v1/ccviewer/img | Retrieves an image with resized dimensions and additional visual effects based on the provided parameters. |
| [**designAtomsViewerPth()**](DesignAtomsViewerApi.md#designAtomsViewerPth) | **GET** /api/atoms/v1/ccviewer/pth |  |
| [**designAtomsViewerResource()**](DesignAtomsViewerApi.md#designAtomsViewerResource) | **GET** /api/atoms/v1/ccviewer/resource |  |
| [**designAtomsViewerSvg()**](DesignAtomsViewerApi.md#designAtomsViewerSvg) | **GET** /api/atoms/v1/ccviewer/svg |  |
| [**designAtomsViewerTxt()**](DesignAtomsViewerApi.md#designAtomsViewerTxt) | **GET** /api/atoms/v1/ccviewer/txt |  |
| [**designAtomsViewerUpdateArchedTextItemHandler()**](DesignAtomsViewerApi.md#designAtomsViewerUpdateArchedTextItemHandler) | **POST** /api/atoms/v1/ccviewer/UpdateArchedTextItemHandler |  |
| [**designAtomsViewerUpdateAutoScaledTextItemHandler()**](DesignAtomsViewerApi.md#designAtomsViewerUpdateAutoScaledTextItemHandler) | **POST** /api/atoms/v1/ccviewer/UpdateAutoScaledTextItemHandler |  |
| [**designAtomsViewerUpdateBarcodeItemHandler()**](DesignAtomsViewerApi.md#designAtomsViewerUpdateBarcodeItemHandler) | **POST** /api/atoms/v1/ccviewer/UpdateBarcodeItemHandler |  |
| [**designAtomsViewerUpdateBoundedTextItemHandler()**](DesignAtomsViewerApi.md#designAtomsViewerUpdateBoundedTextItemHandler) | **POST** /api/atoms/v1/ccviewer/UpdateBoundedTextItemHandler |  |
| [**designAtomsViewerUpdateByColorData()**](DesignAtomsViewerApi.md#designAtomsViewerUpdateByColorData) | **POST** /api/atoms/v1/ccviewer/UpdateByColorData |  |
| [**designAtomsViewerUpdateByMultiCallRequest()**](DesignAtomsViewerApi.md#designAtomsViewerUpdateByMultiCallRequest) | **POST** /api/atoms/v1/ccviewer/UpdateByMultiCallRequest |  |
| [**designAtomsViewerUpdateCurvedTextItemHandler()**](DesignAtomsViewerApi.md#designAtomsViewerUpdateCurvedTextItemHandler) | **POST** /api/atoms/v1/ccviewer/UpdateCurvedTextItemHandler |  |
| [**designAtomsViewerUpdateImageItemHandler()**](DesignAtomsViewerApi.md#designAtomsViewerUpdateImageItemHandler) | **POST** /api/atoms/v1/ccviewer/UpdateImageItemHandler |  |
| [**designAtomsViewerUpdatePathBoundedTextItemHandler()**](DesignAtomsViewerApi.md#designAtomsViewerUpdatePathBoundedTextItemHandler) | **POST** /api/atoms/v1/ccviewer/UpdatePathBoundedTextItemHandler |  |
| [**designAtomsViewerUpdatePlainTextItemHandler()**](DesignAtomsViewerApi.md#designAtomsViewerUpdatePlainTextItemHandler) | **POST** /api/atoms/v1/ccviewer/UpdatePlainTextItemHandler |  |
| [**designAtomsViewerUpdateShapeItemHandler()**](DesignAtomsViewerApi.md#designAtomsViewerUpdateShapeItemHandler) | **POST** /api/atoms/v1/ccviewer/UpdateShapeItemHandler |  |


## `designAtomsViewerCssFonts()`

```php
designAtomsViewerCssFonts($tenant_id, $fonts_method_data): string
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsViewerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$fonts_method_data = new \Aurigma\DesignAtoms\Model\FontsMethodData(); // \Aurigma\DesignAtoms\Model\FontsMethodData

try {
    $result = $apiInstance->designAtomsViewerCssFonts($tenant_id, $fonts_method_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsViewerApi->designAtomsViewerCssFonts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **fonts_method_data** | [**\Aurigma\DesignAtoms\Model\FontsMethodData**](../Model/FontsMethodData.md)|  | [optional] |

### Return type

**string**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/css`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsViewerFonts()`

```php
designAtomsViewerFonts($ps_name, $tenant_id): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsViewerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ps_name = 'ps_name_example'; // string
$tenant_id = 56; // int | Tenant ID.

try {
    $result = $apiInstance->designAtomsViewerFonts($ps_name, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsViewerApi->designAtomsViewerFonts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ps_name** | **string**|  | |
| **tenant_id** | **int**| Tenant ID. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsViewerGetColorPreview()`

```php
designAtomsViewerGetColorPreview($tenant_id, $get_color_preview_request): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsViewerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$get_color_preview_request = new \Aurigma\DesignAtoms\Model\GetColorPreviewRequest(); // \Aurigma\DesignAtoms\Model\GetColorPreviewRequest

try {
    $result = $apiInstance->designAtomsViewerGetColorPreview($tenant_id, $get_color_preview_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsViewerApi->designAtomsViewerGetColorPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **get_color_preview_request** | [**\Aurigma\DesignAtoms\Model\GetColorPreviewRequest**](../Model/GetColorPreviewRequest.md)|  | [optional] |

### Return type

**mixed**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsViewerGetColorPreviews()`

```php
designAtomsViewerGetColorPreviews($tenant_id, $get_color_previews_request): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsViewerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$get_color_previews_request = new \Aurigma\DesignAtoms\Model\GetColorPreviewsRequest(); // \Aurigma\DesignAtoms\Model\GetColorPreviewsRequest

try {
    $result = $apiInstance->designAtomsViewerGetColorPreviews($tenant_id, $get_color_previews_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsViewerApi->designAtomsViewerGetColorPreviews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **get_color_previews_request** | [**\Aurigma\DesignAtoms\Model\GetColorPreviewsRequest**](../Model/GetColorPreviewsRequest.md)|  | [optional] |

### Return type

**mixed**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsViewerGetCssFont()`

```php
designAtomsViewerGetCssFont($font_key, $tenant_id): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsViewerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$font_key = 'font_key_example'; // string
$tenant_id = 56; // int | Tenant ID.

try {
    $result = $apiInstance->designAtomsViewerGetCssFont($font_key, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsViewerApi->designAtomsViewerGetCssFont: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **font_key** | **string**|  | [optional] |
| **tenant_id** | **int**| Tenant ID. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsViewerGetFallbackFonts()`

```php
designAtomsViewerGetFallbackFonts($tenant_id): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsViewerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.

try {
    $result = $apiInstance->designAtomsViewerGetFallbackFonts($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsViewerApi->designAtomsViewerGetFallbackFonts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |

### Return type

**mixed**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsViewerGetImageSize()`

```php
designAtomsViewerGetImageSize($tenant_id, $get_image_size_request): \Aurigma\DesignAtoms\Model\NullAbleSize
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsViewerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$get_image_size_request = new \Aurigma\DesignAtoms\Model\GetImageSizeRequest(); // \Aurigma\DesignAtoms\Model\GetImageSizeRequest

try {
    $result = $apiInstance->designAtomsViewerGetImageSize($tenant_id, $get_image_size_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsViewerApi->designAtomsViewerGetImageSize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **get_image_size_request** | [**\Aurigma\DesignAtoms\Model\GetImageSizeRequest**](../Model/GetImageSizeRequest.md)|  | [optional] |

### Return type

[**\Aurigma\DesignAtoms\Model\NullAbleSize**](../Model/NullAbleSize.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsViewerGetLicense()`

```php
designAtomsViewerGetLicense($tenant_id): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsViewerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.

try {
    $result = $apiInstance->designAtomsViewerGetLicense($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsViewerApi->designAtomsViewerGetLicense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |

### Return type

**mixed**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsViewerGetShapeBounds()`

```php
designAtomsViewerGetShapeBounds($tenant_id, $get_shape_bounds_request): \Aurigma\DesignAtoms\Model\RectangleF
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsViewerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$get_shape_bounds_request = new \Aurigma\DesignAtoms\Model\GetShapeBoundsRequest(); // \Aurigma\DesignAtoms\Model\GetShapeBoundsRequest

try {
    $result = $apiInstance->designAtomsViewerGetShapeBounds($tenant_id, $get_shape_bounds_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsViewerApi->designAtomsViewerGetShapeBounds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **get_shape_bounds_request** | [**\Aurigma\DesignAtoms\Model\GetShapeBoundsRequest**](../Model/GetShapeBoundsRequest.md)|  | [optional] |

### Return type

[**\Aurigma\DesignAtoms\Model\RectangleF**](../Model/RectangleF.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsViewerGetWatermarkItems()`

```php
designAtomsViewerGetWatermarkItems($tenant_id, $body): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsViewerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$body = NULL; // mixed

try {
    $result = $apiInstance->designAtomsViewerGetWatermarkItems($tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsViewerApi->designAtomsViewerGetWatermarkItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **body** | **mixed**|  | [optional] |

### Return type

**mixed**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsViewerImg()`

```php
designAtomsViewerImg($f, $w, $h, $cmyk, $rgb, $grayscale, $target, $sq, $effect, $kp, $color, $obm, $oo, $alpha_mask, $page, $colorize_color, $rw, $rh, $dt, $da, $tenant_id): \SplFileObject
```

Retrieves an image with resized dimensions and additional visual effects based on the provided parameters.

This method accepts query parameters that control the output of the image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsViewerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$f = 'f_example'; // string | The identifier of the original image file.
$w = 56; // int | Target width of the resulting image.
$h = 56; // int | Target height of the resulting image.
$cmyk = 'cmyk_example'; // string | Name of the CMYK profile used for color conversion.
$rgb = 'rgb_example'; // string | Name of the RGB profile used for color conversion.
$grayscale = 'grayscale_example'; // string | Name of the grayscale profile used to convert into shades of gray.
$target = 'target_example'; // string | Target color space, one of \"Rgb\", \"Grayscale\", or \"Cmyk\".
$sq = True; // bool | Indicates that the image is squared.  The default value is \"false\".
$effect = 'effect_example'; // string | Effect applied to the image.  Possible values: \"None\", \"BlackAndWhite\", \"FlipVertical\", \"FlipHorizontal\", \"Colorize\", \"Grayscale\", or \"BlackAndTransparent\".  The default value is \"None\".
$kp = True; // bool | Indicates that image proportions should be maintained.  The default value is \"false\".
$color = 'color_example'; // string | Overlay color in the RGB, RGBA, CMYK, or CMYKA format.  By default, it's an empty string.
$obm = 'obm_example'; // string | Overlay blend mode used for blending colors.  Possible values: \"Normal\", \"Multiply\", \"Screen\", \"Overlay\", \"Darken\", \"Lighten\", \"ColorDodge\",  \"ColorBurn\", \"HardLight\", \"SoftLight\", `Difference\", \"Exclusion\", \"None\", or \"LinearBurn\".  By default, it's an empty string.
$oo = 3.4; // float | Opacity level of the overlaid layer, in the range [0.0, 1.0].  The default value is \"null\".
$alpha_mask = True; // bool | Enables alpha mask processing.  The default value is \"false\".
$page = 56; // int | Page index in a PDF document that needs to be processed.  The default value is \"0\".
$colorize_color = 'colorize_color_example'; // string | Color applied for the \"Colorize\" image effect.  By default, it's an empty string.
$rw = 3.4; // float | Rectangle width for area selection.  The default value is \"0\".
$rh = 3.4; // float | Rectangle height for area selection.  The default value is \"0\".
$dt = 'dt_example'; // string | Dithering type.
$da = 3.4; // float | Dithering amount.
$tenant_id = 56; // int | Tenant ID.

try {
    $result = $apiInstance->designAtomsViewerImg($f, $w, $h, $cmyk, $rgb, $grayscale, $target, $sq, $effect, $kp, $color, $obm, $oo, $alpha_mask, $page, $colorize_color, $rw, $rh, $dt, $da, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsViewerApi->designAtomsViewerImg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **f** | **string**| The identifier of the original image file. | [optional] |
| **w** | **int**| Target width of the resulting image. | [optional] |
| **h** | **int**| Target height of the resulting image. | [optional] |
| **cmyk** | **string**| Name of the CMYK profile used for color conversion. | [optional] |
| **rgb** | **string**| Name of the RGB profile used for color conversion. | [optional] |
| **grayscale** | **string**| Name of the grayscale profile used to convert into shades of gray. | [optional] |
| **target** | **string**| Target color space, one of \&quot;Rgb\&quot;, \&quot;Grayscale\&quot;, or \&quot;Cmyk\&quot;. | [optional] |
| **sq** | **bool**| Indicates that the image is squared.  The default value is \&quot;false\&quot;. | [optional] |
| **effect** | **string**| Effect applied to the image.  Possible values: \&quot;None\&quot;, \&quot;BlackAndWhite\&quot;, \&quot;FlipVertical\&quot;, \&quot;FlipHorizontal\&quot;, \&quot;Colorize\&quot;, \&quot;Grayscale\&quot;, or \&quot;BlackAndTransparent\&quot;.  The default value is \&quot;None\&quot;. | [optional] |
| **kp** | **bool**| Indicates that image proportions should be maintained.  The default value is \&quot;false\&quot;. | [optional] |
| **color** | **string**| Overlay color in the RGB, RGBA, CMYK, or CMYKA format.  By default, it&#39;s an empty string. | [optional] |
| **obm** | **string**| Overlay blend mode used for blending colors.  Possible values: \&quot;Normal\&quot;, \&quot;Multiply\&quot;, \&quot;Screen\&quot;, \&quot;Overlay\&quot;, \&quot;Darken\&quot;, \&quot;Lighten\&quot;, \&quot;ColorDodge\&quot;,  \&quot;ColorBurn\&quot;, \&quot;HardLight\&quot;, \&quot;SoftLight\&quot;, &#x60;Difference\&quot;, \&quot;Exclusion\&quot;, \&quot;None\&quot;, or \&quot;LinearBurn\&quot;.  By default, it&#39;s an empty string. | [optional] |
| **oo** | **float**| Opacity level of the overlaid layer, in the range [0.0, 1.0].  The default value is \&quot;null\&quot;. | [optional] |
| **alpha_mask** | **bool**| Enables alpha mask processing.  The default value is \&quot;false\&quot;. | [optional] |
| **page** | **int**| Page index in a PDF document that needs to be processed.  The default value is \&quot;0\&quot;. | [optional] |
| **colorize_color** | **string**| Color applied for the \&quot;Colorize\&quot; image effect.  By default, it&#39;s an empty string. | [optional] |
| **rw** | **float**| Rectangle width for area selection.  The default value is \&quot;0\&quot;. | [optional] |
| **rh** | **float**| Rectangle height for area selection.  The default value is \&quot;0\&quot;. | [optional] |
| **dt** | **string**| Dithering type. | [optional] |
| **da** | **float**| Dithering amount. | [optional] |
| **tenant_id** | **int**| Tenant ID. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsViewerPth()`

```php
designAtomsViewerPth($f, $tenant_id): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsViewerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$f = 'f_example'; // string
$tenant_id = 56; // int | Tenant ID.

try {
    $result = $apiInstance->designAtomsViewerPth($f, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsViewerApi->designAtomsViewerPth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **f** | **string**|  | [optional] |
| **tenant_id** | **int**| Tenant ID. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsViewerResource()`

```php
designAtomsViewerResource($image, $tenant_id): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsViewerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image = 'image_example'; // string
$tenant_id = 56; // int | Tenant ID.

try {
    $result = $apiInstance->designAtomsViewerResource($image, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsViewerApi->designAtomsViewerResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **image** | **string**|  | [optional] |
| **tenant_id** | **int**| Tenant ID. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsViewerSvg()`

```php
designAtomsViewerSvg($f, $w, $h, $cmyk, $rgb, $grayscale, $target, $sq, $effect, $kp, $color, $obm, $oo, $alpha_mask, $page, $colorize_color, $rw, $rh, $dt, $da, $tenant_id): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsViewerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$f = 'f_example'; // string | The identifier of the original image file.
$w = 56; // int | Target width of the resulting image.
$h = 56; // int | Target height of the resulting image.
$cmyk = 'cmyk_example'; // string | Name of the CMYK profile used for color conversion.
$rgb = 'rgb_example'; // string | Name of the RGB profile used for color conversion.
$grayscale = 'grayscale_example'; // string | Name of the grayscale profile used to convert into shades of gray.
$target = 'target_example'; // string | Target color space, one of \"Rgb\", \"Grayscale\", or \"Cmyk\".
$sq = True; // bool | Indicates that the image is squared.  The default value is \"false\".
$effect = 'effect_example'; // string | Effect applied to the image.  Possible values: \"None\", \"BlackAndWhite\", \"FlipVertical\", \"FlipHorizontal\", \"Colorize\", \"Grayscale\", or \"BlackAndTransparent\".  The default value is \"None\".
$kp = True; // bool | Indicates that image proportions should be maintained.  The default value is \"false\".
$color = 'color_example'; // string | Overlay color in the RGB, RGBA, CMYK, or CMYKA format.  By default, it's an empty string.
$obm = 'obm_example'; // string | Overlay blend mode used for blending colors.  Possible values: \"Normal\", \"Multiply\", \"Screen\", \"Overlay\", \"Darken\", \"Lighten\", \"ColorDodge\",  \"ColorBurn\", \"HardLight\", \"SoftLight\", `Difference\", \"Exclusion\", \"None\", or \"LinearBurn\".  By default, it's an empty string.
$oo = 3.4; // float | Opacity level of the overlaid layer, in the range [0.0, 1.0].  The default value is \"null\".
$alpha_mask = True; // bool | Enables alpha mask processing.  The default value is \"false\".
$page = 56; // int | Page index in a PDF document that needs to be processed.  The default value is \"0\".
$colorize_color = 'colorize_color_example'; // string | Color applied for the \"Colorize\" image effect.  By default, it's an empty string.
$rw = 3.4; // float | Rectangle width for area selection.  The default value is \"0\".
$rh = 3.4; // float | Rectangle height for area selection.  The default value is \"0\".
$dt = 'dt_example'; // string | Dithering type.
$da = 3.4; // float | Dithering amount.
$tenant_id = 56; // int | Tenant ID.

try {
    $result = $apiInstance->designAtomsViewerSvg($f, $w, $h, $cmyk, $rgb, $grayscale, $target, $sq, $effect, $kp, $color, $obm, $oo, $alpha_mask, $page, $colorize_color, $rw, $rh, $dt, $da, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsViewerApi->designAtomsViewerSvg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **f** | **string**| The identifier of the original image file. | [optional] |
| **w** | **int**| Target width of the resulting image. | [optional] |
| **h** | **int**| Target height of the resulting image. | [optional] |
| **cmyk** | **string**| Name of the CMYK profile used for color conversion. | [optional] |
| **rgb** | **string**| Name of the RGB profile used for color conversion. | [optional] |
| **grayscale** | **string**| Name of the grayscale profile used to convert into shades of gray. | [optional] |
| **target** | **string**| Target color space, one of \&quot;Rgb\&quot;, \&quot;Grayscale\&quot;, or \&quot;Cmyk\&quot;. | [optional] |
| **sq** | **bool**| Indicates that the image is squared.  The default value is \&quot;false\&quot;. | [optional] |
| **effect** | **string**| Effect applied to the image.  Possible values: \&quot;None\&quot;, \&quot;BlackAndWhite\&quot;, \&quot;FlipVertical\&quot;, \&quot;FlipHorizontal\&quot;, \&quot;Colorize\&quot;, \&quot;Grayscale\&quot;, or \&quot;BlackAndTransparent\&quot;.  The default value is \&quot;None\&quot;. | [optional] |
| **kp** | **bool**| Indicates that image proportions should be maintained.  The default value is \&quot;false\&quot;. | [optional] |
| **color** | **string**| Overlay color in the RGB, RGBA, CMYK, or CMYKA format.  By default, it&#39;s an empty string. | [optional] |
| **obm** | **string**| Overlay blend mode used for blending colors.  Possible values: \&quot;Normal\&quot;, \&quot;Multiply\&quot;, \&quot;Screen\&quot;, \&quot;Overlay\&quot;, \&quot;Darken\&quot;, \&quot;Lighten\&quot;, \&quot;ColorDodge\&quot;,  \&quot;ColorBurn\&quot;, \&quot;HardLight\&quot;, \&quot;SoftLight\&quot;, &#x60;Difference\&quot;, \&quot;Exclusion\&quot;, \&quot;None\&quot;, or \&quot;LinearBurn\&quot;.  By default, it&#39;s an empty string. | [optional] |
| **oo** | **float**| Opacity level of the overlaid layer, in the range [0.0, 1.0].  The default value is \&quot;null\&quot;. | [optional] |
| **alpha_mask** | **bool**| Enables alpha mask processing.  The default value is \&quot;false\&quot;. | [optional] |
| **page** | **int**| Page index in a PDF document that needs to be processed.  The default value is \&quot;0\&quot;. | [optional] |
| **colorize_color** | **string**| Color applied for the \&quot;Colorize\&quot; image effect.  By default, it&#39;s an empty string. | [optional] |
| **rw** | **float**| Rectangle width for area selection.  The default value is \&quot;0\&quot;. | [optional] |
| **rh** | **float**| Rectangle height for area selection.  The default value is \&quot;0\&quot;. | [optional] |
| **dt** | **string**| Dithering type. | [optional] |
| **da** | **float**| Dithering amount. | [optional] |
| **tenant_id** | **int**| Tenant ID. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsViewerTxt()`

```php
designAtomsViewerTxt($f, $tenant_id): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsViewerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$f = 'f_example'; // string
$tenant_id = 56; // int | Tenant ID.

try {
    $result = $apiInstance->designAtomsViewerTxt($f, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsViewerApi->designAtomsViewerTxt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **f** | **string**|  | [optional] |
| **tenant_id** | **int**| Tenant ID. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsViewerUpdateArchedTextItemHandler()`

```php
designAtomsViewerUpdateArchedTextItemHandler($tenant_id, $update_handler_request): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsViewerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$update_handler_request = new \Aurigma\DesignAtoms\Model\UpdateHandlerRequest(); // \Aurigma\DesignAtoms\Model\UpdateHandlerRequest

try {
    $result = $apiInstance->designAtomsViewerUpdateArchedTextItemHandler($tenant_id, $update_handler_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsViewerApi->designAtomsViewerUpdateArchedTextItemHandler: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **update_handler_request** | [**\Aurigma\DesignAtoms\Model\UpdateHandlerRequest**](../Model/UpdateHandlerRequest.md)|  | [optional] |

### Return type

**mixed**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsViewerUpdateAutoScaledTextItemHandler()`

```php
designAtomsViewerUpdateAutoScaledTextItemHandler($tenant_id, $update_handler_request): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsViewerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$update_handler_request = new \Aurigma\DesignAtoms\Model\UpdateHandlerRequest(); // \Aurigma\DesignAtoms\Model\UpdateHandlerRequest

try {
    $result = $apiInstance->designAtomsViewerUpdateAutoScaledTextItemHandler($tenant_id, $update_handler_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsViewerApi->designAtomsViewerUpdateAutoScaledTextItemHandler: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **update_handler_request** | [**\Aurigma\DesignAtoms\Model\UpdateHandlerRequest**](../Model/UpdateHandlerRequest.md)|  | [optional] |

### Return type

**mixed**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsViewerUpdateBarcodeItemHandler()`

```php
designAtomsViewerUpdateBarcodeItemHandler($tenant_id, $update_handler_request): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsViewerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$update_handler_request = new \Aurigma\DesignAtoms\Model\UpdateHandlerRequest(); // \Aurigma\DesignAtoms\Model\UpdateHandlerRequest

try {
    $result = $apiInstance->designAtomsViewerUpdateBarcodeItemHandler($tenant_id, $update_handler_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsViewerApi->designAtomsViewerUpdateBarcodeItemHandler: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **update_handler_request** | [**\Aurigma\DesignAtoms\Model\UpdateHandlerRequest**](../Model/UpdateHandlerRequest.md)|  | [optional] |

### Return type

**mixed**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsViewerUpdateBoundedTextItemHandler()`

```php
designAtomsViewerUpdateBoundedTextItemHandler($tenant_id, $update_handler_request): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsViewerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$update_handler_request = new \Aurigma\DesignAtoms\Model\UpdateHandlerRequest(); // \Aurigma\DesignAtoms\Model\UpdateHandlerRequest

try {
    $result = $apiInstance->designAtomsViewerUpdateBoundedTextItemHandler($tenant_id, $update_handler_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsViewerApi->designAtomsViewerUpdateBoundedTextItemHandler: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **update_handler_request** | [**\Aurigma\DesignAtoms\Model\UpdateHandlerRequest**](../Model/UpdateHandlerRequest.md)|  | [optional] |

### Return type

**mixed**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsViewerUpdateByColorData()`

```php
designAtomsViewerUpdateByColorData($tenant_id, $update_colors_request): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsViewerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$update_colors_request = new \Aurigma\DesignAtoms\Model\UpdateColorsRequest(); // \Aurigma\DesignAtoms\Model\UpdateColorsRequest

try {
    $result = $apiInstance->designAtomsViewerUpdateByColorData($tenant_id, $update_colors_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsViewerApi->designAtomsViewerUpdateByColorData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **update_colors_request** | [**\Aurigma\DesignAtoms\Model\UpdateColorsRequest**](../Model/UpdateColorsRequest.md)|  | [optional] |

### Return type

**mixed**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsViewerUpdateByMultiCallRequest()`

```php
designAtomsViewerUpdateByMultiCallRequest($tenant_id, $multi_call_request): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsViewerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$multi_call_request = new \Aurigma\DesignAtoms\Model\MultiCallRequest(); // \Aurigma\DesignAtoms\Model\MultiCallRequest

try {
    $result = $apiInstance->designAtomsViewerUpdateByMultiCallRequest($tenant_id, $multi_call_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsViewerApi->designAtomsViewerUpdateByMultiCallRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **multi_call_request** | [**\Aurigma\DesignAtoms\Model\MultiCallRequest**](../Model/MultiCallRequest.md)|  | [optional] |

### Return type

**mixed**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsViewerUpdateCurvedTextItemHandler()`

```php
designAtomsViewerUpdateCurvedTextItemHandler($tenant_id, $update_handler_request): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsViewerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$update_handler_request = new \Aurigma\DesignAtoms\Model\UpdateHandlerRequest(); // \Aurigma\DesignAtoms\Model\UpdateHandlerRequest

try {
    $result = $apiInstance->designAtomsViewerUpdateCurvedTextItemHandler($tenant_id, $update_handler_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsViewerApi->designAtomsViewerUpdateCurvedTextItemHandler: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **update_handler_request** | [**\Aurigma\DesignAtoms\Model\UpdateHandlerRequest**](../Model/UpdateHandlerRequest.md)|  | [optional] |

### Return type

**mixed**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsViewerUpdateImageItemHandler()`

```php
designAtomsViewerUpdateImageItemHandler($tenant_id, $update_image_handler_request): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsViewerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$update_image_handler_request = new \Aurigma\DesignAtoms\Model\UpdateImageHandlerRequest(); // \Aurigma\DesignAtoms\Model\UpdateImageHandlerRequest

try {
    $result = $apiInstance->designAtomsViewerUpdateImageItemHandler($tenant_id, $update_image_handler_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsViewerApi->designAtomsViewerUpdateImageItemHandler: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **update_image_handler_request** | [**\Aurigma\DesignAtoms\Model\UpdateImageHandlerRequest**](../Model/UpdateImageHandlerRequest.md)|  | [optional] |

### Return type

**mixed**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsViewerUpdatePathBoundedTextItemHandler()`

```php
designAtomsViewerUpdatePathBoundedTextItemHandler($tenant_id, $update_handler_request): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsViewerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$update_handler_request = new \Aurigma\DesignAtoms\Model\UpdateHandlerRequest(); // \Aurigma\DesignAtoms\Model\UpdateHandlerRequest

try {
    $result = $apiInstance->designAtomsViewerUpdatePathBoundedTextItemHandler($tenant_id, $update_handler_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsViewerApi->designAtomsViewerUpdatePathBoundedTextItemHandler: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **update_handler_request** | [**\Aurigma\DesignAtoms\Model\UpdateHandlerRequest**](../Model/UpdateHandlerRequest.md)|  | [optional] |

### Return type

**mixed**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsViewerUpdatePlainTextItemHandler()`

```php
designAtomsViewerUpdatePlainTextItemHandler($tenant_id, $update_handler_request): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsViewerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$update_handler_request = new \Aurigma\DesignAtoms\Model\UpdateHandlerRequest(); // \Aurigma\DesignAtoms\Model\UpdateHandlerRequest

try {
    $result = $apiInstance->designAtomsViewerUpdatePlainTextItemHandler($tenant_id, $update_handler_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsViewerApi->designAtomsViewerUpdatePlainTextItemHandler: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **update_handler_request** | [**\Aurigma\DesignAtoms\Model\UpdateHandlerRequest**](../Model/UpdateHandlerRequest.md)|  | [optional] |

### Return type

**mixed**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsViewerUpdateShapeItemHandler()`

```php
designAtomsViewerUpdateShapeItemHandler($tenant_id, $update_handler_request): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsViewerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$update_handler_request = new \Aurigma\DesignAtoms\Model\UpdateHandlerRequest(); // \Aurigma\DesignAtoms\Model\UpdateHandlerRequest

try {
    $result = $apiInstance->designAtomsViewerUpdateShapeItemHandler($tenant_id, $update_handler_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsViewerApi->designAtomsViewerUpdateShapeItemHandler: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **update_handler_request** | [**\Aurigma\DesignAtoms\Model\UpdateHandlerRequest**](../Model/UpdateHandlerRequest.md)|  | [optional] |

### Return type

**mixed**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
