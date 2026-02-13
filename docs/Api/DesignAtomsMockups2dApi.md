# Aurigma\DesignAtoms\DesignAtomsMockups2dApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**designAtomsMockups2dRenderMockupPreview()**](DesignAtomsMockups2dApi.md#designAtomsMockups2dRenderMockupPreview) | **POST** /api/atoms/v1/mockups-2d/render-preview | Renders a mockup preview with the specified parameters. |


## `designAtomsMockups2dRenderMockupPreview()`

```php
designAtomsMockups2dRenderMockupPreview($attachment, $tenant_id, $render_mockup_preview_model): \SplFileObject
```

Renders a mockup preview with the specified parameters.

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


$apiInstance = new Aurigma\DesignAtoms\Api\DesignAtomsMockups2dApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment = True; // bool | If set to 'true', file will be provided as an attachment with unique filename supplied  (default value is 'false').
$tenant_id = 56; // int | Tenant ID.
$render_mockup_preview_model = new \Aurigma\DesignAtoms\Model\RenderMockupPreviewModel(); // \Aurigma\DesignAtoms\Model\RenderMockupPreviewModel | Render model with preview parameters.

try {
    $result = $apiInstance->designAtomsMockups2dRenderMockupPreview($attachment, $tenant_id, $render_mockup_preview_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignAtomsMockups2dApi->designAtomsMockups2dRenderMockupPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attachment** | **bool**| If set to &#39;true&#39;, file will be provided as an attachment with unique filename supplied  (default value is &#39;false&#39;). | [optional] |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **render_mockup_preview_model** | [**\Aurigma\DesignAtoms\Model\RenderMockupPreviewModel**](../Model/RenderMockupPreviewModel.md)| Render model with preview parameters. | [optional] |

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
