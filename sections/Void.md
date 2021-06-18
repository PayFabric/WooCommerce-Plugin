**Description：** 

- Void a Pre-Authorized Transaction

**Request URL：** 
- https://dev-us2.payfabric.com/payment/api/reference/21051700697035?trxtype=Void

**Method：**
- GET 

**Response:**
- Approved
``` 
{
  "AVSAddressResponse": null,
  "AVSZipResponse": null,
  "AuthCode": null,
  "CVV2Response": null,
  "CardType": "Credit",
  "ExpectedSettledTime": null,
  "FinalAmount": "12.10",
  "IAVSAddressResponse": null,
  "Message": "Approved",
  "OrigTrxAmount": "12.10",
  "OriginationID": "A40E0DCF1FA2",
  "PayFabricErrorCode": null,
  "RespTrxTag": null,
  "ResultCode": "0",
  "SettledTime": null,
  "Status": "Approved",
  "SurchargeAmount": "0.00",
  "SurchargePercentage": "0",
  "TAXml": "<TransactionData><Connection name=\"PFP_CC\" connector=\"PayflowPro\"><Processor id=\"18\">TSYS(Vital\/VisaNet)<\/Processor><PaymentType id=\"1\">Credit<\/PaymentType><\/Connection><Transaction post=\"False\" type=\"5\" status=\"1\"><NeededData><Transaction><Type>5<\/Type><Status>Approved<\/Status><Category>NeededData<\/Category><Fields \/><\/Transaction><\/NeededData><FailureData><Transaction><Type>5<\/Type><Status>Approved<\/Status><Category>FailureData<\/Category><Fields \/><\/Transaction><\/FailureData><ResponseData><Transaction><Type>5<\/Type><Status>Approved<\/Status><Category>ResponseData<\/Category><Fields><Field id=\"TrxField_D17\"><Name>ResultCode<\/Name><Desc>0<\/Desc><Value>0<\/Value><\/Field><Field id=\"TrxField_D31\"><Name>ResponseMsg<\/Name><Desc>Approved<\/Desc><Value>Approved<\/Value><\/Field><Field id=\"TrxField_D16\"><Name>OriginationID<\/Name><Desc>A40E0DCF1FA2<\/Desc><Value>A40E0DCF1FA2<\/Value><\/Field><Field id=\"TrxField_D186\"><Name>Token<\/Name><Desc>A40E0DCF1FA2<\/Desc><Value>A40E0DCF1FA2<\/Value><\/Field><\/Fields><\/Transaction><\/ResponseData><RequestData><Transaction><Type>5<\/Type><Status>1<\/Status><Category>RequestData<\/Category><Fields><Field id=\"TrxField_D16\"><Name>ORIGID<\/Name><Desc>Origination ID<\/Desc><Required>1<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>A40E0DCF1F96<\/Value><\/Field><Field id=\"TRXFIELD_D19\"><Name>PaymentType<\/Name><Value>1<\/Value><\/Field><Field id=\"TRXFIELD_D40\"><Name>InvoiceNumber<\/Name><Value>119<\/Value><\/Field><Field id=\"TRXFIELD_D11\"><Name>City<\/Name><Value>San Francisco<\/Value><\/Field><Field id=\"TRXFIELD_D12\"><Name>State<\/Name><Value>IN<\/Value><\/Field><Field id=\"TRXFIELD_D13\"><Name>Zip<\/Name><Value>94109<\/Value><\/Field><Field id=\"TRXFIELD_D41\"><Name>ShipToZip<\/Name><Value>10001<\/Value><\/Field><Field id=\"TRXFIELD_D47\"><Name>CountryCode<\/Name><Value>USA<\/Value><\/Field><Field id=\"TRXFIELD_D55\"><Name>AccountStreet<\/Name><Value>600 Ellis Street <\/Value><\/Field><Field id=\"TRXFIELD_D99\"><Name>ShipToCity<\/Name><Value>New York<\/Value><\/Field><Field id=\"TRXFIELD_D103\"><Name>ShipToState<\/Name><Value>NY<\/Value><\/Field><Field id=\"TRXFIELD_D104\"><Name>ShipToStreet<\/Name><Value>600 Ellis Street <\/Value><\/Field><Field id=\"TRXFIELD_D111\"><Name>ShipToCountry<\/Name><Value>US<\/Value><\/Field><Field id=\"TRXFIELD_D67\" index=\"1\"><Name>ItemProdCode<\/Name><Value>11<\/Value><\/Field><Field id=\"TRXFIELD_D64\" index=\"1\"><Name>ItemDesc<\/Name><Value>Product Name<\/Value><\/Field><Field id=\"TRXFIELD_D66\" index=\"1\"><Name>ItemCost<\/Name><Value>10<\/Value><\/Field><Field id=\"TRXFIELD_D62\" index=\"1\"><Name>ItemQuantity<\/Name><Value>1<\/Value><\/Field><Field id=\"TRXFIELD_D68\" index=\"1\"><Name>ItemDiscount<\/Name><Value>0<\/Value><\/Field><Field id=\"TRXFIELD_D48\"><Name>CustomerCode<\/Name><Value>1<\/Value><\/Field><Field id=\"TRXFIELD_D15\"><Name>TrxAmount<\/Name><Value>12.10<\/Value><\/Field><Field id=\"TRXFIELD_D24\"><Name>AuthCode<\/Name><Value>010101<\/Value><\/Field><Field id=\"TRXFIELD_D74\"><Name>CurrencyCode<\/Name><Value>USD<\/Value><\/Field><Field id=\"TRXFIELD_D1\"><Name>CCNumber<\/Name><Value>XXXXXXXXXXXX1111<\/Value><\/Field><Field id=\"TRXFIELD_D2\"><Name>TRXFIELD_D2<\/Name><Value>XXXXXXXXXXXX1111<\/Value><\/Field><Field id=\"TRXFIELD_D3\"><Name>CCExpDate<\/Name><Value>1222<\/Value><\/Field><Field id=\"TRXFIELD_D18\"><Name>CCType<\/Name><Value>Visa<\/Value><\/Field><Field id=\"TRXFIELD_D5\"><Name>FirstName<\/Name><Value>test<\/Value><\/Field><Field id=\"TRXFIELD_D7\"><Name>LastName<\/Name><Value>zdd<\/Value><\/Field><Field id=\"TRXFIELD_D54\"><Name>AccountName<\/Name><Value>test zdd <\/Value><\/Field><Field id=\"TRXFIELD_D8\"><Name>Address1<\/Name><Value>600 Ellis Street<\/Value><\/Field><Field id=\"TRXFIELD_D202\"><Name>ShipToEmail<\/Name><Value>Jack.Zhang@nodus.com<\/Value><\/Field><Field id=\"TRXFIELD_D155\"><Name>ShipPhone<\/Name><Value>134134134<\/Value><\/Field><Field id=\"SaveCreditCard\"><Name>SaveCreditCard<\/Name><Value>0<\/Value><\/Field><Field id=\"MSO_PFTrxKey\"><Name>MSO_PFTrxKey<\/Name><Value>21051700697036<\/Value><\/Field><Field id=\"TRXFIELD_D550\"><Name>PF_TransactionKey<\/Name><Value>21051700697036<\/Value><\/Field><Field id=\"MSO_WalletID\"><Name>MSO_WalletID<\/Name><Value>00000000-0000-0000-0000-000000000000<\/Value><\/Field><Field id=\"MSO_EngineGUID\"><Name>MSO_EngineGUID<\/Name><Value>8bd91556-6e0b-42e3-a86e-a427f7bb877f<\/Value><\/Field><Field id=\"TRXFIELD_D539\"><Name>TransactionInitiation<\/Name><Value>Customer<\/Value><\/Field><Field id=\"TRXFIELD_D540\"><Name>TransactionSchedule<\/Name><Value>Unscheduled<\/Value><\/Field><Field id=\"TRXFIELD_D541\"><Name>AuthorizationType<\/Name><Value>NotSet<\/Value><\/Field><Field id=\"TRXFIELD_D542\"><Name>CCEntryIndicator<\/Name><Value>Entered<\/Value><\/Field><Field id=\"TRXFIELD_D543\"><Name>POSEntryMode<\/Name><Value>01<\/Value><\/Field><Field id=\"MSO_Last_Xmit_Date\"><Name>MSO_Last_Xmit_Date<\/Name><Value>2021-05-17 00:00:00<\/Value><\/Field><Field id=\"MSO_Last_Xmit_Time\"><Name>MSO_Last_Xmit_Time<\/Name><Value>1900-01-01 11:39:26 PM<\/Value><\/Field><Field id=\"MSO_Last_Settled_Date\"><Name>MSO_Last_Settled_Date<\/Name><Value>1900-01-01<\/Value><\/Field><Field id=\"MSO_Last_Settled_Time\"><Name>MSO_Last_Settled_Time<\/Name><Value>1900-01-01 00:00:00<\/Value><\/Field><\/Fields><\/Transaction><\/RequestData><\/Transaction><\/TransactionData>",
  "TerminalID": null,
  "TerminalResultCode": null,
  "TrxAmount": "12.10",
  "TrxDate": "5\/17\/2021 11:39:26 PM",
  "TrxKey": "21051700697036",
  "WalletID": "00000000-0000-0000-0000-000000000000"
}
``` 

