# # LoggingSplunk

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to '%h %l %u %t "%r" %&gt;s %b']
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](LoggingFormatVersion.md) |  | [optional]
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](LoggingPlacement.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**tls_ca_cert** | **string** | A secure certificate to authenticate a server with. Must be in PEM format. | [optional] [default to 'null']
**tls_client_cert** | **string** | The client certificate used to make authenticated requests. Must be in PEM format. | [optional] [default to 'null']
**tls_client_key** | **string** | The client private key used to make authenticated requests. Must be in PEM format. | [optional] [default to 'null']
**tls_hostname** | **string** | The hostname to verify the server&#39;s certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported. | [optional] [default to 'null']
**request_max_bytes** | **int** | The maximum number of bytes sent in one request. Defaults &#x60;0&#x60; for unbounded. | [optional] [default to 0]
**request_max_entries** | **int** | The maximum number of logs sent in one request. Defaults &#x60;0&#x60; for unbounded. | [optional] [default to 0]
**token** | **string** | A Splunk token for use in posting logs over HTTP to your collector. | [optional]
**url** | **string** | The URL to post logs to. | [optional]
**use_tls** | [**\Fastly\Model\LoggingUseTls**](LoggingUseTls.md) |  | [optional]

[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
