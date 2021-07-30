# Aurigma\DesignAtoms\DesignAtomsServiceApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**designAtomsServiceConvertColors()**](DesignAtomsServiceApi.md#designAtomsServiceConvertColors) | **POST** /api/atoms/v1/colorConverter | Converts colors
[**designAtomsServiceCreateDesign()**](DesignAtomsServiceApi.md#designAtomsServiceCreateDesign) | **POST** /api/atoms/v1/designs | Creates new design file with specified parameters and saves it in storage.
[**designAtomsServiceCreateItem()**](DesignAtomsServiceApi.md#designAtomsServiceCreateItem) | **POST** /api/atoms/v1/itemCreator | Creates product item
[**designAtomsServiceDeleteDataSchema()**](DesignAtomsServiceApi.md#designAtomsServiceDeleteDataSchema) | **DELETE** /api/atoms/v1/designs/{id}/schema | Deletes data schema from design file and updates design in storage.
[**designAtomsServiceDeleteVdpData()**](DesignAtomsServiceApi.md#designAtomsServiceDeleteVdpData) | **DELETE** /api/atoms/v1/designs/{id}/vdpData | Deletes variable data printing inforamtion from design file and updates design in storage.
[**designAtomsServiceLoadDataSchema()**](DesignAtomsServiceApi.md#designAtomsServiceLoadDataSchema) | **GET** /api/atoms/v1/designs/{id}/schema | Loads data schema from design file taken from storage
[**designAtomsServiceLoadProduct()**](DesignAtomsServiceApi.md#designAtomsServiceLoadProduct) | **GET** /api/atoms/v1/designs/{id}/model | Loads product from design file taken from storage
[**designAtomsServiceLoadVdpData()**](DesignAtomsServiceApi.md#designAtomsServiceLoadVdpData) | **GET** /api/atoms/v1/designs/{id}/vdpData | Loads variable data printing information from design file taken from storage
[**designAtomsServiceRenderProduct()**](DesignAtomsServiceApi.md#designAtomsServiceRenderProduct) | **POST** /api/atoms/v1/renderer | Render product proof image with specified parameters.
[**designAtomsServiceSaveDataSchema()**](DesignAtomsServiceApi.md#designAtomsServiceSaveDataSchema) | **PUT** /api/atoms/v1/designs/{id}/schema | Saves data schema to design file and updates design in storage.
[**designAtomsServiceSaveProduct()**](DesignAtomsServiceApi.md#designAtomsServiceSaveProduct) | **PUT** /api/atoms/v1/designs/{id}/model | Saves product to design file and updates design in storage.
[**designAtomsServiceSaveVdpData()**](DesignAtomsServiceApi.md#designAtomsServiceSaveVdpData) | **PUT** /api/atoms/v1/designs/{id}/vdpData | Saves variable data printing information to design file and updates design in storage.


## `designAtomsServiceConvertColors()`

```php
designAtomsServiceConvertColors($tenant_id, $convert_colors_model): mixed
```

Converts colors

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$convert_colors_model = new \Aurigma\DesignAtoms\Model\ConvertColorsModel(); // \Aurigma\DesignAtoms\Model\ConvertColorsModel | Convert colors operation parameters

try {
    $result = $apiInstance->designAtomsServiceConvertColors($tenant_id, $convert_colors_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceConvertColors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **convert_colors_model** | [**\Aurigma\DesignAtoms\Model\ConvertColorsModel**](../Model/ConvertColorsModel.md)| Convert colors operation parameters | [optional]

### Return type

**mixed**

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceCreateDesign()`

```php
designAtomsServiceCreateDesign($private_storage, $private_storage_owner, $tenant_id, $create_design_model): \Aurigma\DesignAtoms\Model\DesignInfo
```

Creates new design file with specified parameters and saves it in storage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$private_storage = True; // bool | If set to 'true' design will be saved to private storage
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier
$tenant_id = 56; // int | Tenant identifier
$create_design_model = new \Aurigma\DesignAtoms\Model\CreateDesignModel(); // \Aurigma\DesignAtoms\Model\CreateDesignModel | Design creation parameters

try {
    $result = $apiInstance->designAtomsServiceCreateDesign($private_storage, $private_storage_owner, $tenant_id, $create_design_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceCreateDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **private_storage** | **bool**| If set to &#39;true&#39; design will be saved to private storage | [optional]
 **private_storage_owner** | **string**| Private storage owner identifier | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]
 **create_design_model** | [**\Aurigma\DesignAtoms\Model\CreateDesignModel**](../Model/CreateDesignModel.md)| Design creation parameters | [optional]

### Return type

[**\Aurigma\DesignAtoms\Model\DesignInfo**](../Model/DesignInfo.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceCreateItem()`

```php
designAtomsServiceCreateItem($item_type, $tenant_id, $source_type, $source_id, $source_owner_id, $source_file): mixed
```

Creates product item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_type = new \Aurigma\DesignAtoms\Model\\Aurigma\DesignAtoms\Model\ItemType(); // \Aurigma\DesignAtoms\Model\ItemType | Desired item type
$tenant_id = 56; // int | Tenant identifier
$source_type = new \Aurigma\DesignAtoms\Model\ItemSourceType(); // \Aurigma\DesignAtoms\Model\ItemSourceType
$source_id = 'source_id_example'; // string | Item source id, used if source type is 'ImageStorage' or 'PrivateImageStorage'
$source_owner_id = 'source_owner_id_example'; // string | Item source id, used if source type is 'PrivateImageStorage'
$source_file = "/path/to/file.txt"; // \SplFileObject | Source file, used if source type is 'File'

try {
    $result = $apiInstance->designAtomsServiceCreateItem($item_type, $tenant_id, $source_type, $source_id, $source_owner_id, $source_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceCreateItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_type** | [**\Aurigma\DesignAtoms\Model\ItemType**](../Model/.md)| Desired item type | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]
 **source_type** | [**\Aurigma\DesignAtoms\Model\ItemSourceType**](../Model/ItemSourceType.md)|  | [optional]
 **source_id** | **string**| Item source id, used if source type is &#39;ImageStorage&#39; or &#39;PrivateImageStorage&#39; | [optional]
 **source_owner_id** | **string**| Item source id, used if source type is &#39;PrivateImageStorage&#39; | [optional]
 **source_file** | **\SplFileObject****\SplFileObject**| Source file, used if source type is &#39;File&#39; | [optional]

### Return type

**mixed**

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceDeleteDataSchema()`

```php
designAtomsServiceDeleteDataSchema($id, $tenant_id)
```

Deletes data schema from design file and updates design in storage.

Design with specified identifier must exist at desired storage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier
$tenant_id = 56; // int | Tenant identifier

try {
    $apiInstance->designAtomsServiceDeleteDataSchema($id, $tenant_id);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceDeleteDataSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceDeleteVdpData()`

```php
designAtomsServiceDeleteVdpData($id, $tenant_id)
```

Deletes variable data printing inforamtion from design file and updates design in storage.

Design with specified identifier must exist at desired storage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier
$tenant_id = 56; // int | Tenant identifier

try {
    $apiInstance->designAtomsServiceDeleteVdpData($id, $tenant_id);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceDeleteVdpData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceLoadDataSchema()`

```php
designAtomsServiceLoadDataSchema($id, $tenant_id): \SplFileObject
```

Loads data schema from design file taken from storage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designAtomsServiceLoadDataSchema($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceLoadDataSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceLoadProduct()`

```php
designAtomsServiceLoadProduct($id, $private_storage, $private_storage_owner, $tenant_id): mixed
```

Loads product from design file taken from storage

If privateStorage is not set then special design search procedure activated.  It tries to get specified design from public storage, and if design is not found then checks private storage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier
$private_storage = True; // bool | If set to 'true' design will be taken from private storage
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designAtomsServiceLoadProduct($id, $private_storage, $private_storage_owner, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceLoadProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design identifier |
 **private_storage** | **bool**| If set to &#39;true&#39; design will be taken from private storage | [optional]
 **private_storage_owner** | **string**| Private storage owner identifier | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

**mixed**

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceLoadVdpData()`

```php
designAtomsServiceLoadVdpData($id, $tenant_id): \Aurigma\DesignAtoms\Model\VdpDataModel
```

Loads variable data printing information from design file taken from storage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designAtomsServiceLoadVdpData($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceLoadVdpData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\Aurigma\DesignAtoms\Model\VdpDataModel**](../Model/VdpDataModel.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceRenderProduct()`

```php
designAtomsServiceRenderProduct($attachment, $tenant_id, $render_product_model): \SplFileObject
```

Render product proof image with specified parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment = True; // bool | If set to 'true', file will be provided as an attachment with unique filename supplied (default value is 'false')
$tenant_id = 56; // int | Tenant identifier
$render_product_model = new \Aurigma\DesignAtoms\Model\RenderProductModel(); // \Aurigma\DesignAtoms\Model\RenderProductModel | Preview parameters

try {
    $result = $apiInstance->designAtomsServiceRenderProduct($attachment, $tenant_id, $render_product_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceRenderProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment** | **bool**| If set to &#39;true&#39;, file will be provided as an attachment with unique filename supplied (default value is &#39;false&#39;) | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]
 **render_product_model** | [**\Aurigma\DesignAtoms\Model\RenderProductModel**](../Model/RenderProductModel.md)| Preview parameters | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceSaveDataSchema()`

```php
designAtomsServiceSaveDataSchema($id, $tenant_id, $schema)
```

Saves data schema to design file and updates design in storage.

Design with specified identifier must exist at desired storage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier
$tenant_id = 56; // int | Tenant identifier
$schema = "/path/to/file.txt"; // \SplFileObject | Data schema binary file

try {
    $apiInstance->designAtomsServiceSaveDataSchema($id, $tenant_id, $schema);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceSaveDataSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **schema** | **\SplFileObject****\SplFileObject**| Data schema binary file | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceSaveProduct()`

```php
designAtomsServiceSaveProduct($id, $private_storage, $private_storage_owner, $tenant_id, $body)
```

Saves product to design file and updates design in storage.

Design with specified identifier must exist at desired storage.  If 'privateStorage' parameter is not set, then special design search procedure activated.  It tries to find design with specified identifier in public storage, and if it is not there, then checks private storage  If design found anywhere, it will be updated

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier
$private_storage = True; // bool | If set to 'true' design will be saved to private storage
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier
$tenant_id = 56; // int | Tenant identifier
$body = NULL; // mixed | Serialized product description

try {
    $apiInstance->designAtomsServiceSaveProduct($id, $private_storage, $private_storage_owner, $tenant_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceSaveProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design identifier |
 **private_storage** | **bool**| If set to &#39;true&#39; design will be saved to private storage | [optional]
 **private_storage_owner** | **string**| Private storage owner identifier | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]
 **body** | **mixed**| Serialized product description | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceSaveVdpData()`

```php
designAtomsServiceSaveVdpData($id, $tenant_id, $vdp_data_model)
```

Saves variable data printing information to design file and updates design in storage.

Design with specified identifier must exist at desired storage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier
$tenant_id = 56; // int | Tenant identifier
$vdp_data_model = new \Aurigma\DesignAtoms\Model\VdpDataModel(); // \Aurigma\DesignAtoms\Model\VdpDataModel | Serialized vdp data

try {
    $apiInstance->designAtomsServiceSaveVdpData($id, $tenant_id, $vdp_data_model);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceSaveVdpData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **vdp_data_model** | [**\Aurigma\DesignAtoms\Model\VdpDataModel**](../Model/VdpDataModel.md)| Serialized vdp data | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
