**Description：** 

- Create a token to be used to embed the payment page from PayFabric

**Request URL：** 
- https://sandbox.payfabric.com/payment/api/jwt/create
  
**Method：**
- POST 

**Parameters：** 

|Name|Require|Type|Description|
|:----    |:---|:----- |-----   |
|Audience |Yes  |String |PaymentPage   |
|Subject |Yes  |String |Transaction Key   |

**Request：** 
``` 
{"Audience":"PaymentPage","Subject":"21051700696997"}
```

 **Response:**
``` 
{
  "Message": "",
  "Payload": {
    "aud": "PaymentPage",
    "dcn": "1",
    "device": "7e243d6c-765d-4f78-92a3-b23919573b97",
    "exp": "1621317688",
    "iat": "1621316788",
    "inst": "a0de262f-67bb-417e-b282-72b83b8db5fc",
    "iss": "PayFabric_V3",
    "sub": "21051700696997",
    "supportedPaymentMethods": [
      {
        "attributes": null,
        "src": "URL",
        "type": "CreditCard"
      }
    ]
  },
  "Token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJQYXlGYWJyaWNfVjMiLCJpYXQiOiIxNjIxMzE2Nzg4IiwiZXhwIjoiMTYyMTMxNzY4OCIsImF1ZCI6IlBheW1lbnRQYWdlIiwic3ViIjoiMjEwNTE3MDA2OTY5OTciLCJpbnN0IjoiYTBkZTI2MmYtNjdiYi00MTdlLWIyODItNzJiODNiOGRiNWZjIiwiZGV2aWNlIjoiN2UyNDNkNmMtNzY1ZC00Zjc4LTkyYTMtYjIzOTE5NTczYjk3IiwiZGNuIjoiMSIsInN1cHBvcnRlZFBheW1lbnRNZXRob2RzIjpbeyJ0eXBlIjoiQ3JlZGl0Q2FyZCIsInNyYyI6IlVSTCIsImF0dHJpYnV0ZXMiOm51bGx9XX0.cX6jfuQh_0iiOqRDLftsRTE2F-WUPXexy38TeuKPtwA"
}
```
For more information and descriptions please see our [PayFabric](https://github.com/PayFabric/APIs/blob/master/PayFabric/README.md "PayFabric").



