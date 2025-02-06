# Aurigma\DesignAtoms\DesignAtomsPrintProductItemsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**designAtomsPrintProductItemsBatchCreateItemsFromFile()**](DesignAtomsPrintProductItemsApi.md#designAtomsPrintProductItemsBatchCreateItemsFromFile) | **POST** /api/atoms/v1/designs/print-product/items/from-file/batch-create | Creates multiple print-product items from input image files. |
| [**designAtomsPrintProductItemsBatchCreateItemsFromStorage()**](DesignAtomsPrintProductItemsApi.md#designAtomsPrintProductItemsBatchCreateItemsFromStorage) | **POST** /api/atoms/v1/designs/print-product/items/from-storage/batch-create | Creates multiple print-product items from the specified image files in storage. |
| [**designAtomsPrintProductItemsBatchCreateItemsFromUrl()**](DesignAtomsPrintProductItemsApi.md#designAtomsPrintProductItemsBatchCreateItemsFromUrl) | **POST** /api/atoms/v1/designs/print-product/items/from-url/batch-create | Creates multiple print-product items from remote web images provided by URLs list. |
| [**designAtomsPrintProductItemsCreateItemFromFile()**](DesignAtomsPrintProductItemsApi.md#designAtomsPrintProductItemsCreateItemFromFile) | **POST** /api/atoms/v1/designs/print-product/items/from-file | Creates print-product item from input image file. |
| [**designAtomsPrintProductItemsCreateItemFromStorage()**](DesignAtomsPrintProductItemsApi.md#designAtomsPrintProductItemsCreateItemFromStorage) | **POST** /api/atoms/v1/designs/print-product/items/from-storage | Creates print-product item from image file taken from storage. |
| [**designAtomsPrintProductItemsCreateItemFromUrl()**](DesignAtomsPrintProductItemsApi.md#designAtomsPrintProductItemsCreateItemFromUrl) | **POST** /api/atoms/v1/designs/print-product/items/from-url | Creates print-product item from remote web image provided by URL. |
| [**designAtomsPrintProductItemsExtractItemImage()**](DesignAtomsPrintProductItemsApi.md#designAtomsPrintProductItemsExtractItemImage) | **POST** /api/atoms/v1/designs/print-product/items/extract-image | Extracts print-product item image. |
| [**designAtomsPrintProductItemsFlattenItems()**](DesignAtomsPrintProductItemsApi.md#designAtomsPrintProductItemsFlattenItems) | **POST** /api/atoms/v1/designs/print-product/items/flatten | Flattens print-product items. |


## `designAtomsPrintProductItemsBatchCreateItemsFromFile()`

```php
designAtomsPrintProductItemsBatchCreateItemsFromFile($item_type, $tenant_id, $source_files): mixed
```

Creates multiple print-product items from input image files.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsPrintProductItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_type = new \Aurigma\DesignAtoms\Model\ItemType(); // ItemType | Desired print-product items type.
$tenant_id = 56; // int | Tenant identifier
$source_files = array("/path/to/file.txt"); // \SplFileObject[] | List of input files.

try {
    $result = $apiInstance->designAtomsPrintProductItemsBatchCreateItemsFromFile($item_type, $tenant_id, $source_files);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductItemsApi->designAtomsPrintProductItemsBatchCreateItemsFromFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_type** | [**ItemType**](../Model/.md)| Desired print-product items type. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **source_files** | **\SplFileObject[]**| List of input files. | [optional] |

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

## `designAtomsPrintProductItemsBatchCreateItemsFromStorage()`

```php
designAtomsPrintProductItemsBatchCreateItemsFromStorage($item_type, $tenant_id, $batch_create_items_from_storage_model): mixed
```

Creates multiple print-product items from the specified image files in storage.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsPrintProductItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_type = new \Aurigma\DesignAtoms\Model\ItemType(); // ItemType | Desired items type.
$tenant_id = 56; // int | Tenant identifier
$batch_create_items_from_storage_model = new \Aurigma\DesignAtoms\Model\BatchCreateItemsFromStorageModel(); // \Aurigma\DesignAtoms\Model\BatchCreateItemsFromStorageModel | Operation parameters.

try {
    $result = $apiInstance->designAtomsPrintProductItemsBatchCreateItemsFromStorage($item_type, $tenant_id, $batch_create_items_from_storage_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductItemsApi->designAtomsPrintProductItemsBatchCreateItemsFromStorage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_type** | [**ItemType**](../Model/.md)| Desired items type. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **batch_create_items_from_storage_model** | [**\Aurigma\DesignAtoms\Model\BatchCreateItemsFromStorageModel**](../Model/BatchCreateItemsFromStorageModel.md)| Operation parameters. | [optional] |

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

## `designAtomsPrintProductItemsBatchCreateItemsFromUrl()`

```php
designAtomsPrintProductItemsBatchCreateItemsFromUrl($item_type, $tenant_id, $batch_create_items_from_url_model): mixed
```

Creates multiple print-product items from remote web images provided by URLs list.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsPrintProductItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_type = new \Aurigma\DesignAtoms\Model\ItemType(); // ItemType | Desired items type.
$tenant_id = 56; // int | Tenant identifier
$batch_create_items_from_url_model = new \Aurigma\DesignAtoms\Model\BatchCreateItemsFromUrlModel(); // \Aurigma\DesignAtoms\Model\BatchCreateItemsFromUrlModel | Operation parameters.

try {
    $result = $apiInstance->designAtomsPrintProductItemsBatchCreateItemsFromUrl($item_type, $tenant_id, $batch_create_items_from_url_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductItemsApi->designAtomsPrintProductItemsBatchCreateItemsFromUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_type** | [**ItemType**](../Model/.md)| Desired items type. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **batch_create_items_from_url_model** | [**\Aurigma\DesignAtoms\Model\BatchCreateItemsFromUrlModel**](../Model/BatchCreateItemsFromUrlModel.md)| Operation parameters. | [optional] |

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

## `designAtomsPrintProductItemsCreateItemFromFile()`

```php
designAtomsPrintProductItemsCreateItemFromFile($item_type, $tenant_id, $source_file): mixed
```

Creates print-product item from input image file.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsPrintProductItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_type = new \Aurigma\DesignAtoms\Model\ItemType(); // ItemType | Desired item type.
$tenant_id = 56; // int | Tenant identifier
$source_file = "/path/to/file.txt"; // \SplFileObject | Input files.

try {
    $result = $apiInstance->designAtomsPrintProductItemsCreateItemFromFile($item_type, $tenant_id, $source_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductItemsApi->designAtomsPrintProductItemsCreateItemFromFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_type** | [**ItemType**](../Model/.md)| Desired item type. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **source_file** | **\SplFileObject****\SplFileObject**| Input files. | [optional] |

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

## `designAtomsPrintProductItemsCreateItemFromStorage()`

```php
designAtomsPrintProductItemsCreateItemFromStorage($item_type, $tenant_id, $create_item_from_storage_model): mixed
```

Creates print-product item from image file taken from storage.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsPrintProductItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_type = new \Aurigma\DesignAtoms\Model\ItemType(); // ItemType | Desired item type.
$tenant_id = 56; // int | Tenant identifier
$create_item_from_storage_model = new \Aurigma\DesignAtoms\Model\CreateItemFromStorageModel(); // \Aurigma\DesignAtoms\Model\CreateItemFromStorageModel | Operation parameters.

try {
    $result = $apiInstance->designAtomsPrintProductItemsCreateItemFromStorage($item_type, $tenant_id, $create_item_from_storage_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductItemsApi->designAtomsPrintProductItemsCreateItemFromStorage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_type** | [**ItemType**](../Model/.md)| Desired item type. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **create_item_from_storage_model** | [**\Aurigma\DesignAtoms\Model\CreateItemFromStorageModel**](../Model/CreateItemFromStorageModel.md)| Operation parameters. | [optional] |

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

## `designAtomsPrintProductItemsCreateItemFromUrl()`

```php
designAtomsPrintProductItemsCreateItemFromUrl($item_type, $tenant_id, $create_item_from_url_model): mixed
```

Creates print-product item from remote web image provided by URL.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsPrintProductItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_type = new \Aurigma\DesignAtoms\Model\ItemType(); // ItemType | Desired item type.
$tenant_id = 56; // int | Tenant identifier
$create_item_from_url_model = new \Aurigma\DesignAtoms\Model\CreateItemFromUrlModel(); // \Aurigma\DesignAtoms\Model\CreateItemFromUrlModel | Operation parameters.

try {
    $result = $apiInstance->designAtomsPrintProductItemsCreateItemFromUrl($item_type, $tenant_id, $create_item_from_url_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductItemsApi->designAtomsPrintProductItemsCreateItemFromUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_type** | [**ItemType**](../Model/.md)| Desired item type. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **create_item_from_url_model** | [**\Aurigma\DesignAtoms\Model\CreateItemFromUrlModel**](../Model/CreateItemFromUrlModel.md)| Operation parameters. | [optional] |

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

## `designAtomsPrintProductItemsExtractItemImage()`

```php
designAtomsPrintProductItemsExtractItemImage($tenant_id, $extract_item_image_model): \SplFileObject
```

Extracts print-product item image.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsPrintProductItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$extract_item_image_model = new \Aurigma\DesignAtoms\Model\ExtractItemImageModel(); // \Aurigma\DesignAtoms\Model\ExtractItemImageModel | Extraction parameters.

try {
    $result = $apiInstance->designAtomsPrintProductItemsExtractItemImage($tenant_id, $extract_item_image_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductItemsApi->designAtomsPrintProductItemsExtractItemImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **extract_item_image_model** | [**\Aurigma\DesignAtoms\Model\ExtractItemImageModel**](../Model/ExtractItemImageModel.md)| Extraction parameters. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsPrintProductItemsFlattenItems()`

```php
designAtomsPrintProductItemsFlattenItems($tenant_id, $request_body): mixed
```

Flattens print-product items.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsPrintProductItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$request_body = NULL; // mixed[] | List of print-product items to flatten.

try {
    $result = $apiInstance->designAtomsPrintProductItemsFlattenItems($tenant_id, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsPrintProductItemsApi->designAtomsPrintProductItemsFlattenItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **request_body** | [**mixed[]**](../Model/mixed.md)| List of print-product items to flatten. | [optional] |

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
