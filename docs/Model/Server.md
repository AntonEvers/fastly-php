# # Server

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** | A hostname, IPv4, or IPv6 address for the server. Required. | [optional]
**comment** | **string** | A freeform descriptive note. | [optional]
**disabled** | **bool** | Allows servers to be enabled and disabled in a pool. | [optional] [default to false]
**max_conn** | **int** | Maximum number of connections. If the value is &#x60;0&#x60;, it inherits the value from pool&#39;s &#x60;max_conn_default&#x60;. | [optional] [default to 0]
**override_host** | **string** | The hostname to override the Host header. Defaults to &#x60;null&#x60; meaning no override of the Host header if not set. This setting can also be added to a Pool definition. However, the server setting will override the Pool setting. | [optional] [default to 'null']
**port** | **int** | Port number. Setting port &#x60;443&#x60; does not force TLS. Set &#x60;use_tls&#x60; in pool to force TLS. | [optional] [default to 80]
**weight** | **int** | Weight (&#x60;1-100&#x60;) used to load balance this server against others. | [optional] [default to 100]

[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
