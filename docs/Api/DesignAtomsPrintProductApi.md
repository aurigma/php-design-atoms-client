# Aurigma\DesignAtoms\DesignAtomsPrintProductApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**designAtomsPrintProductAddDesignPrintArea()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductAddDesignPrintArea) | **POST** /api/atoms/v1/designs/{id}/print-product/print-areas | Inserts a new print-area created by the description at the specified position in an existing design file.  Print-area identifier will be reset by auto-generated value to prevent identifiers collisions. |
| [**designAtomsPrintProductAddDesignPrintAreaModel()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductAddDesignPrintAreaModel) | **POST** /api/atoms/v1/designs/{id}/print-product/print-areas/model | Inserts a new print-area provided as a json-serialized model at the specified position in an existing design file.  Print-area identifier will be reset by auto-generated value to prevent identifiers collisions. |
| [**designAtomsPrintProductAddDesignSurfaceContainerModel()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductAddDesignSurfaceContainerModel) | **POST** /api/atoms/v1/designs/{id}/print-product/containers/model | Inserts a new print-product container provided as a json-serialized model to the certain surface in an existing design file.  Print-product container identifier will be reset by auto-generated value to prevent identifiers collisions. |
| [**designAtomsPrintProductAddDesignSurfaceItemModel()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductAddDesignSurfaceItemModel) | **POST** /api/atoms/v1/designs/{id}/print-product/items/model | Inserts a new print-product item provided as a json-serialized model to the specified surface in an existing design file.  Item identifier will be reset by auto-generated value to prevent identifiers collisions. |
| [**designAtomsPrintProductAddDesignSurfaceModel()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductAddDesignSurfaceModel) | **POST** /api/atoms/v1/designs/{id}/print-product/surfaces/model | Inserts a new surface provided as a json-serialized model at the specified position in an existing design file.  All design elements identifiers within the surface (including surface identifier) will be reset by auto-generated values to prevent identifiers collisions. |
| [**designAtomsPrintProductDeleteDesignPrintArea()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductDeleteDesignPrintArea) | **DELETE** /api/atoms/v1/designs/{id}/print-product/print-areas/{printAreaId} | Deletes a specified print-area in an existing design file. |
| [**designAtomsPrintProductDeleteDesignSurface()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductDeleteDesignSurface) | **DELETE** /api/atoms/v1/designs/{id}/print-product/surfaces/{surfaceId} | Deletes a specified print-product surface in an existing design file. |
| [**designAtomsPrintProductDeleteDesignSurfaceContainer()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductDeleteDesignSurfaceContainer) | **DELETE** /api/atoms/v1/designs/{id}/print-product/containers/{containerId} | Deletes a specified print-product container in an existing design file. |
| [**designAtomsPrintProductDeleteDesignSurfaceItem()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductDeleteDesignSurfaceItem) | **DELETE** /api/atoms/v1/designs/{id}/print-product/items/{itemId} | Deletes a specified print-product item in an existing design file. |
| [**designAtomsPrintProductGetDesignPrintAreaModel()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductGetDesignPrintAreaModel) | **GET** /api/atoms/v1/designs/{id}/print-product/print-areas/{printAreaId}/model | Returns a print-area of the specified design file as a json-serialized model. |
| [**designAtomsPrintProductGetDesignPrintAreas()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductGetDesignPrintAreas) | **GET** /api/atoms/v1/designs/{id}/print-product/print-areas | Returns a list of print-area descriptions of the specified design file. |
| [**designAtomsPrintProductGetDesignProductModel()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductGetDesignProductModel) | **GET** /api/atoms/v1/designs/{id}/print-product/model | Returns a print-product of the specified design file as a json-serialized model. |
| [**designAtomsPrintProductGetDesignSurfaceContainerModel()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductGetDesignSurfaceContainerModel) | **GET** /api/atoms/v1/designs/{id}/print-product/containers/{containerId}/model | Returns a print-product container of the specified design file as a json-serialized model. |
| [**designAtomsPrintProductGetDesignSurfaceContainers()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductGetDesignSurfaceContainers) | **GET** /api/atoms/v1/designs/{id}/print-product/containers | Returns a list of print-product container descriptions of the specified design file. |
| [**designAtomsPrintProductGetDesignSurfaceDownMockup()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductGetDesignSurfaceDownMockup) | **GET** /api/atoms/v1/designs/{id}/print-product/surfaces/{surfaceId}/mockup-down | Returns a down-mockup description of the specified print-product surface in an existing design file. |
| [**designAtomsPrintProductGetDesignSurfaceDownMockupContent()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductGetDesignSurfaceDownMockupContent) | **GET** /api/atoms/v1/designs/{id}/print-product/surfaces/{surfaceId}/mockup-down/file | Returns a content file for down-mockup of the specified print-product surface in an existing design file. |
| [**designAtomsPrintProductGetDesignSurfaceItemModel()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductGetDesignSurfaceItemModel) | **GET** /api/atoms/v1/designs/{id}/print-product/items/{itemId}/model | Returns a print-product item of the specified design file as a json-serialized model. |
| [**designAtomsPrintProductGetDesignSurfaceItems()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductGetDesignSurfaceItems) | **GET** /api/atoms/v1/designs/{id}/print-product/items | Returns a list of print-product items descriptions of the specified design file. |
| [**designAtomsPrintProductGetDesignSurfaceModel()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductGetDesignSurfaceModel) | **GET** /api/atoms/v1/designs/{id}/print-product/surfaces/{surfaceId}/model | Returns a print-product surface of the specified design file as a json-serialized model. |
| [**designAtomsPrintProductGetDesignSurfaceUpMockup()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductGetDesignSurfaceUpMockup) | **GET** /api/atoms/v1/designs/{id}/print-product/surfaces/{surfaceId}/mockup-up | Returns an up-mockup description of the specified print-product surface in an existing design file. |
| [**designAtomsPrintProductGetDesignSurfaceUpMockupContent()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductGetDesignSurfaceUpMockupContent) | **GET** /api/atoms/v1/designs/{id}/print-product/surfaces/{surfaceId}/mockup-up/file | Returns a content file for up-mockup of the specified print-product surface in an existing design file. |
| [**designAtomsPrintProductGetDesignSurfaces()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductGetDesignSurfaces) | **GET** /api/atoms/v1/designs/{id}/print-product/surfaces | Returns a list of print-product surfaces descriptions of the specified design file. |
| [**designAtomsPrintProductPatchDesignProduct()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductPatchDesignProduct) | **PATCH** /api/atoms/v1/designs/{id}/print-product | Patches a print-product of the specified design file. |
| [**designAtomsPrintProductReplaceDesignSurfaceModel()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductReplaceDesignSurfaceModel) | **PUT** /api/atoms/v1/designs/{id}/print-product/surfaces/{surfaceId}/model | Replaces a specified print-product surface in an existing design file with the data provided as a json-serialized surface model.  All design elements identifiers within the surface (including surface identifier) will be reset by auto-generated values to prevent identifiers collisions. |
| [**designAtomsPrintProductUpdateDesignPrintArea()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductUpdateDesignPrintArea) | **PUT** /api/atoms/v1/designs/{id}/print-product/print-areas/{printAreaId} | Updates a specified print-area using a description in an existing design file. |
| [**designAtomsPrintProductUpdateDesignPrintAreaModel()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductUpdateDesignPrintAreaModel) | **PUT** /api/atoms/v1/designs/{id}/print-product/print-areas/{printAreaId}/model | Updates a specified print-area in an existing design file with the data provided as a json-serialized print-area model. |
| [**designAtomsPrintProductUpdateDesignProductModel()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductUpdateDesignProductModel) | **PUT** /api/atoms/v1/designs/{id}/print-product/model | Updates a print-product provided as a json-serialized model is the specified design file. |
| [**designAtomsPrintProductUpdateDesignSurfaceContainerModel()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductUpdateDesignSurfaceContainerModel) | **PUT** /api/atoms/v1/designs/{id}/print-product/containers/{containerId}/model | Updates a specified print-product container in an existing design file with the data provided as a json-serialized model. |
| [**designAtomsPrintProductUpdateDesignSurfaceDownMockup()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductUpdateDesignSurfaceDownMockup) | **PATCH** /api/atoms/v1/designs/{id}/print-product/surfaces/{surfaceId}/mockup-down | Updates a content file of down-mockup for the specified print-product surface in an existing design file. |
| [**designAtomsPrintProductUpdateDesignSurfaceItemModel()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductUpdateDesignSurfaceItemModel) | **PUT** /api/atoms/v1/designs/{id}/print-product/items/{itemId}/model | Updates a specified print-product surface item in an existing design file with the data provided as a json-serialized item model. |
| [**designAtomsPrintProductUpdateDesignSurfaceUpMockup()**](DesignAtomsPrintProductApi.md#designAtomsPrintProductUpdateDesignSurfaceUpMockup) | **PATCH** /api/atoms/v1/designs/{id}/print-product/surfaces/{surfaceId}/mockup-up | Updates a content file of up-mockup for the specified print-product surface in an existing design. |


## `designAtomsPrintProductAddDesignPrintArea()`

```php
designAtomsPrintProductAddDesignPrintArea($id, $private_storage_owner, $tenant_id, $design_print_area_params): mixed
```

Inserts a new print-area created by the description at the specified position in an existing design file.  Print-area identifier will be reset by auto-generated value to prevent identifiers collisions.

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
$design_print_area_params = new \Aurigma\DesignAtoms\Model\DesignPrintAreaParams(); // \Aurigma\DesignAtoms\Model\DesignPrintAreaParams | Print-area description model.

try {
    $result = $apiInstance->designAtomsPrintProductAddDesignPrintArea($id, $private_storage_owner, $tenant_id, $design_print_area_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductAddDesignPrintArea: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **design_print_area_params** | [**\Aurigma\DesignAtoms\Model\DesignPrintAreaParams**](../Model/DesignPrintAreaParams.md)| Print-area description model. | [optional] |

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
$body = NULL; // mixed | Json serialized model of a print-area.

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
| **body** | **mixed**| Json serialized model of a print-area. | [optional] |

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

## `designAtomsPrintProductAddDesignSurfaceContainerModel()`

```php
designAtomsPrintProductAddDesignSurfaceContainerModel($id, $surface_id, $index, $top, $left, $private_storage_owner, $tenant_id, $body): mixed
```

Inserts a new print-product container provided as a json-serialized model to the certain surface in an existing design file.  Print-product container identifier will be reset by auto-generated value to prevent identifiers collisions.

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
$surface_id = 'surface_id_example'; // string | Print-product surface identifier.
$index = 56; // int | Container index within the conatiners list of a surface.
$top = 3.4; // float | Y axis position.
$left = 3.4; // float | X axis position.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier
$body = NULL; // mixed | Json-serialized model of a new print-product container.

try {
    $result = $apiInstance->designAtomsPrintProductAddDesignSurfaceContainerModel($id, $surface_id, $index, $top, $left, $private_storage_owner, $tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductAddDesignSurfaceContainerModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **surface_id** | **string**| Print-product surface identifier. | [optional] |
| **index** | **int**| Container index within the conatiners list of a surface. | [optional] |
| **top** | **float**| Y axis position. | [optional] |
| **left** | **float**| X axis position. | [optional] |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **body** | **mixed**| Json-serialized model of a new print-product container. | [optional] |

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

## `designAtomsPrintProductAddDesignSurfaceItemModel()`

```php
designAtomsPrintProductAddDesignSurfaceItemModel($id, $container_id, $index, $top, $left, $private_storage_owner, $tenant_id, $body): mixed
```

Inserts a new print-product item provided as a json-serialized model to the specified surface in an existing design file.  Item identifier will be reset by auto-generated value to prevent identifiers collisions.

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
$container_id = 'container_id_example'; // string | Parent surface identifier.
$index = 56; // int | Item index within the items list of a container.
$top = 3.4; // float | Y axis position.
$left = 3.4; // float | X axis position.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier
$body = NULL; // mixed | Json-serialized model of a new print-product item.

try {
    $result = $apiInstance->designAtomsPrintProductAddDesignSurfaceItemModel($id, $container_id, $index, $top, $left, $private_storage_owner, $tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductAddDesignSurfaceItemModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **container_id** | **string**| Parent surface identifier. | [optional] |
| **index** | **int**| Item index within the items list of a container. | [optional] |
| **top** | **float**| Y axis position. | [optional] |
| **left** | **float**| X axis position. | [optional] |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **body** | **mixed**| Json-serialized model of a new print-product item. | [optional] |

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
designAtomsPrintProductAddDesignSurfaceModel($id, $index, $private_storage_owner, $tenant_id, $body): mixed
```

Inserts a new surface provided as a json-serialized model at the specified position in an existing design file.  All design elements identifiers within the surface (including surface identifier) will be reset by auto-generated values to prevent identifiers collisions.

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
$index = 56; // int | Surface index within the surfaces list of a design.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier
$body = NULL; // mixed | Json-serialized model of a print-prouduct surface.

try {
    $result = $apiInstance->designAtomsPrintProductAddDesignSurfaceModel($id, $index, $private_storage_owner, $tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductAddDesignSurfaceModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **index** | **int**| Surface index within the surfaces list of a design. | [optional] |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **body** | **mixed**| Json-serialized model of a print-prouduct surface. | [optional] |

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
$surface_id = 'surface_id_example'; // string | Print-product surface identifier.
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
| **surface_id** | **string**| Print-product surface identifier. | |
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

## `designAtomsPrintProductDeleteDesignSurfaceContainer()`

```php
designAtomsPrintProductDeleteDesignSurfaceContainer($id, $container_id, $private_storage_owner, $tenant_id)
```

Deletes a specified print-product container in an existing design file.

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
$container_id = 'container_id_example'; // string | Print-product container identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $apiInstance->designAtomsPrintProductDeleteDesignSurfaceContainer($id, $container_id, $private_storage_owner, $tenant_id);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductDeleteDesignSurfaceContainer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **container_id** | **string**| Print-product container identifier. | |
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

## `designAtomsPrintProductDeleteDesignSurfaceItem()`

```php
designAtomsPrintProductDeleteDesignSurfaceItem($id, $item_id, $private_storage_owner, $tenant_id)
```

Deletes a specified print-product item in an existing design file.

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
$item_id = 'item_id_example'; // string | Print-product item identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $apiInstance->designAtomsPrintProductDeleteDesignSurfaceItem($id, $item_id, $private_storage_owner, $tenant_id);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductDeleteDesignSurfaceItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **item_id** | **string**| Print-product item identifier. | |
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

## `designAtomsPrintProductGetDesignSurfaceContainerModel()`

```php
designAtomsPrintProductGetDesignSurfaceContainerModel($id, $container_id, $private_storage_owner, $tenant_id): mixed
```

Returns a print-product container of the specified design file as a json-serialized model.

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
$container_id = 'container_id_example'; // string | Print-product container identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designAtomsPrintProductGetDesignSurfaceContainerModel($id, $container_id, $private_storage_owner, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductGetDesignSurfaceContainerModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **container_id** | **string**| Print-product container identifier. | |
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

## `designAtomsPrintProductGetDesignSurfaceContainers()`

```php
designAtomsPrintProductGetDesignSurfaceContainers($id, $surface_id, $private_storage_owner, $tenant_id): \Aurigma\DesignAtoms\Model\DesignSurfaceContainerDto[]
```

Returns a list of print-product container descriptions of the specified design file.

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
$surface_id = 'surface_id_example'; // string | Print-product surface identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designAtomsPrintProductGetDesignSurfaceContainers($id, $surface_id, $private_storage_owner, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductGetDesignSurfaceContainers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **surface_id** | **string**| Print-product surface identifier. | [optional] |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

[**\Aurigma\DesignAtoms\Model\DesignSurfaceContainerDto[]**](../Model/DesignSurfaceContainerDto.md)

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

Returns a down-mockup description of the specified print-product surface in an existing design file.

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
$surface_id = 'surface_id_example'; // string | Print product surface identifier.
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
| **surface_id** | **string**| Print product surface identifier. | |
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

Returns a content file for down-mockup of the specified print-product surface in an existing design file.

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
$surface_id = 'surface_id_example'; // string | Print-product surface identifier.
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
| **surface_id** | **string**| Print-product surface identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |

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

## `designAtomsPrintProductGetDesignSurfaceItemModel()`

```php
designAtomsPrintProductGetDesignSurfaceItemModel($id, $item_id, $private_storage_owner, $tenant_id): mixed
```

Returns a print-product item of the specified design file as a json-serialized model.

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
$item_id = 'item_id_example'; // string | Print-product item identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designAtomsPrintProductGetDesignSurfaceItemModel($id, $item_id, $private_storage_owner, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductGetDesignSurfaceItemModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **item_id** | **string**| Print-product item identifier. | |
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

## `designAtomsPrintProductGetDesignSurfaceItems()`

```php
designAtomsPrintProductGetDesignSurfaceItems($id, $surface_id, $container_id, $parent_item_id, $private_storage_owner, $tenant_id): \Aurigma\DesignAtoms\Model\DesignSurfaceItemDto[]
```

Returns a list of print-product items descriptions of the specified design file.

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
$surface_id = 'surface_id_example'; // string | Print-product surface identifier.
$container_id = 'container_id_example'; // string | Print-product container identifier.
$parent_item_id = 'parent_item_id_example'; // string | Print-product item identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designAtomsPrintProductGetDesignSurfaceItems($id, $surface_id, $container_id, $parent_item_id, $private_storage_owner, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductGetDesignSurfaceItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **surface_id** | **string**| Print-product surface identifier. | [optional] |
| **container_id** | **string**| Print-product container identifier. | [optional] |
| **parent_item_id** | **string**| Print-product item identifier. | [optional] |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

[**\Aurigma\DesignAtoms\Model\DesignSurfaceItemDto[]**](../Model/DesignSurfaceItemDto.md)

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

Returns an up-mockup description of the specified print-product surface in an existing design file.

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
$surface_id = 'surface_id_example'; // string | Print-product surface identifier.
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
| **surface_id** | **string**| Print-product surface identifier. | |
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

Returns a content file for up-mockup of the specified print-product surface in an existing design file.

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
$surface_id = 'surface_id_example'; // string | Print-product surface identifier.
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
| **surface_id** | **string**| Print-product surface identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |

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
$patch_type = new \Aurigma\DesignAtoms\Model\ProductPatchType(); // \Aurigma\DesignAtoms\Model\ProductPatchType | Patch operation type.
$replace_image_item_file_info_item_name = 'replace_image_item_file_info_item_name_example'; // string | Item Name.
$replace_image_item_file_info_source_file = "/path/to/file.txt"; // \SplFileObject | Patch source file.
$replace_placeholder_item_content_info_placeholder_item_name = 'replace_placeholder_item_content_info_placeholder_item_name_example'; // string | Item Name.
$replace_placeholder_item_content_info_new_content_type = new \Aurigma\DesignAtoms\Model\PlaceholderItemContentType(); // \Aurigma\DesignAtoms\Model\PlaceholderItemContentType | New content type.
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
| **patch_type** | [**\Aurigma\DesignAtoms\Model\ProductPatchType**](../Model/ProductPatchType.md)| Patch operation type. | [optional] |
| **replace_image_item_file_info_item_name** | **string**| Item Name. | [optional] |
| **replace_image_item_file_info_source_file** | **\SplFileObject****\SplFileObject**| Patch source file. | [optional] |
| **replace_placeholder_item_content_info_placeholder_item_name** | **string**| Item Name. | [optional] |
| **replace_placeholder_item_content_info_new_content_type** | [**\Aurigma\DesignAtoms\Model\PlaceholderItemContentType**](../Model/PlaceholderItemContentType.md)| New content type. | [optional] |
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

Replaces a specified print-product surface in an existing design file with the data provided as a json-serialized surface model.  All design elements identifiers within the surface (including surface identifier) will be reset by auto-generated values to prevent identifiers collisions.

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
$surface_id = 'surface_id_example'; // string | Print-product surface identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier
$body = NULL; // mixed | Json-serialized model of a print-product surface.

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
| **surface_id** | **string**| Print-product surface identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **body** | **mixed**| Json-serialized model of a print-product surface. | [optional] |

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

## `designAtomsPrintProductUpdateDesignPrintArea()`

```php
designAtomsPrintProductUpdateDesignPrintArea($id, $print_area_id, $private_storage_owner, $tenant_id, $design_print_area_params): mixed
```

Updates a specified print-area using a description in an existing design file.

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
$design_print_area_params = new \Aurigma\DesignAtoms\Model\DesignPrintAreaParams(); // \Aurigma\DesignAtoms\Model\DesignPrintAreaParams | Print-area description model.

try {
    $result = $apiInstance->designAtomsPrintProductUpdateDesignPrintArea($id, $print_area_id, $private_storage_owner, $tenant_id, $design_print_area_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductUpdateDesignPrintArea: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **print_area_id** | **string**| Design print-area identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **design_print_area_params** | [**\Aurigma\DesignAtoms\Model\DesignPrintAreaParams**](../Model/DesignPrintAreaParams.md)| Print-area description model. | [optional] |

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
$body = NULL; // mixed | Json-serialized model of a print-area.

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
| **body** | **mixed**| Json-serialized model of a print-area. | [optional] |

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

Updates a print-product provided as a json-serialized model is the specified design file.

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
$body = NULL; // mixed | Json-serialized model of a print-product .

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
| **body** | **mixed**| Json-serialized model of a print-product . | [optional] |

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

## `designAtomsPrintProductUpdateDesignSurfaceContainerModel()`

```php
designAtomsPrintProductUpdateDesignSurfaceContainerModel($id, $container_id, $private_storage_owner, $tenant_id, $body): mixed
```

Updates a specified print-product container in an existing design file with the data provided as a json-serialized model.

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
$container_id = 'container_id_example'; // string | Print-product container identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier
$body = NULL; // mixed | Json-serialized model of a print-product container.

try {
    $result = $apiInstance->designAtomsPrintProductUpdateDesignSurfaceContainerModel($id, $container_id, $private_storage_owner, $tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductUpdateDesignSurfaceContainerModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **container_id** | **string**| Print-product container identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **body** | **mixed**| Json-serialized model of a print-product container. | [optional] |

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

## `designAtomsPrintProductUpdateDesignSurfaceDownMockup()`

```php
designAtomsPrintProductUpdateDesignSurfaceDownMockup($id, $surface_id, $private_storage_owner, $tenant_id, $position_top, $position_left, $source_file): mixed
```

Updates a content file of down-mockup for the specified print-product surface in an existing design file.

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
$surface_id = 'surface_id_example'; // string | Print-product surface identifier.
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
| **surface_id** | **string**| Print-product surface identifier. | |
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

## `designAtomsPrintProductUpdateDesignSurfaceItemModel()`

```php
designAtomsPrintProductUpdateDesignSurfaceItemModel($id, $item_id, $private_storage_owner, $tenant_id, $body): mixed
```

Updates a specified print-product surface item in an existing design file with the data provided as a json-serialized item model.

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
$item_id = 'item_id_example'; // string | Print-product item identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier
$body = NULL; // mixed | Json-serialized model of a print-product item.

try {
    $result = $apiInstance->designAtomsPrintProductUpdateDesignSurfaceItemModel($id, $item_id, $private_storage_owner, $tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductApi->designAtomsPrintProductUpdateDesignSurfaceItemModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **item_id** | **string**| Print-product item identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **body** | **mixed**| Json-serialized model of a print-product item. | [optional] |

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

## `designAtomsPrintProductUpdateDesignSurfaceUpMockup()`

```php
designAtomsPrintProductUpdateDesignSurfaceUpMockup($id, $surface_id, $private_storage_owner, $tenant_id, $position_top, $position_left, $source_file): mixed
```

Updates a content file of up-mockup for the specified print-product surface in an existing design.

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
$surface_id = 'surface_id_example'; // string | Print-product surface identifier.
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
| **surface_id** | **string**| Print-product surface identifier. | |
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
