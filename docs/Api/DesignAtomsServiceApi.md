# Aurigma\DesignAtoms\DesignAtomsServiceApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**designAtomsServiceConvertColors()**](DesignAtomsServiceApi.md#designAtomsServiceConvertColors) | **POST** /api/atoms/v1/colorConverter | Converts colors
[**designAtomsServiceCreateDesign()**](DesignAtomsServiceApi.md#designAtomsServiceCreateDesign) | **POST** /api/atoms/v1/designs | Creates new design file with specified parameters and saves it in storage.
[**designAtomsServiceCreateItem()**](DesignAtomsServiceApi.md#designAtomsServiceCreateItem) | **POST** /api/atoms/v1/itemCreator | Creates product item
[**designAtomsServiceCreatePrivateDesignFromDesign()**](DesignAtomsServiceApi.md#designAtomsServiceCreatePrivateDesignFromDesign) | **POST** /api/atoms/v1/private-designs/from-design | Creates a private design from a public design.
[**designAtomsServiceCreatePrivateDesignFromResource()**](DesignAtomsServiceApi.md#designAtomsServiceCreatePrivateDesignFromResource) | **POST** /api/atoms/v1/private-designs/from-resource | Creates a private design from a public resource.
[**designAtomsServiceDeleteVdpData()**](DesignAtomsServiceApi.md#designAtomsServiceDeleteVdpData) | **DELETE** /api/atoms/v1/designs/{id}/vdpData | Deletes variable data printing inforamtion from design file and updates design in storage.
[**designAtomsServiceExtractBackground()**](DesignAtomsServiceApi.md#designAtomsServiceExtractBackground) | **GET** /api/atoms/v1/designs/{id}/background | Returns content of the background.
[**designAtomsServiceFlattenItems()**](DesignAtomsServiceApi.md#designAtomsServiceFlattenItems) | **POST** /api/atoms/v1/flatten | Flatten items.
[**designAtomsServiceGetVariables()**](DesignAtomsServiceApi.md#designAtomsServiceGetVariables) | **GET** /api/atoms/v1/designs/{id}/variables | Gets variable items information for design file taken from storage
[**designAtomsServiceLoadDataSchema()**](DesignAtomsServiceApi.md#designAtomsServiceLoadDataSchema) | **GET** /api/atoms/v1/designs/{id}/schema | Loads data schema from design file taken from storage
[**designAtomsServiceLoadProduct()**](DesignAtomsServiceApi.md#designAtomsServiceLoadProduct) | **GET** /api/atoms/v1/designs/{id}/model | Loads product (design model) from design file taken from storage
[**designAtomsServiceLoadProductFromResource()**](DesignAtomsServiceApi.md#designAtomsServiceLoadProductFromResource) | **GET** /api/atoms/v1/resources/{id}/as-design/model | Loads product (design model) from resource file taken from storage
[**designAtomsServiceLoadVdpData()**](DesignAtomsServiceApi.md#designAtomsServiceLoadVdpData) | **GET** /api/atoms/v1/designs/{id}/vdpData | Loads variable data printing information from design file taken from storage
[**designAtomsServicePatchProduct()**](DesignAtomsServiceApi.md#designAtomsServicePatchProduct) | **PATCH** /api/atoms/v1/designs/{id}/model | Patches product (design model) in design file.
[**designAtomsServiceRenderDesignPreview()**](DesignAtomsServiceApi.md#designAtomsServiceRenderDesignPreview) | **POST** /api/atoms/v1/render-design-preview | Renders a design preview with the specified parameters.
[**designAtomsServiceRenderDesignProof()**](DesignAtomsServiceApi.md#designAtomsServiceRenderDesignProof) | **POST** /api/atoms/v1/render-design-proof | Renders a design proof with the specified parameters.
[**designAtomsServiceRenderProduct()**](DesignAtomsServiceApi.md#designAtomsServiceRenderProduct) | **POST** /api/atoms/v1/renderer | Render product proof image with specified parameters.
[**designAtomsServiceSaveProduct()**](DesignAtomsServiceApi.md#designAtomsServiceSaveProduct) | **PUT** /api/atoms/v1/designs/{id}/model | Saves product (design model) to design file and updates design in storage.
[**designAtomsServiceSaveVdpData()**](DesignAtomsServiceApi.md#designAtomsServiceSaveVdpData) | **PUT** /api/atoms/v1/designs/{id}/vdpData | Saves variable data printing information to design file and updates design in storage.
[**designAtomsServiceSetVariables()**](DesignAtomsServiceApi.md#designAtomsServiceSetVariables) | **PUT** /api/atoms/v1/designs/{id}/variables | Sets variable items values for design file taken from storage


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

// Configure API key authorization: jwtBearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
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

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

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

// Configure API key authorization: jwtBearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
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

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

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

// Configure API key authorization: jwtBearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
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
$source_id = 'source_id_example'; // string | Source id, used if source type is 'ImageStorage' or 'PrivateImageStorage'
$source_owner_id = 'source_owner_id_example'; // string | Source owner id, used if source type is 'PrivateImageStorage'
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
 **source_id** | **string**| Source id, used if source type is &#39;ImageStorage&#39; or &#39;PrivateImageStorage&#39; | [optional]
 **source_owner_id** | **string**| Source owner id, used if source type is &#39;PrivateImageStorage&#39; | [optional]
 **source_file** | **\SplFileObject****\SplFileObject**| Source file, used if source type is &#39;File&#39; | [optional]

### Return type

**mixed**

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceCreatePrivateDesignFromDesign()`

```php
designAtomsServiceCreatePrivateDesignFromDesign($design_id, $private_design_id, $private_storage_owner, $tenant_id)
```

Creates a private design from a public design.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: jwtBearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$design_id = 'design_id_example'; // string | Public design ID.
$private_design_id = 'private_design_id_example'; // string | Private design ID.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner ID.
$tenant_id = 56; // int | Tenant identifier

try {
    $apiInstance->designAtomsServiceCreatePrivateDesignFromDesign($design_id, $private_design_id, $private_storage_owner, $tenant_id);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceCreatePrivateDesignFromDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **design_id** | **string**| Public design ID. | [optional]
 **private_design_id** | **string**| Private design ID. | [optional]
 **private_storage_owner** | **string**| Private storage owner ID. | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceCreatePrivateDesignFromResource()`

```php
designAtomsServiceCreatePrivateDesignFromResource($resource_id, $private_design_id, $private_storage_owner, $tenant_id)
```

Creates a private design from a public resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: jwtBearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource_id = 'resource_id_example'; // string | Resource ID.
$private_design_id = 'private_design_id_example'; // string | Private design ID.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner ID.
$tenant_id = 56; // int | Tenant identifier

try {
    $apiInstance->designAtomsServiceCreatePrivateDesignFromResource($resource_id, $private_design_id, $private_storage_owner, $tenant_id);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceCreatePrivateDesignFromResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_id** | **string**| Resource ID. | [optional]
 **private_design_id** | **string**| Private design ID. | [optional]
 **private_storage_owner** | **string**| Private storage owner ID. | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceDeleteVdpData()`

```php
designAtomsServiceDeleteVdpData($id, $private_storage, $private_storage_owner, $tenant_id)
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

// Configure API key authorization: jwtBearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
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
    $apiInstance->designAtomsServiceDeleteVdpData($id, $private_storage, $private_storage_owner, $tenant_id);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceDeleteVdpData: ', $e->getMessage(), PHP_EOL;
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

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceExtractBackground()`

```php
designAtomsServiceExtractBackground($id, $surface_index, $private_storage_owner, $tenant_id): \SplFileObject
```

Returns content of the background.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: jwtBearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$surface_index = 56; // int | Surface index.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designAtomsServiceExtractBackground($id, $surface_index, $private_storage_owner, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceExtractBackground: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design identifier. |
 **surface_index** | **int**| Surface index. | [optional]
 **private_storage_owner** | **string**| Private storage owner identifier. | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceFlattenItems()`

```php
designAtomsServiceFlattenItems($tenant_id, $request_body): mixed
```

Flatten items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: jwtBearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$request_body = NULL; // mixed[] | Items to flatten.

try {
    $result = $apiInstance->designAtomsServiceFlattenItems($tenant_id, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceFlattenItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **request_body** | [**mixed[]**](../Model/mixed.md)| Items to flatten. | [optional]

### Return type

**mixed**

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceGetVariables()`

```php
designAtomsServiceGetVariables($id, $private_storage, $private_storage_owner, $tenant_id): \Aurigma\DesignAtoms\Model\VariablesModel
```

Gets variable items information for design file taken from storage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: jwtBearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
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
    $result = $apiInstance->designAtomsServiceGetVariables($id, $private_storage, $private_storage_owner, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceGetVariables: ', $e->getMessage(), PHP_EOL;
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

[**\Aurigma\DesignAtoms\Model\VariablesModel**](../Model/VariablesModel.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceLoadDataSchema()`

```php
designAtomsServiceLoadDataSchema($id, $private_storage, $private_storage_owner, $tenant_id): \SplFileObject
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

// Configure API key authorization: jwtBearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
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
    $result = $apiInstance->designAtomsServiceLoadDataSchema($id, $private_storage, $private_storage_owner, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceLoadDataSchema: ', $e->getMessage(), PHP_EOL;
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

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceLoadProduct()`

```php
designAtomsServiceLoadProduct($id, $private_storage, $private_storage_owner, $tenant_id): mixed
```

Loads product (design model) from design file taken from storage

If privateStorage is not set then special design search procedure activated.  It tries to get specified design from public storage, and if design is not found then checks private storage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: jwtBearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
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

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceLoadProductFromResource()`

```php
designAtomsServiceLoadProductFromResource($id, $private_storage, $private_storage_owner, $tenant_id): mixed
```

Loads product (design model) from resource file taken from storage

If privateStorage is not set then special resource search procedure activated.  It tries to get specified resource from public storage, and if resource is not found then checks private storage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: jwtBearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Resource identifier
$private_storage = True; // bool | If set to 'true' resource will be taken from private storage
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designAtomsServiceLoadProductFromResource($id, $private_storage, $private_storage_owner, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceLoadProductFromResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |
 **private_storage** | **bool**| If set to &#39;true&#39; resource will be taken from private storage | [optional]
 **private_storage_owner** | **string**| Private storage owner identifier | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

**mixed**

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceLoadVdpData()`

```php
designAtomsServiceLoadVdpData($id, $private_storage, $private_storage_owner, $tenant_id): \Aurigma\DesignAtoms\Model\VdpDataModel
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

// Configure API key authorization: jwtBearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
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
    $result = $apiInstance->designAtomsServiceLoadVdpData($id, $private_storage, $private_storage_owner, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceLoadVdpData: ', $e->getMessage(), PHP_EOL;
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

[**\Aurigma\DesignAtoms\Model\VdpDataModel**](../Model/VdpDataModel.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServicePatchProduct()`

```php
designAtomsServicePatchProduct($id, $private_storage, $private_storage_owner, $tenant_id, $patch_type, $replace_image_item_file_info_item_name, $replace_image_item_file_info_source_file, $replace_placeholder_item_content_info_placeholder_item_name, $replace_placeholder_item_content_info_new_content_type, $replace_placeholder_item_content_info_source_file)
```

Patches product (design model) in design file.

Design with specified identifier must exist at desired storage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: jwtBearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$private_storage = True; // bool | If set to 'true' design will be taken from private storage.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier
$patch_type = new \Aurigma\DesignAtoms\Model\ProductPatchType(); // \Aurigma\DesignAtoms\Model\ProductPatchType
$replace_image_item_file_info_item_name = 'replace_image_item_file_info_item_name_example'; // string | Item Name.
$replace_image_item_file_info_source_file = "/path/to/file.txt"; // \SplFileObject | Patch source file.
$replace_placeholder_item_content_info_placeholder_item_name = 'replace_placeholder_item_content_info_placeholder_item_name_example'; // string | Item Name.
$replace_placeholder_item_content_info_new_content_type = new \Aurigma\DesignAtoms\Model\PlaceholderItemContentType(); // \Aurigma\DesignAtoms\Model\PlaceholderItemContentType
$replace_placeholder_item_content_info_source_file = "/path/to/file.txt"; // \SplFileObject | Patch source file.

try {
    $apiInstance->designAtomsServicePatchProduct($id, $private_storage, $private_storage_owner, $tenant_id, $patch_type, $replace_image_item_file_info_item_name, $replace_image_item_file_info_source_file, $replace_placeholder_item_content_info_placeholder_item_name, $replace_placeholder_item_content_info_new_content_type, $replace_placeholder_item_content_info_source_file);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServicePatchProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design identifier. |
 **private_storage** | **bool**| If set to &#39;true&#39; design will be taken from private storage. | [optional]
 **private_storage_owner** | **string**| Private storage owner identifier. | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]
 **patch_type** | [**\Aurigma\DesignAtoms\Model\ProductPatchType**](../Model/ProductPatchType.md)|  | [optional]
 **replace_image_item_file_info_item_name** | **string**| Item Name. | [optional]
 **replace_image_item_file_info_source_file** | **\SplFileObject****\SplFileObject**| Patch source file. | [optional]
 **replace_placeholder_item_content_info_placeholder_item_name** | **string**| Item Name. | [optional]
 **replace_placeholder_item_content_info_new_content_type** | [**\Aurigma\DesignAtoms\Model\PlaceholderItemContentType**](../Model/PlaceholderItemContentType.md)|  | [optional]
 **replace_placeholder_item_content_info_source_file** | **\SplFileObject****\SplFileObject**| Patch source file. | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceRenderDesignPreview()`

```php
designAtomsServiceRenderDesignPreview($attachment, $tenant_id, $render_design_preview_model): \SplFileObject
```

Renders a design preview with the specified parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: jwtBearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment = True; // bool | If set to 'true', file will be provided as an attachment with unique filename supplied  (default value is 'false').
$tenant_id = 56; // int | Tenant identifier
$render_design_preview_model = new \Aurigma\DesignAtoms\Model\RenderDesignPreviewModel(); // \Aurigma\DesignAtoms\Model\RenderDesignPreviewModel | Render model with preview parameters.

try {
    $result = $apiInstance->designAtomsServiceRenderDesignPreview($attachment, $tenant_id, $render_design_preview_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceRenderDesignPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment** | **bool**| If set to &#39;true&#39;, file will be provided as an attachment with unique filename supplied  (default value is &#39;false&#39;). | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]
 **render_design_preview_model** | [**\Aurigma\DesignAtoms\Model\RenderDesignPreviewModel**](../Model/RenderDesignPreviewModel.md)| Render model with preview parameters. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceRenderDesignProof()`

```php
designAtomsServiceRenderDesignProof($attachment, $tenant_id, $render_design_proof_model): \SplFileObject
```

Renders a design proof with the specified parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: jwtBearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment = True; // bool | If set to 'true', file will be provided as an attachment with unique filename supplied  (default value is 'false').
$tenant_id = 56; // int | Tenant identifier
$render_design_proof_model = new \Aurigma\DesignAtoms\Model\RenderDesignProofModel(); // \Aurigma\DesignAtoms\Model\RenderDesignProofModel | Render model with proof parameters.

try {
    $result = $apiInstance->designAtomsServiceRenderDesignProof($attachment, $tenant_id, $render_design_proof_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceRenderDesignProof: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment** | **bool**| If set to &#39;true&#39;, file will be provided as an attachment with unique filename supplied  (default value is &#39;false&#39;). | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]
 **render_design_proof_model** | [**\Aurigma\DesignAtoms\Model\RenderDesignProofModel**](../Model/RenderDesignProofModel.md)| Render model with proof parameters. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/octet-stream`, `application/json`

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

// Configure API key authorization: jwtBearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment = True; // bool | If set to 'true', file will be provided as an attachment with unique filename supplied (default value is 'false').
$tenant_id = 56; // int | Tenant identifier
$render_product_model = new \Aurigma\DesignAtoms\Model\RenderProductModel(); // \Aurigma\DesignAtoms\Model\RenderProductModel | Preview parameters.

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
 **attachment** | **bool**| If set to &#39;true&#39;, file will be provided as an attachment with unique filename supplied (default value is &#39;false&#39;). | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]
 **render_product_model** | [**\Aurigma\DesignAtoms\Model\RenderProductModel**](../Model/RenderProductModel.md)| Preview parameters. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceSaveProduct()`

```php
designAtomsServiceSaveProduct($id, $private_storage, $private_storage_owner, $tenant_id, $body)
```

Saves product (design model) to design file and updates design in storage.

Design with specified identifier must exist at desired storage.  If 'privateStorage' parameter is not set, then special design search procedure activated.  It tries to find design with specified identifier in public storage, and if it is not there, then checks private storage  If design found anywhere, it will be updated

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: jwtBearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
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

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceSaveVdpData()`

```php
designAtomsServiceSaveVdpData($id, $private_storage, $private_storage_owner, $tenant_id, $vdp_data_model)
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

// Configure API key authorization: jwtBearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
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
$vdp_data_model = new \Aurigma\DesignAtoms\Model\VdpDataModel(); // \Aurigma\DesignAtoms\Model\VdpDataModel | Serialized vdp data

try {
    $apiInstance->designAtomsServiceSaveVdpData($id, $private_storage, $private_storage_owner, $tenant_id, $vdp_data_model);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceSaveVdpData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design identifier |
 **private_storage** | **bool**| If set to &#39;true&#39; design will be taken from private storage | [optional]
 **private_storage_owner** | **string**| Private storage owner identifier | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]
 **vdp_data_model** | [**\Aurigma\DesignAtoms\Model\VdpDataModel**](../Model/VdpDataModel.md)| Serialized vdp data | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceSetVariables()`

```php
designAtomsServiceSetVariables($id, $private_storage, $private_storage_owner, $tenant_id, $variables_model)
```

Sets variable items values for design file taken from storage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: jwtBearer
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\DesignAtoms\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
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
$variables_model = new \Aurigma\DesignAtoms\Model\VariablesModel(); // \Aurigma\DesignAtoms\Model\VariablesModel | Design variable values

try {
    $apiInstance->designAtomsServiceSetVariables($id, $private_storage, $private_storage_owner, $tenant_id, $variables_model);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceSetVariables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design identifier |
 **private_storage** | **bool**| If set to &#39;true&#39; design will be taken from private storage | [optional]
 **private_storage_owner** | **string**| Private storage owner identifier | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]
 **variables_model** | [**\Aurigma\DesignAtoms\Model\VariablesModel**](../Model/VariablesModel.md)| Design variable values | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
