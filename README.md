# Aurigma Customer's Canvas SDK - Design Atoms API Client
======================================================

This module is an PHP API client for Design Atoms API service which is a part of [**Customer's Canvas**](https://customerscanvas.com) web-to-print system. It is supposed that you are familiar with its services and understand how to use its APIs. To learn more about Customer's Canvas and its services, refer the [Getting Started section of its documentation](https://customerscanvas.com/dev/getting-started/intro.html).

## Pre-requisites

To be able to use this package, you need to meet the following requirements: 

* You must have an account at Customer's Canvas.
* You need to use it in Angular applications **only**. 

For other platforms, see the [Backend services](https://customerscanvas.com/dev/getting-started/about-backend-services.html) article in Customer's Canvas documentation. 

## Installation

```
composer require aurigma/php-design-atoms-client
```

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/aurigma/php-design-atoms-client.git"
    }
  ],
  "require": {
    "aurigma/php-design-atoms-client": "*@dev"
  }
}
```

Then run `composer install`

## Getting Started

Please follow the [installation procedure](#installation).

Receive an access token through your backend as explained in the [documentation](https://customerscanvas.com/dev/getting-started/about-backend-services.html#authorization) and deliver it to your app. 

Then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\BuildInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->buildInfoGetInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildInfoApi->buildInfoGetInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

Aurigma Inc <info@aurigma.com> (https://customerscanvas.com)

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BuildInfoApi* | [**buildInfoGetInfo**](docs/Api/BuildInfoApi.md#buildinfogetinfo) | **GET** /api/atoms/v1/info | Gets assembly build info
*BuildInfoApi* | [**buildInfoHeadInfo**](docs/Api/BuildInfoApi.md#buildinfoheadinfo) | **HEAD** /api/atoms/v1/info | Gets assembly build info
*DesignAtomsCompatibilityApi* | [**designAtomsCompatibilityCssFonts**](docs/Api/DesignAtomsCompatibilityApi.md#designatomscompatibilitycssfonts) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/cssfonts | 
*DesignAtomsCompatibilityApi* | [**designAtomsCompatibilityFonts**](docs/Api/DesignAtomsCompatibilityApi.md#designatomscompatibilityfonts) | **GET** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/fonts/{psName} | 
*DesignAtomsCompatibilityApi* | [**designAtomsCompatibilityGetCssFont**](docs/Api/DesignAtomsCompatibilityApi.md#designatomscompatibilitygetcssfont) | **GET** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/GetCssFont | 
*DesignAtomsCompatibilityApi* | [**designAtomsCompatibilityGetImageSize**](docs/Api/DesignAtomsCompatibilityApi.md#designatomscompatibilitygetimagesize) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/GetImageSize | 
*DesignAtomsCompatibilityApi* | [**designAtomsCompatibilityGetLicense**](docs/Api/DesignAtomsCompatibilityApi.md#designatomscompatibilitygetlicense) | **GET** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/license | 
*DesignAtomsCompatibilityApi* | [**designAtomsCompatibilityGetShapeBounds**](docs/Api/DesignAtomsCompatibilityApi.md#designatomscompatibilitygetshapebounds) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/GetShapeBounds | 
*DesignAtomsCompatibilityApi* | [**designAtomsCompatibilityGetWatermarkItems**](docs/Api/DesignAtomsCompatibilityApi.md#designatomscompatibilitygetwatermarkitems) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/GetWatermarkItems | 
*DesignAtomsCompatibilityApi* | [**designAtomsCompatibilityImg**](docs/Api/DesignAtomsCompatibilityApi.md#designatomscompatibilityimg) | **GET** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/img | 
*DesignAtomsCompatibilityApi* | [**designAtomsCompatibilityPth**](docs/Api/DesignAtomsCompatibilityApi.md#designatomscompatibilitypth) | **GET** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/pth | 
*DesignAtomsCompatibilityApi* | [**designAtomsCompatibilityResource**](docs/Api/DesignAtomsCompatibilityApi.md#designatomscompatibilityresource) | **GET** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/resource | 
*DesignAtomsCompatibilityApi* | [**designAtomsCompatibilitySvg**](docs/Api/DesignAtomsCompatibilityApi.md#designatomscompatibilitysvg) | **GET** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/svg | 
*DesignAtomsCompatibilityApi* | [**designAtomsCompatibilityTxt**](docs/Api/DesignAtomsCompatibilityApi.md#designatomscompatibilitytxt) | **GET** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/txt | 
*DesignAtomsCompatibilityApi* | [**designAtomsCompatibilityUpdateArchedTextItemHandler**](docs/Api/DesignAtomsCompatibilityApi.md#designatomscompatibilityupdatearchedtextitemhandler) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/api/ccviewer/UpdateArchedTextItemHandler | 
*DesignAtomsCompatibilityApi* | [**designAtomsCompatibilityUpdateAutoScaledTextItemHandler**](docs/Api/DesignAtomsCompatibilityApi.md#designatomscompatibilityupdateautoscaledtextitemhandler) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/UpdateAutoScaledTextItemHandler | 
*DesignAtomsCompatibilityApi* | [**designAtomsCompatibilityUpdateBarcodeItemHandler**](docs/Api/DesignAtomsCompatibilityApi.md#designatomscompatibilityupdatebarcodeitemhandler) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/UpdateBarcodeItemHandler | 
*DesignAtomsCompatibilityApi* | [**designAtomsCompatibilityUpdateBoundedTextItemHandler**](docs/Api/DesignAtomsCompatibilityApi.md#designatomscompatibilityupdateboundedtextitemhandler) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/UpdateBoundedTextItemHandler | 
*DesignAtomsCompatibilityApi* | [**designAtomsCompatibilityUpdateByColorData**](docs/Api/DesignAtomsCompatibilityApi.md#designatomscompatibilityupdatebycolordata) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/UpdateByColorData | 
*DesignAtomsCompatibilityApi* | [**designAtomsCompatibilityUpdateByMultiCallRequest**](docs/Api/DesignAtomsCompatibilityApi.md#designatomscompatibilityupdatebymulticallrequest) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/UpdateByMultiCallRequest | 
*DesignAtomsCompatibilityApi* | [**designAtomsCompatibilityUpdateCurvedTextItemHandler**](docs/Api/DesignAtomsCompatibilityApi.md#designatomscompatibilityupdatecurvedtextitemhandler) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/UpdateCurvedTextItemHandler | 
*DesignAtomsCompatibilityApi* | [**designAtomsCompatibilityUpdateImageItemHandler**](docs/Api/DesignAtomsCompatibilityApi.md#designatomscompatibilityupdateimageitemhandler) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/UpdateImageItemHandler | 
*DesignAtomsCompatibilityApi* | [**designAtomsCompatibilityUpdatePathBoundedTextItemHandler**](docs/Api/DesignAtomsCompatibilityApi.md#designatomscompatibilityupdatepathboundedtextitemhandler) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/UpdatePathBoundedTextItemHandler | 
*DesignAtomsCompatibilityApi* | [**designAtomsCompatibilityUpdatePlainTextItemHandler**](docs/Api/DesignAtomsCompatibilityApi.md#designatomscompatibilityupdateplaintextitemhandler) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/UpdatePlainTextItemHandler | 
*DesignAtomsCompatibilityApi* | [**designAtomsCompatibilityUpdateShapeItemHandler**](docs/Api/DesignAtomsCompatibilityApi.md#designatomscompatibilityupdateshapeitemhandler) | **POST** /api/atoms/v1/tenants/{tenantId}/api/ccviewer/UpdateShapeItemHandler | 
*DesignAtomsServiceApi* | [**designAtomsServiceConvertColors**](docs/Api/DesignAtomsServiceApi.md#designatomsserviceconvertcolors) | **POST** /api/atoms/v1/colorConverter | Converts colors
*DesignAtomsServiceApi* | [**designAtomsServiceCreateDesign**](docs/Api/DesignAtomsServiceApi.md#designatomsservicecreatedesign) | **POST** /api/atoms/v1/designs | Creates new design file with specified parameters and saves it in storage.
*DesignAtomsServiceApi* | [**designAtomsServiceCreateItem**](docs/Api/DesignAtomsServiceApi.md#designatomsservicecreateitem) | **POST** /api/atoms/v1/itemCreator | Creates product item
*DesignAtomsServiceApi* | [**designAtomsServiceDeleteDataSchema**](docs/Api/DesignAtomsServiceApi.md#designatomsservicedeletedataschema) | **DELETE** /api/atoms/v1/designs/{id}/schema | Deletes data schema from design file and updates design in storage.
*DesignAtomsServiceApi* | [**designAtomsServiceDeleteVdpData**](docs/Api/DesignAtomsServiceApi.md#designatomsservicedeletevdpdata) | **DELETE** /api/atoms/v1/designs/{id}/vdpData | Deletes variable data printing inforamtion from design file and updates design in storage.
*DesignAtomsServiceApi* | [**designAtomsServiceLoadDataSchema**](docs/Api/DesignAtomsServiceApi.md#designatomsserviceloaddataschema) | **GET** /api/atoms/v1/designs/{id}/schema | Loads data schema from design file taken from storage
*DesignAtomsServiceApi* | [**designAtomsServiceLoadProduct**](docs/Api/DesignAtomsServiceApi.md#designatomsserviceloadproduct) | **GET** /api/atoms/v1/designs/{id}/model | Loads product from design file taken from storage
*DesignAtomsServiceApi* | [**designAtomsServiceLoadVdpData**](docs/Api/DesignAtomsServiceApi.md#designatomsserviceloadvdpdata) | **GET** /api/atoms/v1/designs/{id}/vdpData | Loads variable data printing information from design file taken from storage
*DesignAtomsServiceApi* | [**designAtomsServiceRenderProduct**](docs/Api/DesignAtomsServiceApi.md#designatomsservicerenderproduct) | **POST** /api/atoms/v1/renderer | Render product proof image with specified parameters.
*DesignAtomsServiceApi* | [**designAtomsServiceSaveDataSchema**](docs/Api/DesignAtomsServiceApi.md#designatomsservicesavedataschema) | **PUT** /api/atoms/v1/designs/{id}/schema | Saves data schema to design file and updates design in storage.
*DesignAtomsServiceApi* | [**designAtomsServiceSaveProduct**](docs/Api/DesignAtomsServiceApi.md#designatomsservicesaveproduct) | **PUT** /api/atoms/v1/designs/{id}/model | Saves product to design file and updates design in storage.
*DesignAtomsServiceApi* | [**designAtomsServiceSaveVdpData**](docs/Api/DesignAtomsServiceApi.md#designatomsservicesavevdpdata) | **PUT** /api/atoms/v1/designs/{id}/vdpData | Saves variable data printing information to design file and updates design in storage.
*DesignAtomsViewerApi* | [**designAtomsViewerCssFonts**](docs/Api/DesignAtomsViewerApi.md#designatomsviewercssfonts) | **POST** /api/atoms/v1/ccviewer/cssfonts | 
*DesignAtomsViewerApi* | [**designAtomsViewerFonts**](docs/Api/DesignAtomsViewerApi.md#designatomsviewerfonts) | **GET** /api/atoms/v1/ccviewer/fonts/{psName} | 
*DesignAtomsViewerApi* | [**designAtomsViewerGetCssFont**](docs/Api/DesignAtomsViewerApi.md#designatomsviewergetcssfont) | **GET** /api/atoms/v1/ccviewer/GetCssFont | 
*DesignAtomsViewerApi* | [**designAtomsViewerGetImageSize**](docs/Api/DesignAtomsViewerApi.md#designatomsviewergetimagesize) | **POST** /api/atoms/v1/ccviewer/GetImageSize | 
*DesignAtomsViewerApi* | [**designAtomsViewerGetLicense**](docs/Api/DesignAtomsViewerApi.md#designatomsviewergetlicense) | **GET** /api/atoms/v1/ccviewer/license | 
*DesignAtomsViewerApi* | [**designAtomsViewerGetShapeBounds**](docs/Api/DesignAtomsViewerApi.md#designatomsviewergetshapebounds) | **POST** /api/atoms/v1/ccviewer/GetShapeBounds | 
*DesignAtomsViewerApi* | [**designAtomsViewerGetWatermarkItems**](docs/Api/DesignAtomsViewerApi.md#designatomsviewergetwatermarkitems) | **POST** /api/atoms/v1/ccviewer/GetWatermarkItems | 
*DesignAtomsViewerApi* | [**designAtomsViewerImg**](docs/Api/DesignAtomsViewerApi.md#designatomsviewerimg) | **GET** /api/atoms/v1/ccviewer/img | 
*DesignAtomsViewerApi* | [**designAtomsViewerPth**](docs/Api/DesignAtomsViewerApi.md#designatomsviewerpth) | **GET** /api/atoms/v1/ccviewer/pth | 
*DesignAtomsViewerApi* | [**designAtomsViewerResource**](docs/Api/DesignAtomsViewerApi.md#designatomsviewerresource) | **GET** /api/atoms/v1/ccviewer/resource | 
*DesignAtomsViewerApi* | [**designAtomsViewerSvg**](docs/Api/DesignAtomsViewerApi.md#designatomsviewersvg) | **GET** /api/atoms/v1/ccviewer/svg | 
*DesignAtomsViewerApi* | [**designAtomsViewerTxt**](docs/Api/DesignAtomsViewerApi.md#designatomsviewertxt) | **GET** /api/atoms/v1/ccviewer/txt | 
*DesignAtomsViewerApi* | [**designAtomsViewerUpdateArchedTextItemHandler**](docs/Api/DesignAtomsViewerApi.md#designatomsviewerupdatearchedtextitemhandler) | **POST** /api/atoms/v1/ccviewer/api/ccviewer/UpdateArchedTextItemHandler | 
*DesignAtomsViewerApi* | [**designAtomsViewerUpdateAutoScaledTextItemHandler**](docs/Api/DesignAtomsViewerApi.md#designatomsviewerupdateautoscaledtextitemhandler) | **POST** /api/atoms/v1/ccviewer/UpdateAutoScaledTextItemHandler | 
*DesignAtomsViewerApi* | [**designAtomsViewerUpdateBarcodeItemHandler**](docs/Api/DesignAtomsViewerApi.md#designatomsviewerupdatebarcodeitemhandler) | **POST** /api/atoms/v1/ccviewer/UpdateBarcodeItemHandler | 
*DesignAtomsViewerApi* | [**designAtomsViewerUpdateBoundedTextItemHandler**](docs/Api/DesignAtomsViewerApi.md#designatomsviewerupdateboundedtextitemhandler) | **POST** /api/atoms/v1/ccviewer/UpdateBoundedTextItemHandler | 
*DesignAtomsViewerApi* | [**designAtomsViewerUpdateByColorData**](docs/Api/DesignAtomsViewerApi.md#designatomsviewerupdatebycolordata) | **POST** /api/atoms/v1/ccviewer/UpdateByColorData | 
*DesignAtomsViewerApi* | [**designAtomsViewerUpdateByMultiCallRequest**](docs/Api/DesignAtomsViewerApi.md#designatomsviewerupdatebymulticallrequest) | **POST** /api/atoms/v1/ccviewer/UpdateByMultiCallRequest | 
*DesignAtomsViewerApi* | [**designAtomsViewerUpdateCurvedTextItemHandler**](docs/Api/DesignAtomsViewerApi.md#designatomsviewerupdatecurvedtextitemhandler) | **POST** /api/atoms/v1/ccviewer/UpdateCurvedTextItemHandler | 
*DesignAtomsViewerApi* | [**designAtomsViewerUpdateImageItemHandler**](docs/Api/DesignAtomsViewerApi.md#designatomsviewerupdateimageitemhandler) | **POST** /api/atoms/v1/ccviewer/UpdateImageItemHandler | 
*DesignAtomsViewerApi* | [**designAtomsViewerUpdatePathBoundedTextItemHandler**](docs/Api/DesignAtomsViewerApi.md#designatomsviewerupdatepathboundedtextitemhandler) | **POST** /api/atoms/v1/ccviewer/UpdatePathBoundedTextItemHandler | 
*DesignAtomsViewerApi* | [**designAtomsViewerUpdatePlainTextItemHandler**](docs/Api/DesignAtomsViewerApi.md#designatomsviewerupdateplaintextitemhandler) | **POST** /api/atoms/v1/ccviewer/UpdatePlainTextItemHandler | 
*DesignAtomsViewerApi* | [**designAtomsViewerUpdateShapeItemHandler**](docs/Api/DesignAtomsViewerApi.md#designatomsviewerupdateshapeitemhandler) | **POST** /api/atoms/v1/ccviewer/UpdateShapeItemHandler | 

## Models

- [BuildInfoModel](docs/Model/BuildInfoModel.md)
- [ConvertColorsModel](docs/Model/ConvertColorsModel.md)
- [CreateDesignModel](docs/Model/CreateDesignModel.md)
- [DesignInfo](docs/Model/DesignInfo.md)
- [FontsMethodData](docs/Model/FontsMethodData.md)
- [GetImageSizeRequest](docs/Model/GetImageSizeRequest.md)
- [GetShapeBoundsRequest](docs/Model/GetShapeBoundsRequest.md)
- [ItemType](docs/Model/ItemType.md)
- [MultiCallRequest](docs/Model/MultiCallRequest.md)
- [MultiCallRequestItem](docs/Model/MultiCallRequestItem.md)
- [NullAbleSize](docs/Model/NullAbleSize.md)
- [PointF](docs/Model/PointF.md)
- [ProblemDetails](docs/Model/ProblemDetails.md)
- [ProductProofFormat](docs/Model/ProductProofFormat.md)
- [ProductProofInterpolationMode](docs/Model/ProductProofInterpolationMode.md)
- [ProductProofRenderingConfig](docs/Model/ProductProofRenderingConfig.md)
- [RectangleF](docs/Model/RectangleF.md)
- [RenderProductModel](docs/Model/RenderProductModel.md)
- [UpdateColorsRequest](docs/Model/UpdateColorsRequest.md)
- [UpdateHandlerRequest](docs/Model/UpdateHandlerRequest.md)
- [UpdateImageHandlerRequest](docs/Model/UpdateImageHandlerRequest.md)
- [VdpDataModel](docs/Model/VdpDataModel.md)
