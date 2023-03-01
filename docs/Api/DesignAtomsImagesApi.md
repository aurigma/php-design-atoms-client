# Aurigma\DesignAtoms\DesignAtomsImagesApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**designAtomsImagesRenderImagePreview()**](DesignAtomsImagesApi.md#designAtomsImagesRenderImagePreview) | **POST** /api/atoms/v1/images/render-image-preview | Renders a web image preview with the specified parameters.


## `designAtomsImagesRenderImagePreview()`

```php
designAtomsImagesRenderImagePreview($attachment, $tenant_id, $render_image_preview_model): \SplFileObject
```

Renders a web image preview with the specified parameters.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment = True; // bool | If set to 'true', file will be provided as an attachment with unique filename supplied  (default value is 'false').
$tenant_id = 56; // int | Tenant identifier
$render_image_preview_model = new \Aurigma\DesignAtoms\Model\RenderImagePreviewModel(); // \Aurigma\DesignAtoms\Model\RenderImagePreviewModel | Render model with preview parameters.

try {
    $result = $apiInstance->designAtomsImagesRenderImagePreview($attachment, $tenant_id, $render_image_preview_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsImagesApi->designAtomsImagesRenderImagePreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment** | **bool**| If set to &#39;true&#39;, file will be provided as an attachment with unique filename supplied  (default value is &#39;false&#39;). | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]
 **render_image_preview_model** | [**\Aurigma\DesignAtoms\Model\RenderImagePreviewModel**](../Model/RenderImagePreviewModel.md)| Render model with preview parameters. | [optional]

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
