**Description：** 

- Refund a Transaction

**Request URL：** 
- https://dev-us2.payfabric.com/payment/api/transaction/process
  
**Method：**
- POST 

**Parameters：** 

|Name|Require|Type|Description|
|:----    |:---|:----- |-----   |
|Type |Yes  |String |Refund   |
|ReferenceKey |Yes  |String |Transaction Key   |

**Request：** 
``` 
{"Type":"Refund","Amount":"1.00","ReferenceKey":"21051700697014"}
```

 **Response:**
``` 
{
  "AVSAddressResponse": "N",
  "AVSZipResponse": "N",
  "AuthCode": "010101",
  "CVV2Response": null,
  "CardType": "Credit",
  "ExpectedSettledTime": "2021-05-19T03:00:00.0000000Z",
  "FinalAmount": "1.00",
  "IAVSAddressResponse": "N",
  "Message": "Approved",
  "OrigTrxAmount": "1.00",
  "OriginationID": "A70EAF008422",
  "PayFabricErrorCode": null,
  "RespTrxTag": null,
  "ResultCode": "0",
  "SettledTime": null,
  "Status": "Approved",
  "SurchargeAmount": "0.00",
  "SurchargePercentage": "0",
  "TAXml": "<TransactionData><Connection name=\"PFP_CC\" connector=\"PayflowPro\"><Processor id=\"18\">TSYS(Vital\/VisaNet)<\/Processor><PaymentType id=\"1\">Credit<\/PaymentType><\/Connection><Transaction post=\"False\" type=\"6\" status=\"1\"><NeededData><Transaction><Type>6<\/Type><Status>Approved<\/Status><Category>NeededData<\/Category><Fields \/><\/Transaction><\/NeededData><FailureData><Transaction><Type>6<\/Type><Status>Approved<\/Status><Category>FailureData<\/Category><Fields \/><\/Transaction><\/FailureData><ResponseData><Transaction><Type>6<\/Type><Status>Approved<\/Status><Category>ResponseData<\/Category><Fields><Field id=\"TrxField_D17\"><Name>ResultCode<\/Name><Desc>0<\/Desc><Value>0<\/Value><\/Field><Field id=\"TrxField_D31\"><Name>ResponseMsg<\/Name><Desc>Approved<\/Desc><Value>Approved<\/Value><\/Field><Field id=\"TrxField_D24\"><Name>AuthCode<\/Name><Desc>010101<\/Desc><Value>010101<\/Value><\/Field><Field id=\"TrxField_D16\"><Name>OriginationID<\/Name><Desc>A70EAF008422<\/Desc><Value>A70EAF008422<\/Value><\/Field><Field id=\"TrxField_D186\"><Name>Token<\/Name><Desc>A70EAF008422<\/Desc><Value>A70EAF008422<\/Value><\/Field><Field id=\"TrxField_D32\"><Name>AVSAddResponse<\/Name><Desc>N<\/Desc><Value>N<\/Value><\/Field><Field id=\"TrxField_D33\"><Name>AVSZipResponse<\/Name><Desc>N<\/Desc><Value>N<\/Value><\/Field><Field id=\"TrxField_D185\"><Name>IAVSAddressResponse<\/Name><Desc>N<\/Desc><Value>N<\/Value><\/Field><\/Fields><\/Transaction><\/ResponseData><RequestData><Transaction><Type>6<\/Type><Status>1<\/Status><Category>RequestData<\/Category><Fields><Field id=\"TrxField_D1\"><Name>ACCT<\/Name><Desc>Credit Card Number<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>1<\/Type><Value>XXXXXXXXXXXX1111<\/Value><\/Field><Field id=\"TrxField_D3\"><Name>EXPDATE<\/Name><Desc>Expiration Date MMYY<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>1<\/Type><Value>1222<\/Value><\/Field><Field id=\"TrxField_D5\"><Name>BillToFirstName<\/Name><Desc>First Name<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>test<\/Value><\/Field><Field id=\"TrxField_D7\"><Name>BillToLastName<\/Name><Desc>Last Name<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>zdd<\/Value><\/Field><Field id=\"TrxField_D11\"><Name>BillToCity<\/Name><Desc>City<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>San Francisco<\/Value><\/Field><Field id=\"TrxField_D12\"><Name>BillToState<\/Name><Desc>State<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>IN<\/Value><\/Field><Field id=\"TrxField_D13\"><Name>BillToZip<\/Name><Desc>Zip<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>94109<\/Value><\/Field><Field id=\"TrxField_D15\"><Name>Amt<\/Name><Desc>Transaction Amount<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>3<\/Type><Value>1.00<\/Value><\/Field><Field id=\"TrxField_D16\"><Name>ORIGID<\/Name><Desc>Origination ID<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>A40E0DCF1AD5<\/Value><\/Field><Field id=\"TrxField_D40\"><Name>InvNum<\/Name><Desc>Invoice Number<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>118<\/Value><\/Field><Field id=\"TrxField_D41\"><Name>ShipToZip<\/Name><Desc>Ship to Zip<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>10001<\/Value><\/Field><Field id=\"TrxField_D47\"><Name>BillToCountry<\/Name><Desc>Country Code<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>USA<\/Value><\/Field><Field id=\"TrxField_D48\"><Name>CustCode<\/Name><Desc>Customer Code<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>1<\/Value><\/Field><Field id=\"TrxField_D55\"><Name>BillToStreet<\/Name><Desc>Account Holder Street<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>600 Ellis Street <\/Value><\/Field><Field id=\"TrxField_D74\"><Name>CurrencyCode<\/Name><Desc>Currency Code<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>USD<\/Value><\/Field><Field id=\"TrxField_D99\"><Name>ShipToCity<\/Name><Desc>Shipping City<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>New York<\/Value><\/Field><Field id=\"TrxField_D103\"><Name>ShipToState<\/Name><Desc>Shipping State<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>NY<\/Value><\/Field><Field id=\"TrxField_D104\"><Name>ShipToStreet<\/Name><Desc>Shipping Street<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>600 Ellis Street <\/Value><\/Field><Field id=\"TrxField_D111\"><Name>ShipToCountry<\/Name><Desc>Shipping Country<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>US<\/Value><\/Field><Field id=\"TrxField_D155\"><Name>ShipToPhone<\/Name><Desc>Shipping Phone<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>134134134<\/Value><\/Field><Field id=\"TrxField_D202\"><Name>ShipToEmail<\/Name><Desc>Shipping email.<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>Jack.Zhang@nodus.com<\/Value><\/Field><Field id=\"TRXFIELD_D19\"><Name>PaymentType<\/Name><Value>1<\/Value><\/Field><Field id=\"TRXFIELD_D67\" index=\"1\"><Name>ItemProdCode<\/Name><Value>11<\/Value><\/Field><Field id=\"TRXFIELD_D64\" index=\"1\"><Name>ItemDesc<\/Name><Value>Product Name<\/Value><\/Field><Field id=\"TRXFIELD_D66\" index=\"1\"><Name>ItemCost<\/Name><Value>10<\/Value><\/Field><Field id=\"TRXFIELD_D62\" index=\"1\"><Name>ItemQuantity<\/Name><Value>1<\/Value><\/Field><Field id=\"TRXFIELD_D68\" index=\"1\"><Name>ItemDiscount<\/Name><Value>0.5<\/Value><\/Field><Field id=\"TRXFIELD_D67\" index=\"2\"><Name>ItemProdCode<\/Name><Value>107<\/Value><\/Field><Field id=\"TRXFIELD_D64\" index=\"2\"><Name>ItemDesc<\/Name><Value>product1<\/Value><\/Field><Field id=\"TRXFIELD_D66\" index=\"2\"><Name>ItemCost<\/Name><Value>20<\/Value><\/Field><Field id=\"TRXFIELD_D62\" index=\"2\"><Name>ItemQuantity<\/Name><Value>1<\/Value><\/Field><Field id=\"TRXFIELD_D68\" index=\"2\"><Name>ItemDiscount<\/Name><Value>0.5<\/Value><\/Field><Field id=\"TRXFIELD_D24\"><Name>AuthCode<\/Name><Value>010101<\/Value><\/Field><Field id=\"TRXFIELD_D2\"><Name>TRXFIELD_D2<\/Name><Value>XXXXXXXXXXXX1111<\/Value><\/Field><Field id=\"TRXFIELD_D18\"><Name>CCType<\/Name><Value>Visa<\/Value><\/Field><Field id=\"TRXFIELD_D54\"><Name>AccountName<\/Name><Value>test zdd <\/Value><\/Field><Field id=\"TRXFIELD_D8\"><Name>Address1<\/Name><Value>600 Ellis Street<\/Value><\/Field><Field id=\"SaveCreditCard\"><Name>SaveCreditCard<\/Name><Value>0<\/Value><\/Field><Field id=\"MSO_PFTrxKey\"><Name>MSO_PFTrxKey<\/Name><Value>21051700697047<\/Value><\/Field><Field id=\"TRXFIELD_D550\"><Name>PF_TransactionKey<\/Name><Value>21051700697047<\/Value><\/Field><Field id=\"MSO_WalletID\"><Name>MSO_WalletID<\/Name><Value>00000000-0000-0000-0000-000000000000<\/Value><\/Field><Field id=\"MSO_EngineGUID\"><Name>MSO_EngineGUID<\/Name><Value>8bd91556-6e0b-42e3-a86e-a427f7bb877f<\/Value><\/Field><Field id=\"TRXFIELD_D539\"><Name>TransactionInitiation<\/Name><Value>Customer<\/Value><\/Field><Field id=\"TRXFIELD_D540\"><Name>TransactionSchedule<\/Name><Value>Unscheduled<\/Value><\/Field><Field id=\"TRXFIELD_D541\"><Name>AuthorizationType<\/Name><Value>NotSet<\/Value><\/Field><Field id=\"TRXFIELD_D542\"><Name>CCEntryIndicator<\/Name><Value>Entered<\/Value><\/Field><Field id=\"TRXFIELD_D543\"><Name>POSEntryMode<\/Name><Value>01<\/Value><\/Field><Field id=\"MSO_Last_Xmit_Date\"><Name>MSO_Last_Xmit_Date<\/Name><Value>2021-05-17 00:00:00<\/Value><\/Field><Field id=\"MSO_Last_Xmit_Time\"><Name>MSO_Last_Xmit_Time<\/Name><Value>1900-01-01 11:55:12 PM<\/Value><\/Field><Field id=\"MSO_Last_Settled_Date\"><Name>MSO_Last_Settled_Date<\/Name><Value>1900-01-01<\/Value><\/Field><Field id=\"MSO_Last_Settled_Time\"><Name>MSO_Last_Settled_Time<\/Name><Value>1900-01-01 00:00:00<\/Value><\/Field><\/Fields><\/Transaction><\/RequestData><\/Transaction><\/TransactionData>",
  "TerminalID": null,
  "TerminalResultCode": null,
  "TrxAmount": "1.00",
  "TrxDate": "5\/17\/2021 11:55:12 PM",
  "TrxKey": "21051700697047",
  "WalletID": "00000000-0000-0000-0000-000000000000"
}
```
For more information and descriptions please see our [PayFabric](https://github.com/PayFabric/APIs/blob/master/PayFabric/README.md "PayFabric").



