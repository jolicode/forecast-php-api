# Changes between versions

## 4.1.0 (2020-08-21)

 * upgrade to `janephp/open-api` 6.1
 * regenerated SDK
 * fixed the `jane-php/open-api-runtime` dependency to a minor version, in order to avoid situations where a jane-php update would break things

## 4.0.0 (2020-08-19)

 * fixed the `/assignments` "`state`" query parameter description
 * added the "`state`" query parameter on the `/people` endpoint

## 3.0.0 (2020-08-06)

* Upgrade to Jane 6.0

## 2.1.1 (2020-02-20)

* fixed the DateTime format to match the one used by the API

## 2.1.0 (2020-02-20)

* Use PHP `DateTime` objects, not strings

## 2.0.1 (2020-02-20)

* added some filters on the `listAssignments` operation

## 2.0.0 (2020-01-06)

* OpenAPI 3.0 schema
* Upgrade to Jane 5.0

## 1.0.0 (2019-01-18)

* Initial release
