# Updating the SDK

## Edit the API specification

First, edit the [Forecast OpenAPI specification](../Resources/forecast-openapi-v3.yaml).
If you are uncomfortable with OpenAPI, please read
[the OpenAPI specification](https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.2.md).

## Regenerate the SDk

When the versioned spec has been updated, we need to run Jane to regenerate the
SDK:

```bash
vendor/bin/jane-openapi generate -c .jane-openapi.php
```
