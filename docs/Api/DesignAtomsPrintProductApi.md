# Aurigma\DesignAtoms\DesignAtomsPrintProductApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**designAtomsPrintProductAddDesignPrintAreaModel()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductAddDesignPrintAreaModel) | **POST** /api/atoms/v1/designs/{id}/print-product/print-areas/model | Inserts a new print-area provided as a json-serialized model at the specified position in an existing design file.  Print-area identifier will be reset by auto-generated value to prevent identifiers collisions. |
| [**designAtomsPrintProductAddDesignSurfaceModel()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductAddDesignSurfaceModel) | **POST** /api/atoms/v1/designs/{id}/print-product/surfaces/model | Inserts a new surface provided as a json-serialized model at the specified position in an existing design file.  All identifiers of a replaced surface (including surface identifier) will be reset by auto-generated values to prevent identifiers collisions. |
| [**designAtomsPrintProductDeleteDesignPrintArea()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductDeleteDesignPrintArea) | **DELETE** /api/atoms/v1/designs/{id}/print-product/print-areas/{printAreaId} | Deletes a specified print-area in an existing design file. |
| [**designAtomsPrintProductDeleteDesignSurface()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductDeleteDesignSurface) | **DELETE** /api/atoms/v1/designs/{id}/print-product/surfaces/{surfaceId} | Deletes a specified print-product surface in an existing design file. |
| [**designAtomsPrintProductGetDesignPrintAreaModel()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductGetDesignPrintAreaModel) | **GET** /api/atoms/v1/designs/{id}/print-product/print-areas/{printAreaId}/model | Returns a print-area of the specified design file as a json-serialized model. |
| [**designAtomsPrintProductGetDesignPrintAreas()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductGetDesignPrintAreas) | **GET** /api/atoms/v1/designs/{id}/print-product/print-areas | Returns a list of print-area descriptions of the specified design file. |
| [**designAtomsPrintProductGetDesignProductModel()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductGetDesignProductModel) | **GET** /api/atoms/v1/designs/{id}/print-product/model | Returns a print-product of the specified design file as a json-serialized model. |
| [**designAtomsPrintProductGetDesignSurfaceDownMockup()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductGetDesignSurfaceDownMockup) | **GET** /api/atoms/v1/designs/{id}/print-product/surfaces/{surfaceId}/mockup-down | Returns a down-mockup description of the specified surface in an existing design file. |
| [**designAtomsPrintProductGetDesignSurfaceDownMockupContent()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductGetDesignSurfaceDownMockupContent) | **GET** /api/atoms/v1/designs/{id}/print-product/surfaces/{surfaceId}/mockup-down/file | Returns a content file for down-mockup of the specified surface in an existing design file. |
| [**designAtomsPrintProductGetDesignSurfaceModel()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductGetDesignSurfaceModel) | **GET** /api/atoms/v1/designs/{id}/print-product/surfaces/{surfaceId}/model | Returns a print-product surface of the specified design file as a json-serialized model. |
| [**designAtomsPrintProductGetDesignSurfaceUpMockup()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductGetDesignSurfaceUpMockup) | **GET** /api/atoms/v1/designs/{id}/print-product/surfaces/{surfaceId}/mockup-up | Returns an up-mockup description of the specified surface in an existing design file. |
| [**designAtomsPrintProductGetDesignSurfaceUpMockupContent()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductGetDesignSurfaceUpMockupContent) | **GET** /api/atoms/v1/designs/{id}/print-product/surfaces/{surfaceId}/mockup-up/file | Returns a content file for up-mockup of the specified surface in an existing design file. |
| [**designAtomsPrintProductGetDesignSurfaces()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductGetDesignSurfaces) | **GET** /api/atoms/v1/designs/{id}/print-product/surfaces | Returns a list of print-product surfaces descriptions of the specified design file. |
| [**designAtomsPrintProductPatchDesignProduct()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductPatchDesignProduct) | **PATCH** /api/atoms/v1/designs/{id}/print-product | Patches a print-product of the specified design file. |
| [**designAtomsPrintProductReplaceDesignSurfaceModel()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductReplaceDesignSurfaceModel) | **PUT** /api/atoms/v1/designs/{id}/print-product/surfaces/{surfaceId}/model | Replaces a specified print-product surface in an existing design file with the data provided as a json-serialized surface model.  All identifiers of a replaced surface (including surface identifier) will be reset by auto-generated values to prevent identifiers collisions. |
| [**designAtomsPrintProductUpdateDesignPrintAreaModel()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductUpdateDesignPrintAreaModel) | **PUT** /api/atoms/v1/designs/{id}/print-product/print-areas/{printAreaId}/model | Updates a specified print-area in an existing design file with the data provided as a json-serialized print-area model. |
| [**designAtomsPrintProductUpdateDesignProductModel()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductUpdateDesignProductModel) | **PUT** /api/atoms/v1/designs/{id}/print-product/model | Saves a print-product provided as a json-serialized model to the specified design file. |
| [**designAtomsPrintProductUpdateDesignSurfaceDownMockup()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductUpdateDesignSurfaceDownMockup) | **PATCH** /api/atoms/v1/designs/{id}/print-product/surfaces/{surfaceId}/mockup-down | Updates a content file of down-mockup for the specified surface in an existing design file. |
| [**designAtomsPrintProductUpdateDesignSurfaceUpMockup()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductUpdateDesignSurfaceUpMockup) | **PATCH** /api/atoms/v1/designs/{id}/print-product/surfaces/{surfaceId}/mockup-up | Updates a content file of up-mockup for the specified surface in an existing design. |


