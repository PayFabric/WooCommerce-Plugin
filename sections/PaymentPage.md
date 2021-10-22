**Description：** 

- The PayFabric hosted payment page is used for embedding the payment page into your application to allow your users to process a transaction.

**Request URL：** 
- https://sandbox.payfabric.com/payment/web/transaction/ResponsiveProcess
  
**Method：**
- GET 

**Parameters：** 

|Name|Require|Type|Description|
|:----    |:---|:----- |-----   |
|token |require on redirect  |string |JWT Token   |
|successUrl |require on redirect  |string |successful callback url   |
|session |require on iframe  |string |JWT Token   |
|environment |require on iframe  |string |'DEV-US2', 'SANDBOX', 'LIVE'  |
|target |require on iframe  |string |Where is the iframe embedded   |
|displayMethod |require on iframe  |string |'IN_PLACE', 'Dialog'  |
|successCallback |require on iframe  |string |successful js callback  |
|failureCallback |require on iframe  |string |failure js callback   |
|disableCancel |require on iframe  |string |true or false  |

 **Response:**
 
![](https://www.showdoc.com.cn/server/api/attachment/visitfile/sign/fd315daaf21b244ff3cf3aaadd344847)

For more information and descriptions please see our [PayFabric](https://github.com/PayFabric/APIs/blob/master/PayFabric/README.md "PayFabric").
