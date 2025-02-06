# Aurigma\DesignAtoms\DesignAtomsServiceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**designAtomsServiceConvertColors()**](DesignAtomsServiceApi.md#designAtomsServiceConvertColors) | **POST** /api/atoms/v1/designs/print-product/convert-colors | Converts colors for print-product item manipulations. |
| [**designAtomsServiceCreateDesign()**](DesignAtomsServiceApi.md#designAtomsServiceCreateDesign) | **POST** /api/atoms/v1/designs | Creates new design file with specified parameters and saves it in storage. |
| [**designAtomsServiceCreateItem()**](DesignAtomsServiceApi.md#designAtomsServiceCreateItem) | **POST** /api/atoms/v1/designs/model/items | Creates print-product item. |
| [**designAtomsServiceCreatePrivateDesignFromDesign()**](DesignAtomsServiceApi.md#designAtomsServiceCreatePrivateDesignFromDesign) | **POST** /api/atoms/v1/private-designs/from-design | Creates a private design from a public design. |
| [**designAtomsServiceCreatePrivateDesignFromResource()**](DesignAtomsServiceApi.md#designAtomsServiceCreatePrivateDesignFromResource) | **POST** /api/atoms/v1/private-designs/from-resource | Creates a private design from a public resource. |
| [**designAtomsServiceDeleteVdpData()**](DesignAtomsServiceApi.md#designAtomsServiceDeleteVdpData) | **DELETE** /api/atoms/v1/designs/{id}/vdp-data | Deletes variable data printing information from design file and updates design file in storage. |
| [**designAtomsServiceExtractBackground()**](DesignAtomsServiceApi.md#designAtomsServiceExtractBackground) | **GET** /api/atoms/v1/designs/{id}/background | Returns image content of the background. |
| [**designAtomsServiceExtractItemImage()**](DesignAtomsServiceApi.md#designAtomsServiceExtractItemImage) | **POST** /api/atoms/v1/designs/model/items/extract-image | Extracts print-product item image. |
| [**designAtomsServiceFlattenItems()**](DesignAtomsServiceApi.md#designAtomsServiceFlattenItems) | **POST** /api/atoms/v1/designs/model/items/flatten | Flattens print-product items. |
| [**designAtomsServiceGetDesignParameters()**](DesignAtomsServiceApi.md#designAtomsServiceGetDesignParameters) | **GET** /api/atoms/v1/designs/{id}/parameters | Returns design parameters stored in product model. |
| [**designAtomsServiceGetVariables()**](DesignAtomsServiceApi.md#designAtomsServiceGetVariables) | **GET** /api/atoms/v1/designs/{id}/variables | Returns variable items information for design file taken from storage. |
| [**designAtomsServiceLoadDataSchema()**](DesignAtomsServiceApi.md#designAtomsServiceLoadDataSchema) | **GET** /api/atoms/v1/designs/{id}/schema | Loads a data schema from design file taken from storage. |
| [**designAtomsServiceLoadProduct()**](DesignAtomsServiceApi.md#designAtomsServiceLoadProduct) | **GET** /api/atoms/v1/designs/{id}/model | Loads print-product from design file taken from storage. |
| [**designAtomsServiceLoadProductFromResource()**](DesignAtomsServiceApi.md#designAtomsServiceLoadProductFromResource) | **GET** /api/atoms/v1/designs/print-product/from-resource/model | Loads print-product from resource file taken from storage. |
| [**designAtomsServiceLoadToggleSet()**](DesignAtomsServiceApi.md#designAtomsServiceLoadToggleSet) | **GET** /api/atoms/v1/designs/{id}/toggle-set | Loads a toggle set from design file taken from storage. |
| [**designAtomsServiceLoadVdpData()**](DesignAtomsServiceApi.md#designAtomsServiceLoadVdpData) | **GET** /api/atoms/v1/designs/{id}/vdp-data | Loads variable data printing information from design file taken from storage. |
| [**designAtomsServicePatchProduct()**](DesignAtomsServiceApi.md#designAtomsServicePatchProduct) | **PATCH** /api/atoms/v1/designs/{id}/model | Patches print-product in design file. |
| [**designAtomsServiceRenderDesignPreview()**](DesignAtomsServiceApi.md#designAtomsServiceRenderDesignPreview) | **POST** /api/atoms/v1/designs/render-preview | Renders a design preview with the specified parameters. |
| [**designAtomsServiceRenderDesignPreviewToResource()**](DesignAtomsServiceApi.md#designAtomsServiceRenderDesignPreviewToResource) | **POST** /api/atoms/v1/designs/render-preview/to-resource | Renders a design preview with the specified parameters and saves rendering result as resource. |
| [**designAtomsServiceRenderDesignProof()**](DesignAtomsServiceApi.md#designAtomsServiceRenderDesignProof) | **POST** /api/atoms/v1/designs/render-proof | Renders a design proof with the specified parameters. |
| [**designAtomsServiceRenderDesignProofToResource()**](DesignAtomsServiceApi.md#designAtomsServiceRenderDesignProofToResource) | **POST** /api/atoms/v1/designs/render-proof/to-resource | Renders a design proof with the specified parameters and saves rendering result as resource. |
| [**designAtomsServiceRenderProduct()**](DesignAtomsServiceApi.md#designAtomsServiceRenderProduct) | **POST** /api/atoms/v1/designs/print-product/render-proof | Renders a product proof image with specified parameters. |
| [**designAtomsServiceSaveProduct()**](DesignAtomsServiceApi.md#designAtomsServiceSaveProduct) | **PUT** /api/atoms/v1/designs/{id}/model | Saves print-product to design file and updates design file in storage. |
| [**designAtomsServiceSaveVdpData()**](DesignAtomsServiceApi.md#designAtomsServiceSaveVdpData) | **PUT** /api/atoms/v1/designs/{id}/vdp-data | Saves variable data printing information to design file and updates design in storage. |
| [**designAtomsServiceSetEditorMockups()**](DesignAtomsServiceApi.md#designAtomsServiceSetEditorMockups) | **PUT** /api/atoms/v1/designs/{id}/editor-mockups | Sets specified editor-mockups for selected design surfaces. |
| [**designAtomsServiceSetVariables()**](DesignAtomsServiceApi.md#designAtomsServiceSetVariables) | **PUT** /api/atoms/v1/designs/{id}/variables | Saves variable items values for design file taken from storage. |


## `designAtomsServiceConvertColors()`

```php
designAtomsServiceConvertColors($tenant_id, $convert_colors_model): mixed
```

Converts colors for print-product item manipulations.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$convert_colors_model = new \Aurigma\DesignAtoms\Model\ConvertColorsModel(); // \Aurigma\DesignAtoms\Model\ConvertColorsModel | Convert colors operation parameters.

try {
    $result = $apiInstance->designAtomsServiceConvertColors($tenant_id, $convert_colors_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceConvertColors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **convert_colors_model** | [**\Aurigma\DesignAtoms\Model\ConvertColorsModel**](../Model/ConvertColorsModel.md)| Convert colors operation parameters. | [optional] |

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

## `designAtomsServiceCreateDesign()`

```php
designAtomsServiceCreateDesign($private_storage_owner, $tenant_id, $create_design_model): \Aurigma\DesignAtoms\Model\DesignInfo
```

Creates new design file with specified parameters and saves it in storage.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier
$create_design_model = new \Aurigma\DesignAtoms\Model\CreateDesignModel(); // \Aurigma\DesignAtoms\Model\CreateDesignModel | Design creation parameters.

try {
    $result = $apiInstance->designAtomsServiceCreateDesign($private_storage_owner, $tenant_id, $create_design_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceCreateDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **create_design_model** | [**\Aurigma\DesignAtoms\Model\CreateDesignModel**](../Model/CreateDesignModel.md)| Design creation parameters. | [optional] |

### Return type

[**\Aurigma\DesignAtoms\Model\DesignInfo**](../Model/DesignInfo.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceCreateItem()`

```php
designAtomsServiceCreateItem($item_type, $tenant_id, $source_type, $source_id, $source_owner_id, $url, $source_file): mixed
```

Creates print-product item.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_type = new \Aurigma\DesignAtoms\Model\ItemType(); // ItemType | Desired item type.
$tenant_id = 56; // int | Tenant identifier
$source_type = new \Aurigma\DesignAtoms\Model\ItemSourceType(); // \Aurigma\DesignAtoms\Model\ItemSourceType
$source_id = 'source_id_example'; // string | Source id, used if source type is 'ImageStorage' or 'PrivateImageStorage'.
$source_owner_id = 'source_owner_id_example'; // string | Source owner id, used if source type is 'PrivateImageStorage'.
$url = 'url_example'; // string | Source URL, used if source type is 'Url'.
$source_file = "/path/to/file.txt"; // \SplFileObject | Source file, used if source type is 'File'.

try {
    $result = $apiInstance->designAtomsServiceCreateItem($item_type, $tenant_id, $source_type, $source_id, $source_owner_id, $url, $source_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceCreateItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_type** | [**ItemType**](../Model/.md)| Desired item type. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **source_type** | [**\Aurigma\DesignAtoms\Model\ItemSourceType**](../Model/ItemSourceType.md)|  | [optional] |
| **source_id** | **string**| Source id, used if source type is &#39;ImageStorage&#39; or &#39;PrivateImageStorage&#39;. | [optional] |
| **source_owner_id** | **string**| Source owner id, used if source type is &#39;PrivateImageStorage&#39;. | [optional] |
| **url** | **string**| Source URL, used if source type is &#39;Url&#39;. | [optional] |
| **source_file** | **\SplFileObject****\SplFileObject**| Source file, used if source type is &#39;File&#39;. | [optional] |

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

## `designAtomsServiceCreatePrivateDesignFromDesign()`

```php
designAtomsServiceCreatePrivateDesignFromDesign($design_id, $private_design_id, $private_storage_owner, $tenant_id)
```

Creates a private design from a public design.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$design_id = 'design_id_example'; // string | Public design identifier.
$private_design_id = 'private_design_id_example'; // string | Private design identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $apiInstance->designAtomsServiceCreatePrivateDesignFromDesign($design_id, $private_design_id, $private_storage_owner, $tenant_id);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceCreatePrivateDesignFromDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **design_id** | **string**| Public design identifier. | [optional] |
| **private_design_id** | **string**| Private design identifier. | [optional] |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource_id = 'resource_id_example'; // string | Resource identifier.
$private_design_id = 'private_design_id_example'; // string | Private design identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 0; // int | Tenant identifier.

try {
    $apiInstance->designAtomsServiceCreatePrivateDesignFromResource($resource_id, $private_design_id, $private_storage_owner, $tenant_id);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceCreatePrivateDesignFromResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource_id** | **string**| Resource identifier. | [optional] |
| **private_design_id** | **string**| Private design identifier. | [optional] |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier. | [optional] [default to 0] |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceDeleteVdpData()`

```php
designAtomsServiceDeleteVdpData($id, $private_storage_owner, $tenant_id)
```

Deletes variable data printing information from design file and updates design file in storage.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $apiInstance->designAtomsServiceDeleteVdpData($id, $private_storage_owner, $tenant_id);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceDeleteVdpData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
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

## `designAtomsServiceExtractBackground()`

```php
designAtomsServiceExtractBackground($id, $surface_index, $private_storage_owner, $tenant_id): \SplFileObject
```

Returns image content of the background.

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **surface_index** | **int**| Surface index. | [optional] |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceExtractItemImage()`

```php
designAtomsServiceExtractItemImage($tenant_id, $extract_item_image_model): \SplFileObject
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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$extract_item_image_model = new \Aurigma\DesignAtoms\Model\ExtractItemImageModel(); // \Aurigma\DesignAtoms\Model\ExtractItemImageModel | Extraction parameters.

try {
    $result = $apiInstance->designAtomsServiceExtractItemImage($tenant_id, $extract_item_image_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceExtractItemImage: ', $e->getMessage(), PHP_EOL;
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

## `designAtomsServiceFlattenItems()`

```php
designAtomsServiceFlattenItems($tenant_id, $request_body): mixed
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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **request_body** | [**mixed[]**](../Model/mixed.md)| Items to flatten. | [optional] |

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

## `designAtomsServiceGetDesignParameters()`

```php
designAtomsServiceGetDesignParameters($id, $private_storage_owner, $tenant_id): \Aurigma\DesignAtoms\Model\DesignParameters
```

Returns design parameters stored in product model.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designAtomsServiceGetDesignParameters($id, $private_storage_owner, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceGetDesignParameters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

[**\Aurigma\DesignAtoms\Model\DesignParameters**](../Model/DesignParameters.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceGetVariables()`

```php
designAtomsServiceGetVariables($id, $private_storage_owner, $tenant_id): \Aurigma\DesignAtoms\Model\VariablesModel
```

Returns variable items information for design file taken from storage.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designAtomsServiceGetVariables($id, $private_storage_owner, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceGetVariables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

[**\Aurigma\DesignAtoms\Model\VariablesModel**](../Model/VariablesModel.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceLoadDataSchema()`

```php
designAtomsServiceLoadDataSchema($id, $private_storage_owner, $tenant_id): \SplFileObject
```

Loads a data schema from design file taken from storage.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designAtomsServiceLoadDataSchema($id, $private_storage_owner, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceLoadDataSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceLoadProduct()`

```php
designAtomsServiceLoadProduct($id, $private_storage_owner, $tenant_id): mixed
```

Loads print-product from design file taken from storage.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designAtomsServiceLoadProduct($id, $private_storage_owner, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceLoadProduct: ', $e->getMessage(), PHP_EOL;
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

## `designAtomsServiceLoadProductFromResource()`

```php
designAtomsServiceLoadProductFromResource($id, $private_storage_owner, $tenant_id): mixed
```

Loads print-product from resource file taken from storage.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Resource identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designAtomsServiceLoadProductFromResource($id, $private_storage_owner, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceLoadProductFromResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Resource identifier. | [optional] |
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

## `designAtomsServiceLoadToggleSet()`

```php
designAtomsServiceLoadToggleSet($id, $private_storage_owner, $tenant_id): \SplFileObject
```

Loads a toggle set from design file taken from storage.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designAtomsServiceLoadToggleSet($id, $private_storage_owner, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceLoadToggleSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceLoadVdpData()`

```php
designAtomsServiceLoadVdpData($id, $private_storage_owner, $tenant_id): \Aurigma\DesignAtoms\Model\VdpDataModel
```

Loads variable data printing information from design file taken from storage.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->designAtomsServiceLoadVdpData($id, $private_storage_owner, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceLoadVdpData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |

### Return type

[**\Aurigma\DesignAtoms\Model\VdpDataModel**](../Model/VdpDataModel.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServicePatchProduct()`

```php
designAtomsServicePatchProduct($id, $private_storage_owner, $tenant_id, $patch_type, $replace_image_item_file_info_item_name, $replace_image_item_file_info_source_file, $replace_placeholder_item_content_info_placeholder_item_name, $replace_placeholder_item_content_info_new_content_type, $replace_placeholder_item_content_info_source_file)
```

Patches print-product in design file.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
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
    $apiInstance->designAtomsServicePatchProduct($id, $private_storage_owner, $tenant_id, $patch_type, $replace_image_item_file_info_item_name, $replace_image_item_file_info_source_file, $replace_placeholder_item_content_info_placeholder_item_name, $replace_placeholder_item_content_info_new_content_type, $replace_placeholder_item_content_info_source_file);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServicePatchProduct: ', $e->getMessage(), PHP_EOL;
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

## `designAtomsServiceRenderDesignPreview()`

```php
designAtomsServiceRenderDesignPreview($attachment, $tenant_id, $render_design_preview_model): \SplFileObject
```

Renders a design preview with the specified parameters.

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attachment** | **bool**| If set to &#39;true&#39;, file will be provided as an attachment with unique filename supplied  (default value is &#39;false&#39;). | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **render_design_preview_model** | [**\Aurigma\DesignAtoms\Model\RenderDesignPreviewModel**](../Model/RenderDesignPreviewModel.md)| Render model with preview parameters. | [optional] |

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

## `designAtomsServiceRenderDesignPreviewToResource()`

```php
designAtomsServiceRenderDesignPreviewToResource($tenant_id, $render_design_preview_to_resource_model): \Aurigma\DesignAtoms\Model\ResourceInfoDto
```

Renders a design preview with the specified parameters and saves rendering result as resource.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$render_design_preview_to_resource_model = new \Aurigma\DesignAtoms\Model\RenderDesignPreviewToResourceModel(); // \Aurigma\DesignAtoms\Model\RenderDesignPreviewToResourceModel | Render model with preview parameters.

try {
    $result = $apiInstance->designAtomsServiceRenderDesignPreviewToResource($tenant_id, $render_design_preview_to_resource_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceRenderDesignPreviewToResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **render_design_preview_to_resource_model** | [**\Aurigma\DesignAtoms\Model\RenderDesignPreviewToResourceModel**](../Model/RenderDesignPreviewToResourceModel.md)| Render model with preview parameters. | [optional] |

### Return type

[**\Aurigma\DesignAtoms\Model\ResourceInfoDto**](../Model/ResourceInfoDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attachment** | **bool**| If set to &#39;true&#39;, file will be provided as an attachment with unique filename supplied  (default value is &#39;false&#39;). | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **render_design_proof_model** | [**\Aurigma\DesignAtoms\Model\RenderDesignProofModel**](../Model/RenderDesignProofModel.md)| Render model with proof parameters. | [optional] |

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

## `designAtomsServiceRenderDesignProofToResource()`

```php
designAtomsServiceRenderDesignProofToResource($tenant_id, $render_design_proof_to_resource_model): \Aurigma\DesignAtoms\Model\ResourceInfoDto
```

Renders a design proof with the specified parameters and saves rendering result as resource.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$render_design_proof_to_resource_model = new \Aurigma\DesignAtoms\Model\RenderDesignProofToResourceModel(); // \Aurigma\DesignAtoms\Model\RenderDesignProofToResourceModel | Render model with preview parameters.

try {
    $result = $apiInstance->designAtomsServiceRenderDesignProofToResource($tenant_id, $render_design_proof_to_resource_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceRenderDesignProofToResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **render_design_proof_to_resource_model** | [**\Aurigma\DesignAtoms\Model\RenderDesignProofToResourceModel**](../Model/RenderDesignProofToResourceModel.md)| Render model with preview parameters. | [optional] |

### Return type

[**\Aurigma\DesignAtoms\Model\ResourceInfoDto**](../Model/ResourceInfoDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsServiceRenderProduct()`

```php
designAtomsServiceRenderProduct($attachment, $tenant_id, $render_product_model): \SplFileObject
```

Renders a product proof image with specified parameters.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment = True; // bool | If set to 'true', file will be provided as an attachment with unique filename supplied  (default value is 'false').
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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attachment** | **bool**| If set to &#39;true&#39;, file will be provided as an attachment with unique filename supplied  (default value is &#39;false&#39;). | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **render_product_model** | [**\Aurigma\DesignAtoms\Model\RenderProductModel**](../Model/RenderProductModel.md)| Preview parameters. | [optional] |

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

## `designAtomsServiceSaveProduct()`

```php
designAtomsServiceSaveProduct($id, $private_storage_owner, $tenant_id, $body)
```

Saves print-product to design file and updates design file in storage.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier
$body = NULL; // mixed | Serialized product description.

try {
    $apiInstance->designAtomsServiceSaveProduct($id, $private_storage_owner, $tenant_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceSaveProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **body** | **mixed**| Serialized product description. | [optional] |

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

## `designAtomsServiceSaveVdpData()`

```php
designAtomsServiceSaveVdpData($id, $private_storage_owner, $tenant_id, $vdp_data_model)
```

Saves variable data printing information to design file and updates design in storage.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier
$vdp_data_model = new \Aurigma\DesignAtoms\Model\VdpDataModel(); // \Aurigma\DesignAtoms\Model\VdpDataModel | Serialized vdp data.

try {
    $apiInstance->designAtomsServiceSaveVdpData($id, $private_storage_owner, $tenant_id, $vdp_data_model);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceSaveVdpData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **vdp_data_model** | [**\Aurigma\DesignAtoms\Model\VdpDataModel**](../Model/VdpDataModel.md)| Serialized vdp data. | [optional] |

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

## `designAtomsServiceSetEditorMockups()`

```php
designAtomsServiceSetEditorMockups($id, $private_storage_owner, $tenant_id, $set_editor_mockups_model)
```

Sets specified editor-mockups for selected design surfaces.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier
$set_editor_mockups_model = new \Aurigma\DesignAtoms\Model\SetEditorMockupsModel(); // \Aurigma\DesignAtoms\Model\SetEditorMockupsModel | Operation parameters.

try {
    $apiInstance->designAtomsServiceSetEditorMockups($id, $private_storage_owner, $tenant_id, $set_editor_mockups_model);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceSetEditorMockups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **set_editor_mockups_model** | [**\Aurigma\DesignAtoms\Model\SetEditorMockupsModel**](../Model/SetEditorMockupsModel.md)| Operation parameters. | [optional] |

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

## `designAtomsServiceSetVariables()`

```php
designAtomsServiceSetVariables($id, $private_storage_owner, $tenant_id, $variables_model)
```

Saves variable items values for design file taken from storage.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Design identifier.
$private_storage_owner = 'private_storage_owner_example'; // string | Private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier
$variables_model = new \Aurigma\DesignAtoms\Model\VariablesModel(); // \Aurigma\DesignAtoms\Model\VariablesModel | Design variable values.

try {
    $apiInstance->designAtomsServiceSetVariables($id, $private_storage_owner, $tenant_id, $variables_model);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsServiceApi->designAtomsServiceSetVariables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Design identifier. | |
| **private_storage_owner** | **string**| Private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier | [optional] |
| **variables_model** | [**\Aurigma\DesignAtoms\Model\VariablesModel**](../Model/VariablesModel.md)| Design variable values. | [optional] |

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