- Denied
``` 
{
  "AVSAddressResponse": null,
  "AVSZipResponse": null,
  "AuthCode": null,
  "CVV2Response": null,
  "CardType": "Credit",
  "ExpectedSettledTime": null,
  "FinalAmount": "12.10",
  "IAVSAddressResponse": null,
  "Message": "Declined: A40E0DCF1F96 is a VOIDED transaction",
  "OrigTrxAmount": "12.10",
  "OriginationID": "A70EAF00832B",
  "PayFabricErrorCode": "1691",
  "RespTrxTag": null,
  "ResultCode": "12",
  "SettledTime": null,
  "Status": "Denied",
  "SurchargeAmount": "0.00",
  "SurchargePercentage": "0",
  "TAXml": "<TransactionData><Connection name=\"PFP_CC\" connector=\"PayflowPro\"><Processor id=\"18\">TSYS(Vital\/VisaNet)<\/Processor><PaymentType id=\"1\">Credit<\/PaymentType><\/Connection><Transaction post=\"False\" type=\"5\" status=\"2\"><NeededData><Transaction><Type>5<\/Type><Status>Denied<\/Status><Category>NeededData<\/Category><Fields \/><\/Transaction><\/NeededData><FailureData><Transaction><Type>5<\/Type><Status>Denied<\/Status><Category>FailureData<\/Category><Fields \/><\/Transaction><\/FailureData><ResponseData><Transaction><Type>5<\/Type><Status>Denied<\/Status><Category>ResponseData<\/Category><Fields><Field id=\"TrxField_D17\"><Name>ResultCode<\/Name><Desc>12<\/Desc><Value>12<\/Value><\/Field><Field id=\"TrxField_D31\"><Name>ResponseMsg<\/Name><Desc>Declined: A40E0DCF1F96 is a VOIDED transaction<\/Desc><Value>Declined: A40E0DCF1F96 is a VOIDED transaction<\/Value><\/Field><Field id=\"TrxField_D16\"><Name>OriginationID<\/Name><Desc>A70EAF00832B<\/Desc><Value>A70EAF00832B<\/Value><\/Field><Field id=\"TrxField_D186\"><Name>Token<\/Name><Desc>A70EAF00832B<\/Desc><Value>A70EAF00832B<\/Value><\/Field><\/Fields><\/Transaction><\/ResponseData><RequestData><Transaction><Type>5<\/Type><Status>2<\/Status><Category>RequestData<\/Category><Fields><Field id=\"TrxField_D16\"><Name>ORIGID<\/Name><Desc>Origination ID<\/Desc><Required>1<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>A40E0DCF1F96<\/Value><\/Field><Field id=\"TRXFIELD_D19\"><Name>PaymentType<\/Name><Value>1<\/Value><\/Field><Field id=\"TRXFIELD_D40\"><Name>InvoiceNumber<\/Name><Value>119<\/Value><\/Field><Field id=\"TRXFIELD_D11\"><Name>City<\/Name><Value>San Francisco<\/Value><\/Field><Field id=\"TRXFIELD_D12\"><Name>State<\/Name><Value>IN<\/Value><\/Field><Field id=\"TRXFIELD_D13\"><Name>Zip<\/Name><Value>94109<\/Value><\/Field><Field id=\"TRXFIELD_D41\"><Name>ShipToZip<\/Name><Value>10001<\/Value><\/Field><Field id=\"TRXFIELD_D47\"><Name>CountryCode<\/Name><Value>USA<\/Value><\/Field><Field id=\"TRXFIELD_D55\"><Name>AccountStreet<\/Name><Value>600 Ellis Street <\/Value><\/Field><Field id=\"TRXFIELD_D99\"><Name>ShipToCity<\/Name><Value>New York<\/Value><\/Field><Field id=\"TRXFIELD_D103\"><Name>ShipToState<\/Name><Value>NY<\/Value><\/Field><Field id=\"TRXFIELD_D104\"><Name>ShipToStreet<\/Name><Value>600 Ellis Street <\/Value><\/Field><Field id=\"TRXFIELD_D111\"><Name>ShipToCountry<\/Name><Value>US<\/Value><\/Field><Field id=\"TRXFIELD_D67\" index=\"1\"><Name>ItemProdCode<\/Name><Value>11<\/Value><\/Field><Field id=\"TRXFIELD_D64\" index=\"1\"><Name>ItemDesc<\/Name><Value>Product Name<\/Value><\/Field><Field id=\"TRXFIELD_D66\" index=\"1\"><Name>ItemCost<\/Name><Value>10<\/Value><\/Field><Field id=\"TRXFIELD_D62\" index=\"1\"><Name>ItemQuantity<\/Name><Value>1<\/Value><\/Field><Field id=\"TRXFIELD_D68\" index=\"1\"><Name>ItemDiscount<\/Name><Value>0<\/Value><\/Field><Field id=\"TRXFIELD_D48\"><Name>CustomerCode<\/Name><Value>1<\/Value><\/Field><Field id=\"TRXFIELD_D15\"><Name>TrxAmount<\/Name><Value>12.10<\/Value><\/Field><Field id=\"TRXFIELD_D24\"><Name>AuthCode<\/Name><Value>010101<\/Value><\/Field><Field id=\"TRXFIELD_D74\"><Name>CurrencyCode<\/Name><Value>USD<\/Value><\/Field><Field id=\"TRXFIELD_D1\"><Name>CCNumber<\/Name><Value>XXXXXXXXXXXX1111<\/Value><\/Field><Field id=\"TRXFIELD_D2\"><Name>TRXFIELD_D2<\/Name><Value>XXXXXXXXXXXX1111<\/Value><\/Field><Field id=\"TRXFIELD_D3\"><Name>CCExpDate<\/Name><Value>1222<\/Value><\/Field><Field id=\"TRXFIELD_D18\"><Name>CCType<\/Name><Value>Visa<\/Value><\/Field><Field id=\"TRXFIELD_D5\"><Name>FirstName<\/Name><Value>test<\/Value><\/Field><Field id=\"TRXFIELD_D7\"><Name>LastName<\/Name><Value>zdd<\/Value><\/Field><Field id=\"TRXFIELD_D54\"><Name>AccountName<\/Name><Value>test zdd <\/Value><\/Field><Field id=\"TRXFIELD_D8\"><Name>Address1<\/Name><Value>600 Ellis Street<\/Value><\/Field><Field id=\"TRXFIELD_D202\"><Name>ShipToEmail<\/Name><Value>Jack.Zhang@nodus.com<\/Value><\/Field><Field id=\"TRXFIELD_D155\"><Name>ShipPhone<\/Name><Value>134134134<\/Value><\/Field><Field id=\"SaveCreditCard\"><Name>SaveCreditCard<\/Name><Value>0<\/Value><\/Field><Field id=\"MSO_PFTrxKey\"><Name>MSO_PFTrxKey<\/Name><Value>21051700697040<\/Value><\/Field><Field id=\"TRXFIELD_D550\"><Name>PF_TransactionKey<\/Name><Value>21051700697040<\/Value><\/Field><Field id=\"MSO_WalletID\"><Name>MSO_WalletID<\/Name><Value>00000000-0000-0000-0000-000000000000<\/Value><\/Field><Field id=\"MSO_EngineGUID\"><Name>MSO_EngineGUID<\/Name><Value>8bd91556-6e0b-42e3-a86e-a427f7bb877f<\/Value><\/Field><Field id=\"TRXFIELD_D539\"><Name>TransactionInitiation<\/Name><Value>Customer<\/Value><\/Field><Field id=\"TRXFIELD_D540\"><Name>TransactionSchedule<\/Name><Value>Unscheduled<\/Value><\/Field><Field id=\"TRXFIELD_D541\"><Name>AuthorizationType<\/Name><Value>NotSet<\/Value><\/Field><Field id=\"TRXFIELD_D542\"><Name>CCEntryIndicator<\/Name><Value>Entered<\/Value><\/Field><Field id=\"TRXFIELD_D543\"><Name>POSEntryMode<\/Name><Value>01<\/Value><\/Field><Field id=\"MSO_Last_Xmit_Date\"><Name>MSO_Last_Xmit_Date<\/Name><Value>2021-05-17 00:00:00<\/Value><\/Field><Field id=\"MSO_Last_Xmit_Time\"><Name>MSO_Last_Xmit_Time<\/Name><Value>1900-01-01 11:42:29 PM<\/Value><\/Field><Field id=\"MSO_Last_Settled_Date\"><Name>MSO_Last_Settled_Date<\/Name><Value>1900-01-01<\/Value><\/Field><Field id=\"MSO_Last_Settled_Time\"><Name>MSO_Last_Settled_Time<\/Name><Value>1900-01-01 00:00:00<\/Value><\/Field><\/Fields><\/Transaction><\/RequestData><\/Transaction><\/TransactionData>",
  "TerminalID": null,
  "TerminalResultCode": null,
  "TrxAmount": "12.10",
  "TrxDate": "5\/17\/2021 11:42:29 PM",
  "TrxKey": "21051700697040",
  "WalletID": "00000000-0000-0000-0000-000000000000"
}
```
For more information and descriptions please see our [PayFabric](https://github.com/PayFabric/APIs/blob/master/PayFabric/README.md "PayFabric").