## `designAtomsPrintProductAddDesignPrintAreaModel()`

```php
designAtomsPrintProductAddDesignPrintAreaModel($id, $surface_id, $private_storage_owner, $tenant_id, $body): mixed
```

Inserts a new print-area provided as a json-serialized model at the specified position in an existing design file.  Print-area identifier will be reset by auto-generated value to prevent identifiers collisions.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsPrintProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$surface_id = 'surface_id_example'; // string | Parent surface identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier
$body = NULL; // mixed | New print-area model.

try {
    $result = $apiInstance->designAtomsPrintProductAddDesignPrintAreaModel($id, $surface_id, $private_storage_owner, $tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductAddDesignPrintAreaModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **surface_id** | **string**| Parent surface identifier. | [optional] |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **body** | **mixed**| New print-area model. | [optional] |

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

## `designAtomsPrintProductAddDesignSurfaceModel()`

```php
designAtomsPrintProductAddDesignSurfaceModel($id, $surface_index, $private_storage_owner, $tenant_id, $body): mixed
```

Inserts a new surface provided as a json-serialized model at the specified position in an existing design file.  All identifiers of a replaced surface (including surface identifier) will be reset by auto-generated values to prevent identifiers collisions.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsPrintProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$surface_index = 56; // int | New surface index.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier
$body = NULL; // mixed | New surface model.

try {
    $result = $apiInstance->designAtomsPrintProductAddDesignSurfaceModel($id, $surface_index, $private_storage_owner, $tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductAddDesignSurfaceModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **surface_index** | **int**| New surface index. | [optional] |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **body** | **mixed**| New surface model. | [optional] |

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

## `designAtomsPrintProductDeleteDesignPrintArea()`

```php
designAtomsPrintProductDeleteDesignPrintArea($id, $print_area_id, $private_storage_owner, $tenant_id)
```

Deletes a specified print-area in an existing design file.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsPrintProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$print_area_id = 'print_area_id_example'; // string | Design print-area identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $apiInstance->designAtomsPrintProductDeleteDesignPrintArea($id, $print_area_id, $private_storage_owner, $tenant_id);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductDeleteDesignPrintArea: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **print_area_id** | **string**| Design print-area identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsPrintProductDeleteDesignSurface()`

```php
designAtomsPrintProductDeleteDesignSurface($id, $surface_id, $private_storage_owner, $tenant_id)
```

Deletes a specified print-product surface in an existing design file.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsPrintProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$surface_id = 'surface_id_example'; // string | Surface identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $apiInstance->designAtomsPrintProductDeleteDesignSurface($id, $surface_id, $private_storage_owner, $tenant_id);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductDeleteDesignSurface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **surface_id** | **string**| Surface identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsPrintProductGetDesignPrintAreaModel()`

```php
designAtomsPrintProductGetDesignPrintAreaModel($id, $print_area_id, $private_storage_owner, $tenant_id): mixed
```

Returns a print-area of the specified design file as a json-serialized model.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsPrintProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$print_area_id = 'print_area_id_example'; // string | Design print-area identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designAtomsPrintProductGetDesignPrintAreaModel($id, $print_area_id, $private_storage_owner, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductGetDesignPrintAreaModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **print_area_id** | **string**| Design print-area identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |

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

## `designAtomsPrintProductGetDesignPrintAreas()`

```php
designAtomsPrintProductGetDesignPrintAreas($id, $surface_id, $private_storage_owner, $tenant_id): \Aurigma\DesignAtoms\Model\DesignPrintAreaDto[]
```

Returns a list of print-area descriptions of the specified design file.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsPrintProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$surface_id = 'surface_id_example'; // string
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designAtomsPrintProductGetDesignPrintAreas($id, $surface_id, $private_storage_owner, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductGetDesignPrintAreas: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **surface_id** | **string**|  | [optional] |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

[**\Aurigma\DesignAtoms\Model\DesignPrintAreaDto[]**](../Model/DesignPrintAreaDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsPrintProductGetDesignProductModel()`

```php
designAtomsPrintProductGetDesignProductModel($id, $private_storage_owner, $tenant_id): mixed
```

Returns a print-product of the specified design file as a json-serialized model.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsPrintProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designAtomsPrintProductGetDesignProductModel($id, $private_storage_owner, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductGetDesignProductModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |

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

## `designAtomsPrintProductGetDesignSurfaceDownMockup()`

```php
designAtomsPrintProductGetDesignSurfaceDownMockup($id, $surface_id, $private_storage_owner, $tenant_id): \Aurigma\DesignAtoms\Model\DesignSurfaceMockupDto
```

Returns a down-mockup description of the specified surface in an existing design file.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsPrintProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$surface_id = 'surface_id_example'; // string | Design surface identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designAtomsPrintProductGetDesignSurfaceDownMockup($id, $surface_id, $private_storage_owner, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductGetDesignSurfaceDownMockup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **surface_id** | **string**| Design surface identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

[**\Aurigma\DesignAtoms\Model\DesignSurfaceMockupDto**](../Model/DesignSurfaceMockupDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsPrintProductGetDesignSurfaceDownMockupContent()`

```php
designAtomsPrintProductGetDesignSurfaceDownMockupContent($id, $surface_id, $private_storage_owner, $tenant_id): \SplFileObject
```

Returns a content file for down-mockup of the specified surface in an existing design file.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsPrintProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$surface_id = 'surface_id_example'; // string | Design surface identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designAtomsPrintProductGetDesignSurfaceDownMockupContent($id, $surface_id, $private_storage_owner, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductGetDesignSurfaceDownMockupContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **surface_id** | **string**| Design surface identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsPrintProductGetDesignSurfaceModel()`

```php
designAtomsPrintProductGetDesignSurfaceModel($id, $surface_id, $private_storage_owner, $tenant_id): mixed
```

Returns a print-product surface of the specified design file as a json-serialized model.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsPrintProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$surface_id = 'surface_id_example'; // string | Surface identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designAtomsPrintProductGetDesignSurfaceModel($id, $surface_id, $private_storage_owner, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductGetDesignSurfaceModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **surface_id** | **string**| Surface identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |

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

## `designAtomsPrintProductGetDesignSurfaceUpMockup()`

```php
designAtomsPrintProductGetDesignSurfaceUpMockup($id, $surface_id, $private_storage_owner, $tenant_id): \Aurigma\DesignAtoms\Model\DesignSurfaceMockupDto
```

Returns an up-mockup description of the specified surface in an existing design file.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsPrintProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$surface_id = 'surface_id_example'; // string | Design surface identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designAtomsPrintProductGetDesignSurfaceUpMockup($id, $surface_id, $private_storage_owner, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductGetDesignSurfaceUpMockup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **surface_id** | **string**| Design surface identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

[**\Aurigma\DesignAtoms\Model\DesignSurfaceMockupDto**](../Model/DesignSurfaceMockupDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsPrintProductGetDesignSurfaceUpMockupContent()`

```php
designAtomsPrintProductGetDesignSurfaceUpMockupContent($id, $surface_id, $private_storage_owner, $tenant_id): \SplFileObject
```

Returns a content file for up-mockup of the specified surface in an existing design file.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsPrintProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$surface_id = 'surface_id_example'; // string | Design surface identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designAtomsPrintProductGetDesignSurfaceUpMockupContent($id, $surface_id, $private_storage_owner, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductGetDesignSurfaceUpMockupContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **surface_id** | **string**| Design surface identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsPrintProductGetDesignSurfaces()`

```php
designAtomsPrintProductGetDesignSurfaces($id, $private_storage_owner, $tenant_id): \Aurigma\DesignAtoms\Model\DesignSurfaceDto[]
```

Returns a list of print-product surfaces descriptions of the specified design file.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsPrintProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designAtomsPrintProductGetDesignSurfaces($id, $private_storage_owner, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductGetDesignSurfaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

[**\Aurigma\DesignAtoms\Model\DesignSurfaceDto[]**](../Model/DesignSurfaceDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsPrintProductPatchDesignProduct()`

```php
designAtomsPrintProductPatchDesignProduct($id, $private_storage_owner, $tenant_id, $patch_type, $replace_image_item_file_info_item_name, $replace_image_item_file_info_source_file, $replace_placeholder_item_content_info_placeholder_item_name, $replace_placeholder_item_content_info_new_content_type, $replace_placeholder_item_content_info_source_file)
```

Patches a print-product of the specified design file.

Design with specified identifier must exist at desired storage.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsPrintProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier
$patch_type = new \Aurigma\DesignAtoms\Model\ProductPatchType(); // \Aurigma\DesignAtoms\Model\ProductPatchType
$replace_image_item_file_info_item_name = 'replace_image_item_file_info_item_name_example'; // string | Item Name.
$replace_image_item_file_info_source_file = "/path/to/file.txt"; // \SplFileObject | Patch source file.
$replace_placeholder_item_content_info_placeholder_item_name = 'replace_placeholder_item_content_info_placeholder_item_name_example'; // string | Item Name.
$replace_placeholder_item_content_info_new_content_type = new \Aurigma\DesignAtoms\Model\PlaceholderItemContentType(); // \Aurigma\DesignAtoms\Model\PlaceholderItemContentType
$replace_placeholder_item_content_info_source_file = "/path/to/file.txt"; // \SplFileObject | Patch source file.

try {
    $apiInstance->designAtomsPrintProductPatchDesignProduct($id, $private_storage_owner, $tenant_id, $patch_type, $replace_image_item_file_info_item_name, $replace_image_item_file_info_source_file, $replace_placeholder_item_content_info_placeholder_item_name, $replace_placeholder_item_content_info_new_content_type, $replace_placeholder_item_content_info_source_file);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductPatchDesignProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **patch_type** | [**\Aurigma\DesignAtoms\Model\ProductPatchType**](../Model/ProductPatchType.md)|  | [optional] |
| **replace_image_item_file_info_item_name** | **string**| Item Name. | [optional] |
| **replace_image_item_file_info_source_file** | **\SplFileObject****\SplFileObject**| Patch source file. | [optional] |
| **replace_placeholder_item_content_info_placeholder_item_name** | **string**| Item Name. | [optional] |
| **replace_placeholder_item_content_info_new_content_type** | [**\Aurigma\DesignAtoms\Model\PlaceholderItemContentType**](../Model/PlaceholderItemContentType.md)|  | [optional] |
| **replace_placeholder_item_content_info_source_file** | **\SplFileObject****\SplFileObject**| Patch source file. | [optional] |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsPrintProductReplaceDesignSurfaceModel()`

```php
designAtomsPrintProductReplaceDesignSurfaceModel($id, $surface_id, $private_storage_owner, $tenant_id, $body): mixed
```

Replaces a specified print-product surface in an existing design file with the data provided as a json-serialized surface model.  All identifiers of a replaced surface (including surface identifier) will be reset by auto-generated values to prevent identifiers collisions.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsPrintProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$surface_id = 'surface_id_example'; // string | Design surface identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier
$body = NULL; // mixed | Updated surface model.

try {
    $result = $apiInstance->designAtomsPrintProductReplaceDesignSurfaceModel($id, $surface_id, $private_storage_owner, $tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductReplaceDesignSurfaceModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **surface_id** | **string**| Design surface identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **body** | **mixed**| Updated surface model. | [optional] |

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

## `designAtomsPrintProductUpdateDesignPrintAreaModel()`

```php
designAtomsPrintProductUpdateDesignPrintAreaModel($id, $print_area_id, $private_storage_owner, $tenant_id, $body): mixed
```

Updates a specified print-area in an existing design file with the data provided as a json-serialized print-area model.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsPrintProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$print_area_id = 'print_area_id_example'; // string | Design print-area identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier
$body = NULL; // mixed | Updated print-area model.

try {
    $result = $apiInstance->designAtomsPrintProductUpdateDesignPrintAreaModel($id, $print_area_id, $private_storage_owner, $tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductUpdateDesignPrintAreaModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **print_area_id** | **string**| Design print-area identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **body** | **mixed**| Updated print-area model. | [optional] |

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

## `designAtomsPrintProductUpdateDesignProductModel()`

```php
designAtomsPrintProductUpdateDesignProductModel($id, $private_storage_owner, $tenant_id, $body)
```

Saves a print-product provided as a json-serialized model to the specified design file.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsPrintProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier
$body = NULL; // mixed | Serialized print-product description.

try {
    $apiInstance->designAtomsPrintProductUpdateDesignProductModel($id, $private_storage_owner, $tenant_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductUpdateDesignProductModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **body** | **mixed**| Serialized print-product description. | [optional] |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsPrintProductUpdateDesignSurfaceDownMockup()`

```php
designAtomsPrintProductUpdateDesignSurfaceDownMockup($id, $surface_id, $private_storage_owner, $tenant_id, $position_top, $position_left, $source_file): mixed
```

Updates a content file of down-mockup for the specified surface in an existing design file.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsPrintProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$surface_id = 'surface_id_example'; // string | Design surface identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier
$position_top = 3.4; // float | Y axis position.
$position_left = 3.4; // float | X axis position.
$source_file = "/path/to/file.txt"; // \SplFileObject | New mockup file.

try {
    $result = $apiInstance->designAtomsPrintProductUpdateDesignSurfaceDownMockup($id, $surface_id, $private_storage_owner, $tenant_id, $position_top, $position_left, $source_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductUpdateDesignSurfaceDownMockup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **surface_id** | **string**| Design surface identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **position_top** | **float**| Y axis position. | [optional] |
| **position_left** | **float**| X axis position. | [optional] |
| **source_file** | **\SplFileObject****\SplFileObject**| New mockup file. | [optional] |

### Return type

**mixed**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsPrintProductUpdateDesignSurfaceUpMockup()`

```php
designAtomsPrintProductUpdateDesignSurfaceUpMockup($id, $surface_id, $private_storage_owner, $tenant_id, $position_top, $position_left, $source_file): mixed
```

Updates a content file of up-mockup for the specified surface in an existing design.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsPrintProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$surface_id = 'surface_id_example'; // string | Design surface identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier
$position_top = 3.4; // float | Y axis position.
$position_left = 3.4; // float | X axis position.
$source_file = "/path/to/file.txt"; // \SplFileObject | New mockup file.

try {
    $result = $apiInstance->designAtomsPrintProductUpdateDesignSurfaceUpMockup($id, $surface_id, $private_storage_owner, $tenant_id, $position_top, $position_left, $source_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductUpdateDesignSurfaceUpMockup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **surface_id** | **string**| Design surface identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **position_top** | **float**| Y axis position. | [optional] |
| **position_left** | **float**| X axis position. | [optional] |
| **source_file** | **\SplFileObject****\SplFileObject**| New mockup file. | [optional] |

### Return type

**mixed**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
