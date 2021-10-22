**Description：** 

- Create an authorization or sale transaction and save it to the PayFabric server

**Request URL：** 
- https://sandbox.payfabric.com/payment/api/transaction/create
  
**Method：**
- POST 

**Parameters：** 

|Name|Require|Type|Description|
|:----    |:---|:----- |-----   |
|Type |Yes  |String |Transaction Type: Authorization or Sale   |

**Request：** 
```
{
  "Type": "Sale",
  "TrxUserDefine1": "342",
  "Amount": "23.10",
  "Currency": "USD",
  "Customer": 1,
  "Shipto": {
    "City": "New York",
    "Country": "US",
    "Customer": 1,
    "Email": "Jack.Zhang@nodus.com",
    "Line1": "600 Ellis Street",
    "Phone": "134134134",
    "State": "NY",
    "Zip": "10001"
  },
  "Document": {
    "Head": [
      {
        "Name": "InvoiceNumber",
        "Value": "342"
      },
      {
        "Name": "FreightAmount",
        "Value": "1"
      },
      {
        "Name": "TaxAmount",
        "Value": "2.1"
      }
    ],
    "Lines": [
      {
        "Columns": [
          {
            "Name": "ItemProdCode",
            "Value": 107
          },
          {
            "Name": "ItemDesc",
            "Value": "product1"
          },
          {
            "Name": "ItemCost",
            "Value": "20"
          },
          {
            "Name": "ItemQuantity",
            "Value": 1
          },
          {
            "Name": "ItemDiscount",
            "Value": "0"
          },
          {
            "Name": "ItemTaxAmount",
            "Value": "2"
          },
          {
            "Name": "ItemAmount",
            "Value": "20"
          }
        ]
      }
    ],
    "UserDefined": [
      {
        "Name": "PluginName",
        "Value": "PayFabric-gateway-woocommerce"
      },
      {
        "Name": "PluginVersion",
        "Value": "1.0.0"
      }
    ]
  }
} 
```

 **Response:**
``` 
{"Key":"21051700696935"}
```
For more information and descriptions please see our [PayFabric](https://github.com/PayFabric/APIs/blob/master/PayFabric/README.md "PayFabric").



