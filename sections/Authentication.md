**Description：** 

- PayFabric clients require PayFabric Device ID and Password to authenticate with APIs.

```php
      // Setup the HTTP request.
        $httpUrl = "https://sandbox.payfabric.com/payment/api/transaction/create";
        $httpHeader = Array(
                "Content-Type: application/json",
                "authorization: " . DEVICE_ID . "|" . DEVICE_PASSWORD);        
        $curlOptions = Array(CURLOPT_RETURNTRANSFER => TRUE,
                CURLOPT_VERBOSE => TRUE,
                CURLOPT_POSTFIELDS => $json,
                CURLOPT_HTTPHEADER => $httpHeader);

        // Execute the HTTP request.
        $curlHandle = curl_init($httpUrl);
        curl_setopt_array($curlHandle, $curlOptions);
        $httpResponseBody = curl_exec($curlHandle);
        $httpResponseCode = curl_getinfo($curlHandle, CURLINFO_HTTP_CODE);
        curl_close($curlHandle);
```

For more information and descriptions please see our [PayFabric](https://github.com/PayFabric/APIs/blob/master/PayFabric/README.md "PayFabric").



