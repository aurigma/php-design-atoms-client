# Aurigma\DesignAtoms\DesignAtomsCompatibilityApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**designAtomsCompatibilityCssFonts()**](DesignAtomsCompatibilityApi.md#designAtomsCompatibilityCssFonts) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/cssfonts | 
[**designAtomsCompatibilityFonts()**](DesignAtomsCompatibilityApi.md#designAtomsCompatibilityFonts) | **GET** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/fonts/{psName} | 
[**designAtomsCompatibilityGetCssFont()**](DesignAtomsCompatibilityApi.md#designAtomsCompatibilityGetCssFont) | **GET** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/GetCssFont | 
[**designAtomsCompatibilityGetFallbackFonts()**](DesignAtomsCompatibilityApi.md#designAtomsCompatibilityGetFallbackFonts) | **GET** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/GetFallbackFonts | 
[**designAtomsCompatibilityGetImageSize()**](DesignAtomsCompatibilityApi.md#designAtomsCompatibilityGetImageSize) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/GetImageSize | 
[**designAtomsCompatibilityGetLicense()**](DesignAtomsCompatibilityApi.md#designAtomsCompatibilityGetLicense) | **GET** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/license | 
[**designAtomsCompatibilityGetShapeBounds()**](DesignAtomsCompatibilityApi.md#designAtomsCompatibilityGetShapeBounds) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/GetShapeBounds | 
[**designAtomsCompatibilityGetWatermarkItems()**](DesignAtomsCompatibilityApi.md#designAtomsCompatibilityGetWatermarkItems) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/GetWatermarkItems | 
[**designAtomsCompatibilityImg()**](DesignAtomsCompatibilityApi.md#designAtomsCompatibilityImg) | **GET** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/img | 
[**designAtomsCompatibilityPth()**](DesignAtomsCompatibilityApi.md#designAtomsCompatibilityPth) | **GET** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/pth | 
[**designAtomsCompatibilityResource()**](DesignAtomsCompatibilityApi.md#designAtomsCompatibilityResource) | **GET** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/resource | 
[**designAtomsCompatibilitySvg()**](DesignAtomsCompatibilityApi.md#designAtomsCompatibilitySvg) | **GET** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/svg | 
[**designAtomsCompatibilityTxt()**](DesignAtomsCompatibilityApi.md#designAtomsCompatibilityTxt) | **GET** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/txt | 
[**designAtomsCompatibilityUpdateArchedTextItemHandler()**](DesignAtomsCompatibilityApi.md#designAtomsCompatibilityUpdateArchedTextItemHandler) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/UpdateArchedTextItemHandler | 
[**designAtomsCompatibilityUpdateAutoScaledTextItemHandler()**](DesignAtomsCompatibilityApi.md#designAtomsCompatibilityUpdateAutoScaledTextItemHandler) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/UpdateAutoScaledTextItemHandler | 
[**designAtomsCompatibilityUpdateBarcodeItemHandler()**](DesignAtomsCompatibilityApi.md#designAtomsCompatibilityUpdateBarcodeItemHandler) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/UpdateBarcodeItemHandler | 
[**designAtomsCompatibilityUpdateBoundedTextItemHandler()**](DesignAtomsCompatibilityApi.md#designAtomsCompatibilityUpdateBoundedTextItemHandler) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/UpdateBoundedTextItemHandler | 
[**designAtomsCompatibilityUpdateByColorData()**](DesignAtomsCompatibilityApi.md#designAtomsCompatibilityUpdateByColorData) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/UpdateByColorData | 
[**designAtomsCompatibilityUpdateByMultiCallRequest()**](DesignAtomsCompatibilityApi.md#designAtomsCompatibilityUpdateByMultiCallRequest) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/UpdateByMultiCallRequest | 
[**designAtomsCompatibilityUpdateCurvedTextItemHandler()**](DesignAtomsCompatibilityApi.md#designAtomsCompatibilityUpdateCurvedTextItemHandler) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/UpdateCurvedTextItemHandler | 
[**designAtomsCompatibilityUpdateImageItemHandler()**](DesignAtomsCompatibilityApi.md#designAtomsCompatibilityUpdateImageItemHandler) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/UpdateImageItemHandler | 
[**designAtomsCompatibilityUpdatePathBoundedTextItemHandler()**](DesignAtomsCompatibilityApi.md#designAtomsCompatibilityUpdatePathBoundedTextItemHandler) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/UpdatePathBoundedTextItemHandler | 
[**designAtomsCompatibilityUpdatePlainTextItemHandler()**](DesignAtomsCompatibilityApi.md#designAtomsCompatibilityUpdatePlainTextItemHandler) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/UpdatePlainTextItemHandler | 
[**designAtomsCompatibilityUpdateShapeItemHandler()**](DesignAtomsCompatibilityApi.md#designAtomsCompatibilityUpdateShapeItemHandler) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/UpdateShapeItemHandler | 


## `designAtomsCompatibilityCssFonts()`

```php
designAtomsCompatibilityCssFonts($tenant_id, $fonts_method_data): string
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 56; // int
$fonts_method_data = new \Aurigma\DesignAtoms\Model\FontsMethodData(); // \Aurigma\DesignAtoms\Model\FontsMethodData

try {
    $result = $apiInstance->designAtomsCompatibilityCssFonts($tenant_id, $fonts_method_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsCompatibilityApi->designAtomsCompatibilityCssFonts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**|  |
 **fonts_method_data** | [**\Aurigma\DesignAtoms\Model\FontsMethodData**](../Model/FontsMethodData.md)|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsCompatibilityFonts()`

```php
designAtomsCompatibilityFonts($tenant_id, $ps_name): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 56; // int
$ps_name = 'ps_name_example'; // string

try {
    $result = $apiInstance->designAtomsCompatibilityFonts($tenant_id, $ps_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsCompatibilityApi->designAtomsCompatibilityFonts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**|  |
 **ps_name** | **string**|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsCompatibilityGetCssFont()`

```php
designAtomsCompatibilityGetCssFont($tenant_id, $font_key): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 56; // int
$font_key = 'font_key_example'; // string

try {
    $result = $apiInstance->designAtomsCompatibilityGetCssFont($tenant_id, $font_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsCompatibilityApi->designAtomsCompatibilityGetCssFont: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**|  |
 **font_key** | **string**|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsCompatibilityGetFallbackFonts()`

```php
designAtomsCompatibilityGetFallbackFonts($tenant_id): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 56; // int

try {
    $result = $apiInstance->designAtomsCompatibilityGetFallbackFonts($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsCompatibilityApi->designAtomsCompatibilityGetFallbackFonts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsCompatibilityGetImageSize()`

```php
designAtomsCompatibilityGetImageSize($tenant_id, $get_image_size_request): \Aurigma\DesignAtoms\Model\NullAbleSize
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 56; // int
$get_image_size_request = new \Aurigma\DesignAtoms\Model\GetImageSizeRequest(); // \Aurigma\DesignAtoms\Model\GetImageSizeRequest

try {
    $result = $apiInstance->designAtomsCompatibilityGetImageSize($tenant_id, $get_image_size_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsCompatibilityApi->designAtomsCompatibilityGetImageSize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**|  |
 **get_image_size_request** | [**\Aurigma\DesignAtoms\Model\GetImageSizeRequest**](../Model/GetImageSizeRequest.md)|  | [optional]

### Return type

[**\Aurigma\DesignAtoms\Model\NullAbleSize**](../Model/NullAbleSize.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsCompatibilityGetLicense()`

```php
designAtomsCompatibilityGetLicense($tenant_id): string
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 56; // int

try {
    $result = $apiInstance->designAtomsCompatibilityGetLicense($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsCompatibilityApi->designAtomsCompatibilityGetLicense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsCompatibilityGetShapeBounds()`

```php
designAtomsCompatibilityGetShapeBounds($tenant_id, $get_shape_bounds_request): \Aurigma\DesignAtoms\Model\RectangleF
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 56; // int
$get_shape_bounds_request = new \Aurigma\DesignAtoms\Model\GetShapeBoundsRequest(); // \Aurigma\DesignAtoms\Model\GetShapeBoundsRequest

try {
    $result = $apiInstance->designAtomsCompatibilityGetShapeBounds($tenant_id, $get_shape_bounds_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsCompatibilityApi->designAtomsCompatibilityGetShapeBounds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**|  |
 **get_shape_bounds_request** | [**\Aurigma\DesignAtoms\Model\GetShapeBoundsRequest**](../Model/GetShapeBoundsRequest.md)|  | [optional]

### Return type

[**\Aurigma\DesignAtoms\Model\RectangleF**](../Model/RectangleF.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsCompatibilityGetWatermarkItems()`

```php
designAtomsCompatibilityGetWatermarkItems($tenant_id, $body): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 56; // int
$body = NULL; // mixed

try {
    $result = $apiInstance->designAtomsCompatibilityGetWatermarkItems($tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsCompatibilityApi->designAtomsCompatibilityGetWatermarkItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**|  |
 **body** | **mixed**|  | [optional]

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsCompatibilityImg()`

```php
designAtomsCompatibilityImg($tenant_id, $f, $w, $h, $cmyk, $rgb, $grayscale, $target, $sq, $effect, $kp, $color, $obm, $oo, $alpha_mask, $page, $colorize_color): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 56; // int
$f = 'f_example'; // string
$w = 56; // int
$h = 56; // int
$cmyk = 'cmyk_example'; // string
$rgb = 'rgb_example'; // string
$grayscale = 'grayscale_example'; // string
$target = 'target_example'; // string
$sq = True; // bool
$effect = 'effect_example'; // string
$kp = True; // bool
$color = 'color_example'; // string
$obm = 'obm_example'; // string
$oo = 3.4; // float
$alpha_mask = True; // bool
$page = 56; // int
$colorize_color = 'colorize_color_example'; // string

try {
    $result = $apiInstance->designAtomsCompatibilityImg($tenant_id, $f, $w, $h, $cmyk, $rgb, $grayscale, $target, $sq, $effect, $kp, $color, $obm, $oo, $alpha_mask, $page, $colorize_color);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsCompatibilityApi->designAtomsCompatibilityImg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**|  |
 **f** | **string**|  | [optional]
 **w** | **int**|  | [optional]
 **h** | **int**|  | [optional]
 **cmyk** | **string**|  | [optional]
 **rgb** | **string**|  | [optional]
 **grayscale** | **string**|  | [optional]
 **target** | **string**|  | [optional]
 **sq** | **bool**|  | [optional]
 **effect** | **string**|  | [optional]
 **kp** | **bool**|  | [optional]
 **color** | **string**|  | [optional]
 **obm** | **string**|  | [optional]
 **oo** | **float**|  | [optional]
 **alpha_mask** | **bool**|  | [optional]
 **page** | **int**|  | [optional]
 **colorize_color** | **string**|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsCompatibilityPth()`

```php
designAtomsCompatibilityPth($tenant_id, $f): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 56; // int
$f = 'f_example'; // string

try {
    $result = $apiInstance->designAtomsCompatibilityPth($tenant_id, $f);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsCompatibilityApi->designAtomsCompatibilityPth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**|  |
 **f** | **string**|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsCompatibilityResource()`

```php
designAtomsCompatibilityResource($tenant_id, $image): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 56; // int
$image = 'image_example'; // string

try {
    $result = $apiInstance->designAtomsCompatibilityResource($tenant_id, $image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsCompatibilityApi->designAtomsCompatibilityResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**|  |
 **image** | **string**|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsCompatibilitySvg()`

```php
designAtomsCompatibilitySvg($tenant_id, $f): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 56; // int
$f = 'f_example'; // string

try {
    $result = $apiInstance->designAtomsCompatibilitySvg($tenant_id, $f);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsCompatibilityApi->designAtomsCompatibilitySvg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**|  |
 **f** | **string**|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsCompatibilityTxt()`

```php
designAtomsCompatibilityTxt($tenant_id, $f): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 56; // int
$f = 'f_example'; // string

try {
    $result = $apiInstance->designAtomsCompatibilityTxt($tenant_id, $f);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsCompatibilityApi->designAtomsCompatibilityTxt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**|  |
 **f** | **string**|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsCompatibilityUpdateArchedTextItemHandler()`

```php
designAtomsCompatibilityUpdateArchedTextItemHandler($tenant_id, $update_handler_request): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 56; // int
$update_handler_request = new \Aurigma\DesignAtoms\Model\UpdateHandlerRequest(); // \Aurigma\DesignAtoms\Model\UpdateHandlerRequest

try {
    $result = $apiInstance->designAtomsCompatibilityUpdateArchedTextItemHandler($tenant_id, $update_handler_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsCompatibilityApi->designAtomsCompatibilityUpdateArchedTextItemHandler: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**|  |
 **update_handler_request** | [**\Aurigma\DesignAtoms\Model\UpdateHandlerRequest**](../Model/UpdateHandlerRequest.md)|  | [optional]

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsCompatibilityUpdateAutoScaledTextItemHandler()`

```php
designAtomsCompatibilityUpdateAutoScaledTextItemHandler($tenant_id, $update_handler_request): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 56; // int
$update_handler_request = new \Aurigma\DesignAtoms\Model\UpdateHandlerRequest(); // \Aurigma\DesignAtoms\Model\UpdateHandlerRequest

try {
    $result = $apiInstance->designAtomsCompatibilityUpdateAutoScaledTextItemHandler($tenant_id, $update_handler_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsCompatibilityApi->designAtomsCompatibilityUpdateAutoScaledTextItemHandler: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**|  |
 **update_handler_request** | [**\Aurigma\DesignAtoms\Model\UpdateHandlerRequest**](../Model/UpdateHandlerRequest.md)|  | [optional]

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsCompatibilityUpdateBarcodeItemHandler()`

```php
designAtomsCompatibilityUpdateBarcodeItemHandler($tenant_id, $update_handler_request): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 56; // int
$update_handler_request = new \Aurigma\DesignAtoms\Model\UpdateHandlerRequest(); // \Aurigma\DesignAtoms\Model\UpdateHandlerRequest

try {
    $result = $apiInstance->designAtomsCompatibilityUpdateBarcodeItemHandler($tenant_id, $update_handler_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsCompatibilityApi->designAtomsCompatibilityUpdateBarcodeItemHandler: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**|  |
 **update_handler_request** | [**\Aurigma\DesignAtoms\Model\UpdateHandlerRequest**](../Model/UpdateHandlerRequest.md)|  | [optional]

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsCompatibilityUpdateBoundedTextItemHandler()`

```php
designAtomsCompatibilityUpdateBoundedTextItemHandler($tenant_id, $update_handler_request): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 56; // int
$update_handler_request = new \Aurigma\DesignAtoms\Model\UpdateHandlerRequest(); // \Aurigma\DesignAtoms\Model\UpdateHandlerRequest

try {
    $result = $apiInstance->designAtomsCompatibilityUpdateBoundedTextItemHandler($tenant_id, $update_handler_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsCompatibilityApi->designAtomsCompatibilityUpdateBoundedTextItemHandler: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**|  |
 **update_handler_request** | [**\Aurigma\DesignAtoms\Model\UpdateHandlerRequest**](../Model/UpdateHandlerRequest.md)|  | [optional]

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsCompatibilityUpdateByColorData()`

```php
designAtomsCompatibilityUpdateByColorData($tenant_id, $update_colors_request): string
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 56; // int
$update_colors_request = new \Aurigma\DesignAtoms\Model\UpdateColorsRequest(); // \Aurigma\DesignAtoms\Model\UpdateColorsRequest

try {
    $result = $apiInstance->designAtomsCompatibilityUpdateByColorData($tenant_id, $update_colors_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsCompatibilityApi->designAtomsCompatibilityUpdateByColorData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**|  |
 **update_colors_request** | [**\Aurigma\DesignAtoms\Model\UpdateColorsRequest**](../Model/UpdateColorsRequest.md)|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsCompatibilityUpdateByMultiCallRequest()`

```php
designAtomsCompatibilityUpdateByMultiCallRequest($tenant_id, $multi_call_request): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 56; // int
$multi_call_request = new \Aurigma\DesignAtoms\Model\MultiCallRequest(); // \Aurigma\DesignAtoms\Model\MultiCallRequest

try {
    $result = $apiInstance->designAtomsCompatibilityUpdateByMultiCallRequest($tenant_id, $multi_call_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsCompatibilityApi->designAtomsCompatibilityUpdateByMultiCallRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**|  |
 **multi_call_request** | [**\Aurigma\DesignAtoms\Model\MultiCallRequest**](../Model/MultiCallRequest.md)|  | [optional]

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsCompatibilityUpdateCurvedTextItemHandler()`

```php
designAtomsCompatibilityUpdateCurvedTextItemHandler($tenant_id, $update_handler_request): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 56; // int
$update_handler_request = new \Aurigma\DesignAtoms\Model\UpdateHandlerRequest(); // \Aurigma\DesignAtoms\Model\UpdateHandlerRequest

try {
    $result = $apiInstance->designAtomsCompatibilityUpdateCurvedTextItemHandler($tenant_id, $update_handler_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsCompatibilityApi->designAtomsCompatibilityUpdateCurvedTextItemHandler: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**|  |
 **update_handler_request** | [**\Aurigma\DesignAtoms\Model\UpdateHandlerRequest**](../Model/UpdateHandlerRequest.md)|  | [optional]

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsCompatibilityUpdateImageItemHandler()`

```php
designAtomsCompatibilityUpdateImageItemHandler($tenant_id, $update_image_handler_request): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 56; // int
$update_image_handler_request = new \Aurigma\DesignAtoms\Model\UpdateImageHandlerRequest(); // \Aurigma\DesignAtoms\Model\UpdateImageHandlerRequest

try {
    $result = $apiInstance->designAtomsCompatibilityUpdateImageItemHandler($tenant_id, $update_image_handler_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsCompatibilityApi->designAtomsCompatibilityUpdateImageItemHandler: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**|  |
 **update_image_handler_request** | [**\Aurigma\DesignAtoms\Model\UpdateImageHandlerRequest**](../Model/UpdateImageHandlerRequest.md)|  | [optional]

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsCompatibilityUpdatePathBoundedTextItemHandler()`

```php
designAtomsCompatibilityUpdatePathBoundedTextItemHandler($tenant_id, $update_handler_request): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 56; // int
$update_handler_request = new \Aurigma\DesignAtoms\Model\UpdateHandlerRequest(); // \Aurigma\DesignAtoms\Model\UpdateHandlerRequest

try {
    $result = $apiInstance->designAtomsCompatibilityUpdatePathBoundedTextItemHandler($tenant_id, $update_handler_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsCompatibilityApi->designAtomsCompatibilityUpdatePathBoundedTextItemHandler: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**|  |
 **update_handler_request** | [**\Aurigma\DesignAtoms\Model\UpdateHandlerRequest**](../Model/UpdateHandlerRequest.md)|  | [optional]

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsCompatibilityUpdatePlainTextItemHandler()`

```php
designAtomsCompatibilityUpdatePlainTextItemHandler($tenant_id, $update_handler_request): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 56; // int
$update_handler_request = new \Aurigma\DesignAtoms\Model\UpdateHandlerRequest(); // \Aurigma\DesignAtoms\Model\UpdateHandlerRequest

try {
    $result = $apiInstance->designAtomsCompatibilityUpdatePlainTextItemHandler($tenant_id, $update_handler_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsCompatibilityApi->designAtomsCompatibilityUpdatePlainTextItemHandler: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**|  |
 **update_handler_request** | [**\Aurigma\DesignAtoms\Model\UpdateHandlerRequest**](../Model/UpdateHandlerRequest.md)|  | [optional]

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsCompatibilityUpdateShapeItemHandler()`

```php
designAtomsCompatibilityUpdateShapeItemHandler($tenant_id, $update_handler_request): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 56; // int
$update_handler_request = new \Aurigma\DesignAtoms\Model\UpdateHandlerRequest(); // \Aurigma\DesignAtoms\Model\UpdateHandlerRequest

try {
    $result = $apiInstance->designAtomsCompatibilityUpdateShapeItemHandler($tenant_id, $update_handler_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsCompatibilityApi->designAtomsCompatibilityUpdateShapeItemHandler: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**|  |
 **update_handler_request** | [**\Aurigma\DesignAtoms\Model\UpdateHandlerRequest**](../Model/UpdateHandlerRequest.md)|  | [optional]

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
