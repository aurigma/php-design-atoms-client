# Aurigma\DesignAtoms\DesignAtomsImagesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**designAtomsImagesRenderImagePreview()**](DesignAtomsImagesApi.md#designAtomsImagesRenderImagePreview) | **POST** /api/atoms/v1/images/render-preview | Renders a preview of an image with the specified parameters. |
| [**designAtomsImagesRenderImagePreviewFromFile()**](DesignAtomsImagesApi.md#designAtomsImagesRenderImagePreviewFromFile) | **POST** /api/atoms/v1/images/render-preview/from-file | Renders a preview of an uploaded image with the specified parameters. |
| [**designAtomsImagesRenderImagePreviewFromFileToResource()**](DesignAtomsImagesApi.md#designAtomsImagesRenderImagePreviewFromFileToResource) | **POST** /api/atoms/v1/images/render-preview/from-file/to-resource | Renders a preview of an uploaded image with the specified parameters and saves rendering result as resource. |
| [**designAtomsImagesRenderImagePreviewFromUrl()**](DesignAtomsImagesApi.md#designAtomsImagesRenderImagePreviewFromUrl) | **POST** /api/atoms/v1/images/render-preview/from-url | Renders a preview of a web image with the specified parameters. |
| [**designAtomsImagesRenderImagePreviewFromUrlToResource()**](DesignAtomsImagesApi.md#designAtomsImagesRenderImagePreviewFromUrlToResource) | **POST** /api/atoms/v1/images/render-preview/from-url/to-resource | Renders a preview of a web image with the specified parameters and saves rendering result as resource. |
| [**designAtomsImagesRenderImagePreviewToResource()**](DesignAtomsImagesApi.md#designAtomsImagesRenderImagePreviewToResource) | **POST** /api/atoms/v1/images/render-preview/to-resource | Renders a preview of an image with the specified parameters and saves rendering result as resource. |


## `designAtomsImagesRenderImagePreview()`

```php
designAtomsImagesRenderImagePreview($attachment, $tenant_id, $render_image_preview_model): \SplFileObject
```

Renders a preview of an image with the specified parameters.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment = True; // bool | If set to 'true', file will be provided as an attachment with unique filename supplied  (default value is 'false').
$tenant_id = 56; // int | Tenant ID.
$render_image_preview_model = new \Aurigma\DesignAtoms\Model\RenderImagePreviewModel(); // \Aurigma\DesignAtoms\Model\RenderImagePreviewModel | Render model with preview parameters.

try {
    $result = $apiInstance->designAtomsImagesRenderImagePreview($attachment, $tenant_id, $render_image_preview_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsImagesApi->designAtomsImagesRenderImagePreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attachment** | **bool**| If set to &#39;true&#39;, file will be provided as an attachment with unique filename supplied  (default value is &#39;false&#39;). | [optional] |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **render_image_preview_model** | [**\Aurigma\DesignAtoms\Model\RenderImagePreviewModel**](../Model/RenderImagePreviewModel.md)| Render model with preview parameters. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsImagesRenderImagePreviewFromFile()`

```php
designAtomsImagesRenderImagePreviewFromFile($attachment, $tenant_id, $source_file, $mockup_owner_id, $mockup_id, $width, $height, $file_format, $fit_mode, $page_index): \SplFileObject
```

Renders a preview of an uploaded image with the specified parameters.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment = True; // bool | If set to 'true', file will be provided as an attachment with unique filename supplied  (default value is 'false').
$tenant_id = 56; // int | Tenant ID.
$source_file = "/path/to/file.txt"; // \SplFileObject | Source file.
$mockup_owner_id = 'mockup_owner_id_example'; // string | Mockup owner identifier.
$mockup_id = 'mockup_id_example'; // string | Mockup identifier.
$width = 56; // int | Image preview width.
$height = 56; // int | Image preview height.
$file_format = new \Aurigma\DesignAtoms\Model\ImagePreviewFormat(); // \Aurigma\DesignAtoms\Model\ImagePreviewFormat | Image preview file format.
$fit_mode = new \Aurigma\DesignAtoms\Model\ImagePreviewFitMode(); // \Aurigma\DesignAtoms\Model\ImagePreviewFitMode | Image preview fit mode.
$page_index = 56; // int | Index of image page (applies to multi-page image formats only, e.g. PDF and TIFF).  Zero by default.

try {
    $result = $apiInstance->designAtomsImagesRenderImagePreviewFromFile($attachment, $tenant_id, $source_file, $mockup_owner_id, $mockup_id, $width, $height, $file_format, $fit_mode, $page_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsImagesApi->designAtomsImagesRenderImagePreviewFromFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attachment** | **bool**| If set to &#39;true&#39;, file will be provided as an attachment with unique filename supplied  (default value is &#39;false&#39;). | [optional] |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **source_file** | **\SplFileObject****\SplFileObject**| Source file. | [optional] |
| **mockup_owner_id** | **string**| Mockup owner identifier. | [optional] |
| **mockup_id** | **string**| Mockup identifier. | [optional] |
| **width** | **int**| Image preview width. | [optional] |
| **height** | **int**| Image preview height. | [optional] |
| **file_format** | [**\Aurigma\DesignAtoms\Model\ImagePreviewFormat**](../Model/ImagePreviewFormat.md)| Image preview file format. | [optional] |
| **fit_mode** | [**\Aurigma\DesignAtoms\Model\ImagePreviewFitMode**](../Model/ImagePreviewFitMode.md)| Image preview fit mode. | [optional] |
| **page_index** | **int**| Index of image page (applies to multi-page image formats only, e.g. PDF and TIFF).  Zero by default. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsImagesRenderImagePreviewFromFileToResource()`

```php
designAtomsImagesRenderImagePreviewFromFileToResource($tenant_id, $resource_owner_id, $resource_namespace, $resource_name, $resource_source_id, $resource_type, $anonymous_access, $overwrite_existing_resource, $source_file, $mockup_owner_id, $mockup_id, $width, $height, $file_format, $fit_mode, $page_index): \Aurigma\DesignAtoms\Model\ResourceInfoDto
```

Renders a preview of an uploaded image with the specified parameters and saves rendering result as resource.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$resource_owner_id = 'resource_owner_id_example'; // string | Preview resource owner identifier.
$resource_namespace = 'resource_namespace_example'; // string | Preview resource namespace.
$resource_name = 'resource_name_example'; // string | Preview resource name.
$resource_source_id = 'resource_source_id_example'; // string | Preview resource unique source identifier.
$resource_type = 'resource_type_example'; // string | Preview resource type.
$anonymous_access = True; // bool | Flag that indicates if a preview resource should be available for downloading for anonymous users.
$overwrite_existing_resource = True; // bool | Flag that indicates if an existing resource should be overwritten.
$source_file = "/path/to/file.txt"; // \SplFileObject | Source file.
$mockup_owner_id = 'mockup_owner_id_example'; // string | Mockup owner identifier.
$mockup_id = 'mockup_id_example'; // string | Mockup identifier.
$width = 56; // int | Image preview width.
$height = 56; // int | Image preview height.
$file_format = new \Aurigma\DesignAtoms\Model\ImagePreviewFormat(); // \Aurigma\DesignAtoms\Model\ImagePreviewFormat | Image preview file format.
$fit_mode = new \Aurigma\DesignAtoms\Model\ImagePreviewFitMode(); // \Aurigma\DesignAtoms\Model\ImagePreviewFitMode | Image preview fit mode.
$page_index = 56; // int | Index of image page (applies to multi-page image formats only, e.g. PDF and TIFF).  Zero by default.

try {
    $result = $apiInstance->designAtomsImagesRenderImagePreviewFromFileToResource($tenant_id, $resource_owner_id, $resource_namespace, $resource_name, $resource_source_id, $resource_type, $anonymous_access, $overwrite_existing_resource, $source_file, $mockup_owner_id, $mockup_id, $width, $height, $file_format, $fit_mode, $page_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsImagesApi->designAtomsImagesRenderImagePreviewFromFileToResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **resource_owner_id** | **string**| Preview resource owner identifier. | [optional] |
| **resource_namespace** | **string**| Preview resource namespace. | [optional] |
| **resource_name** | **string**| Preview resource name. | [optional] |
| **resource_source_id** | **string**| Preview resource unique source identifier. | [optional] |
| **resource_type** | **string**| Preview resource type. | [optional] |
| **anonymous_access** | **bool**| Flag that indicates if a preview resource should be available for downloading for anonymous users. | [optional] |
| **overwrite_existing_resource** | **bool**| Flag that indicates if an existing resource should be overwritten. | [optional] |
| **source_file** | **\SplFileObject****\SplFileObject**| Source file. | [optional] |
| **mockup_owner_id** | **string**| Mockup owner identifier. | [optional] |
| **mockup_id** | **string**| Mockup identifier. | [optional] |
| **width** | **int**| Image preview width. | [optional] |
| **height** | **int**| Image preview height. | [optional] |
| **file_format** | [**\Aurigma\DesignAtoms\Model\ImagePreviewFormat**](../Model/ImagePreviewFormat.md)| Image preview file format. | [optional] |
| **fit_mode** | [**\Aurigma\DesignAtoms\Model\ImagePreviewFitMode**](../Model/ImagePreviewFitMode.md)| Image preview fit mode. | [optional] |
| **page_index** | **int**| Index of image page (applies to multi-page image formats only, e.g. PDF and TIFF).  Zero by default. | [optional] |

### Return type

[**\Aurigma\DesignAtoms\Model\ResourceInfoDto**](../Model/ResourceInfoDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsImagesRenderImagePreviewFromUrl()`

```php
designAtomsImagesRenderImagePreviewFromUrl($attachment, $tenant_id, $render_image_preview_from_url_model): \SplFileObject
```

Renders a preview of a web image with the specified parameters.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment = True; // bool | If set to 'true', file will be provided as an attachment with unique filename supplied  (default value is 'false').
$tenant_id = 56; // int | Tenant ID.
$render_image_preview_from_url_model = new \Aurigma\DesignAtoms\Model\RenderImagePreviewFromUrlModel(); // \Aurigma\DesignAtoms\Model\RenderImagePreviewFromUrlModel | Render model with preview parameters.

try {
    $result = $apiInstance->designAtomsImagesRenderImagePreviewFromUrl($attachment, $tenant_id, $render_image_preview_from_url_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsImagesApi->designAtomsImagesRenderImagePreviewFromUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attachment** | **bool**| If set to &#39;true&#39;, file will be provided as an attachment with unique filename supplied  (default value is &#39;false&#39;). | [optional] |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **render_image_preview_from_url_model** | [**\Aurigma\DesignAtoms\Model\RenderImagePreviewFromUrlModel**](../Model/RenderImagePreviewFromUrlModel.md)| Render model with preview parameters. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `designAtomsImagesRenderImagePreviewFromUrlToResource()`

```php
designAtomsImagesRenderImagePreviewFromUrlToResource($tenant_id, $render_image_preview_from_url_to_resource_model): \Aurigma\DesignAtoms\Model\ResourceInfoDto
```

Renders a preview of a web image with the specified parameters and saves rendering result as resource.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$render_image_preview_from_url_to_resource_model = new \Aurigma\DesignAtoms\Model\RenderImagePreviewFromUrlToResourceModel(); // \Aurigma\DesignAtoms\Model\RenderImagePreviewFromUrlToResourceModel | Render model with preview parameters.

try {
    $result = $apiInstance->designAtomsImagesRenderImagePreviewFromUrlToResource($tenant_id, $render_image_preview_from_url_to_resource_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsImagesApi->designAtomsImagesRenderImagePreviewFromUrlToResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **render_image_preview_from_url_to_resource_model** | [**\Aurigma\DesignAtoms\Model\RenderImagePreviewFromUrlToResourceModel**](../Model/RenderImagePreviewFromUrlToResourceModel.md)| Render model with preview parameters. | [optional] |

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

## `designAtomsImagesRenderImagePreviewToResource()`

```php
designAtomsImagesRenderImagePreviewToResource($tenant_id, $render_image_preview_to_resource_model): \Aurigma\DesignAtoms\Model\ResourceInfoDto
```

Renders a preview of an image with the specified parameters and saves rendering result as resource.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$render_image_preview_to_resource_model = new \Aurigma\DesignAtoms\Model\RenderImagePreviewToResourceModel(); // \Aurigma\DesignAtoms\Model\RenderImagePreviewToResourceModel | Render model with preview parameters.

try {
    $result = $apiInstance->designAtomsImagesRenderImagePreviewToResource($tenant_id, $render_image_preview_to_resource_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsImagesApi->designAtomsImagesRenderImagePreviewToResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **render_image_preview_to_resource_model** | [**\Aurigma\DesignAtoms\Model\RenderImagePreviewToResourceModel**](../Model/RenderImagePreviewToResourceModel.md)| Render model with preview parameters. | [optional] |

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
