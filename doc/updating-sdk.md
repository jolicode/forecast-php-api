# Updating the SDK

> [!NOTE]
> The tooling for this project uses [Castor](https://castor.jolicode.com/),
> a full-featured PHP task runner. In order to install Castor, see the
> [installation instructions](https://castor.jolicode.com/getting-started/installation/).

## Edit the API specification

First, edit the [Forecast OpenAPI specification](../Resources/forecast-openapi.yaml).
If you are uncomfortable with OpenAPI, please read
[the OpenAPI specification](https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.2.md).

## Regenerate the SDk

When the OpenAPI specification has been updated, please regenerate the SDK code:

```bash
castor generate
```

Please do not change manually code in the `generated` folder, as this would
be overwritten during the next SDK generation.
