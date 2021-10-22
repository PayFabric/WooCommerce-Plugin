**Description：** 

- Retrieve the specified transaction

**Request URL：** 
- https://sandbox.payfabric.com/payment/api/transaction/21051700697007

**Method：**
- GET 

**Response:**
``` 
{
  "Amount": "33.00",
  "AuthorizationType": "NotSet",
  "BatchNumber": "",
  "CCEntryIndicator": "Entered",
  "Card": {
    "Aba": "",
    "Account": "XXXXXXXXXXXX1111",
    "AccountType": "",
    "Billto": {
      "City": "San Francisco",
      "Country": "USA",
      "Customer": "",
      "Email": "",
      "ID": "00000000-0000-0000-0000-000000000000",
      "Line1": "600 Ellis Street",
      "Line2": "",
      "Line3": "",
      "ModifiedOn": "1\/1\/0001 12:00:00 AM",
      "Phone": "",
      "State": "IN",
      "Zip": "94109"
    },
    "CardHolder": {
      "DriverLicense": "",
      "FirstName": "test",
      "LastName": "zdd",
      "MiddleName": "",
      "SSN": ""
    },
    "CardName": "Visa",
    "CardType": "Credit",
    "CheckNumber": "",
    "Connector": "PayflowPro",
    "Customer": "1",
    "ExpDate": "1222",
    "GPAddressCode": "",
    "GatewayToken": "",
    "ID": "00000000-0000-0000-0000-000000000000",
    "Identifier": "",
    "IsDefaultCard": false,
    "IsLocked": false,
    "IsSaveCard": false,
    "IssueNumber": "",
    "LastUsedDate": "1\/1\/0001 12:00:00 AM",
    "ModifiedOn": "1\/1\/0001 12:00:00 AM",
    "NewCustomerNumber": null,
    "StartDate": "",
    "Tender": "CreditCard",
    "UserDefine1": "",
    "UserDefine2": "",
    "UserDefine3": "",
    "UserDefine4": ""
  },
  "CardType": "Credit",
  "Currency": "USD",
  "Customer": "1",
  "Document": {
    "DefaultBillTo": null,
    "Head": [
      {
        "Name": "InvoiceNumber",
        "Value": "118"
      },
      {
        "Name": "City",
        "Value": ""
      },
      {
        "Name": "State",
        "Value": ""
      },
      {
        "Name": "Zip",
        "Value": ""
      },
      {
        "Name": "ShipToZip",
        "Value": ""
      },
      {
        "Name": "TaxAmount",
        "Value": ""
      },
      {
        "Name": "DutyAmount",
        "Value": ""
      },
      {
        "Name": "FreightAmount",
        "Value": ""
      },
      {
        "Name": "TaxExempt",
        "Value": ""
      },
      {
        "Name": "CountryCode",
        "Value": ""
      },
      {
        "Name": "AccountStreet",
        "Value": ""
      },
      {
        "Name": "EMail",
        "Value": ""
      },
      {
        "Name": "ShipToCity",
        "Value": ""
      },
      {
        "Name": "ShipToFirstName",
        "Value": ""
      },
      {
        "Name": "ShipToMiddleName",
        "Value": ""
      },
      {
        "Name": "ShipToLastName",
        "Value": ""
      },
      {
        "Name": "ShipToState",
        "Value": ""
      },
      {
        "Name": "ShipToStreet",
        "Value": ""
      },
      {
        "Name": "TrxRefIndex2",
        "Value": ""
      },
      {
        "Name": "ShipToCountry",
        "Value": ""
      },
      {
        "Name": "CustRef",
        "Value": ""
      },
      {
        "Name": "CustomerVATRegistarionNumber",
        "Value": ""
      },
      {
        "Name": "CommodityCode",
        "Value": ""
      },
      {
        "Name": "ShipFromZip",
        "Value": ""
      }
    ],
    "Lines": [
      {
        "Columns": [
          {
            "Name": "ItemProdCode",
            "Value": "11"
          },
          {
            "Name": "ItemDesc",
            "Value": "Product Name"
          },
          {
            "Name": "ItemCost",
            "Value": "10"
          },
          {
            "Name": "ItemQuantity",
            "Value": "1"
          },
          {
            "Name": "ItemDiscount",
            "Value": "0.5"
          },
          {
            "Name": "ItemUPC",
            "Value": ""
          },
          {
            "Name": "ItemUOM",
            "Value": ""
          },
          {
            "Name": "ItemAmount",
            "Value": ""
          },
          {
            "Name": "ItemTaxAmount",
            "Value": ""
          },
          {
            "Name": "ItemCommodityCode",
            "Value": ""
          },
          {
            "Name": "ItemTaxRate",
            "Value": ""
          }
        ],
        "UserDefined": [
          
        ]
      },
      {
        "Columns": [
          {
            "Name": "ItemProdCode",
            "Value": "107"
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
            "Value": "1"
          },
          {
            "Name": "ItemDiscount",
            "Value": "0.5"
          },
          {
            "Name": "ItemUPC",
            "Value": ""
          },
          {
            "Name": "ItemUOM",
            "Value": ""
          },
          {
            "Name": "ItemAmount",
            "Value": ""
          },
          {
            "Name": "ItemTaxAmount",
            "Value": ""
          },
          {
            "Name": "ItemCommodityCode",
            "Value": ""
          },
          {
            "Name": "ItemTaxRate",
            "Value": ""
          }
        ],
        "UserDefined": [
          
        ]
      }
    ],
    "UserDefined": [
      
    ]
  },
  "ECheckSetupId": "",
  "EntryClass": "",
  "EntryMode": "MRHostedPage",
  "Key": "21051700697007",
  "MSO_EngineGUID": "8bd91556-6e0b-42e3-a86e-a427f7bb877f",
  "ModifiedOn": "5\/17\/2021 11:02:53 PM",
  "OrigTrxAmount": "33.00",
  "PayDate": "",
  "ReferenceKey": null,
  "ReferenceTrxs": [
    
  ],
  "ReqAuthCode": "",
  "SetupId": "PFP_CC",
  "Shipto": {
    "City": "New York",
    "Country": "US",
    "Customer": "",
    "Email": "Jack.Zhang@nodus.com",
    "ID": "75787619-d8e0-4d7a-9378-32a1f9d373e2",
    "Line1": "600 Ellis Street",
    "Line2": "",
    "Line3": "",
    "ModifiedOn": "1\/1\/0001 12:00:00 AM",
    "Phone": "134134134",
    "State": "NY",
    "Zip": "10001"
  },
  "SurchargeAmount": "0.00",
  "SurchargePercentage": "0.0",
  "Tender": "CreditCard",
  "TransactionState": "Pending Capture",
  "TrxInitiation": "Customer",
  "TrxResponse": {
    "AVSAddressResponse": "N",
    "AVSZipResponse": "N",
    "AuthCode": "010101",
    "CVV2Response": "X",
    "CardType": "Credit",
    "ExpectedSettledTime": null,
    "FinalAmount": "33.00",
    "IAVSAddressResponse": "N",
    "Message": "Approved",
    "OrigTrxAmount": "33.00",
    "OriginationID": "A50E0DCABF62",
    "PayFabricErrorCode": null,
    "RespTrxTag": "",
    "ResultCode": "0",
    "SettledTime": null,
    "Status": "Approved",
    "SurchargeAmount": "0.00",
    "SurchargePercentage": "0.00",
    "TAXml": "<TransactionData><Connection name=\"PFP_CC\" connector=\"PayflowPro\"><Processor id=\"18\">TSYS(Vital\/VisaNet)<\/Processor><PaymentType id=\"1\">Credit<\/PaymentType><\/Connection><Transaction post=\"False\" type=\"2\" status=\"1\"><NeededData><Transaction><Type>2<\/Type><Status>Approved<\/Status><Category>NeededData<\/Category><Fields \/><\/Transaction><\/NeededData><FailureData><Transaction><Type>2<\/Type><Status>Approved<\/Status><Category>FailureData<\/Category><Fields \/><\/Transaction><\/FailureData><ResponseData><Transaction><Type>7<\/Type><Status>Approved<\/Status><Category>ResponseData<\/Category><Fields><Field id=\"TrxField_D17\"><Name>ResultCode<\/Name><Desc>0<\/Desc><Value>0<\/Value><\/Field><Field id=\"TrxField_D31\"><Name>ResponseMsg<\/Name><Desc>Approved<\/Desc><Value>Approved<\/Value><\/Field><Field id=\"TrxField_D24\"><Name>AuthCode<\/Name><Desc>010101<\/Desc><Value>010101<\/Value><\/Field><Field id=\"TrxField_D16\"><Name>OriginationID<\/Name><Desc>A50E0DCABF62<\/Desc><Value>A50E0DCABF62<\/Value><\/Field><Field id=\"TrxField_D186\"><Name>Token<\/Name><Desc>A50E0DCABF62<\/Desc><Value>A50E0DCABF62<\/Value><\/Field><Field id=\"TrxField_D83\"><Name>CVV2ResponseCode<\/Name><Desc>X<\/Desc><Value>X<\/Value><\/Field><Field id=\"TrxField_D32\"><Name>AVSAddResponse<\/Name><Desc>N<\/Desc><Value>N<\/Value><\/Field><Field id=\"TrxField_D33\"><Name>AVSZipResponse<\/Name><Desc>N<\/Desc><Value>N<\/Value><\/Field><Field id=\"TrxField_D185\"><Name>IAVSAddressResponse<\/Name><Desc>N<\/Desc><Value>N<\/Value><\/Field><\/Fields><\/Transaction><\/ResponseData><RequestData><Transaction><Type>2<\/Type><Status>1<\/Status><Category>RequestData<\/Category><Fields><Field id=\"TrxField_D1\"><Name>ACCT<\/Name><Desc>Credit Card Number<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>1<\/Type><Value>XXXXXXXXXXXX1111<\/Value><\/Field><Field id=\"TrxField_D3\"><Name>EXPDATE<\/Name><Desc>Expiration Date MMYY<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>1<\/Type><Value>1222<\/Value><\/Field><Field id=\"TrxField_D5\"><Name>BillToFirstName<\/Name><Desc>First Name<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>test<\/Value><\/Field><Field id=\"TrxField_D7\"><Name>BillToLastName<\/Name><Desc>Last Name<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>zdd<\/Value><\/Field><Field id=\"TrxField_D11\"><Name>BillToCity<\/Name><Desc>City<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>San Francisco<\/Value><\/Field><Field id=\"TrxField_D12\"><Name>BillToState<\/Name><Desc>State<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>IN<\/Value><\/Field><Field id=\"TrxField_D13\"><Name>BillToZip<\/Name><Desc>Zip<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>94109<\/Value><\/Field><Field id=\"TrxField_D15\"><Name>Amt<\/Name><Desc>Transaction Amount<\/Desc><Required>1<\/Required><Encrypted>0<\/Encrypted><Type>3<\/Type><Value>33.00<\/Value><\/Field><Field id=\"TrxField_D40\"><Name>InvNum<\/Name><Desc>Invoice Number<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>118<\/Value><\/Field><Field id=\"TrxField_D41\"><Name>ShipToZip<\/Name><Desc>Ship to Zip<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>10001<\/Value><\/Field><Field id=\"TrxField_D47\"><Name>BillToCountry<\/Name><Desc>Country Code<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>USA<\/Value><\/Field><Field id=\"TrxField_D48\"><Name>CustCode<\/Name><Desc>Customer Code<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>1<\/Value><\/Field><Field id=\"TrxField_D49\"><Name>CVV2<\/Name><Desc>CVV2<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value><\/Value><\/Field><Field id=\"TrxField_D55\"><Name>BillToStreet<\/Name><Desc>Account Holder Street<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>600 Ellis Street <\/Value><\/Field><Field id=\"TrxField_D74\"><Name>CurrencyCode<\/Name><Desc>Currency Code<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>USD<\/Value><\/Field><Field id=\"TrxField_D99\"><Name>ShipToCity<\/Name><Desc>Shipping City<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>New York<\/Value><\/Field><Field id=\"TrxField_D103\"><Name>ShipToState<\/Name><Desc>Shipping State<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>NY<\/Value><\/Field><Field id=\"TrxField_D104\"><Name>ShipToStreet<\/Name><Desc>Shipping Street<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>600 Ellis Street <\/Value><\/Field><Field id=\"TrxField_D111\"><Name>ShipToCountry<\/Name><Desc>Shipping Country<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>US<\/Value><\/Field><Field id=\"TrxField_D155\"><Name>ShipToPhone<\/Name><Desc>Shipping Phone<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>134134134<\/Value><\/Field><Field id=\"TrxField_D202\"><Name>ShipToEmail<\/Name><Desc>Shipping email.<\/Desc><Required>0<\/Required><Encrypted>0<\/Encrypted><Type>2<\/Type><Value>Jack.Zhang@nodus.com<\/Value><\/Field><Field id=\"TRXFIELD_D19\"><Name>PaymentType<\/Name><Value>1<\/Value><\/Field><Field id=\"TRXFIELD_D67\" index=\"1\"><Name>ItemProdCode<\/Name><Value>11<\/Value><\/Field><Field id=\"TRXFIELD_D64\" index=\"1\"><Name>ItemDesc<\/Name><Value>Product Name<\/Value><\/Field><Field id=\"TRXFIELD_D66\" index=\"1\"><Name>ItemCost<\/Name><Value>10<\/Value><\/Field><Field id=\"TRXFIELD_D62\" index=\"1\"><Name>ItemQuantity<\/Name><Value>1<\/Value><\/Field><Field id=\"TRXFIELD_D68\" index=\"1\"><Name>ItemDiscount<\/Name><Value>0.5<\/Value><\/Field><Field id=\"TRXFIELD_D67\" index=\"2\"><Name>ItemProdCode<\/Name><Value>107<\/Value><\/Field><Field id=\"TRXFIELD_D64\" index=\"2\"><Name>ItemDesc<\/Name><Value>product1<\/Value><\/Field><Field id=\"TRXFIELD_D66\" index=\"2\"><Name>ItemCost<\/Name><Value>20<\/Value><\/Field><Field id=\"TRXFIELD_D62\" index=\"2\"><Name>ItemQuantity<\/Name><Value>1<\/Value><\/Field><Field id=\"TRXFIELD_D68\" index=\"2\"><Name>ItemDiscount<\/Name><Value>0.5<\/Value><\/Field><Field id=\"TRXFIELD_D2\"><Name>TRXFIELD_D2<\/Name><Value>XXXXXXXXXXXX1111<\/Value><\/Field><Field id=\"TRXFIELD_D18\"><Name>CCType<\/Name><Value>Visa<\/Value><\/Field><Field id=\"TRXFIELD_D54\"><Name>AccountName<\/Name><Value>test zdd <\/Value><\/Field><Field id=\"TRXFIELD_D8\"><Name>Address1<\/Name><Value>600 Ellis Street<\/Value><\/Field><Field id=\"SaveCreditCard\"><Name>SaveCreditCard<\/Name><Value>0<\/Value><\/Field><Field id=\"MSO_PFTrxKey\"><Name>MSO_PFTrxKey<\/Name><Value>21051700697007<\/Value><\/Field><Field id=\"TRXFIELD_D550\"><Name>PF_TransactionKey<\/Name><Value>21051700697007<\/Value><\/Field><Field id=\"MSO_WalletID\"><Name>MSO_WalletID<\/Name><Value>00000000-0000-0000-0000-000000000000<\/Value><\/Field><Field id=\"MSO_EngineGUID\"><Name>MSO_EngineGUID<\/Name><Value>8bd91556-6e0b-42e3-a86e-a427f7bb877f<\/Value><\/Field><Field id=\"TRXFIELD_D539\"><Name>TransactionInitiation<\/Name><Value>Customer<\/Value><\/Field><Field id=\"TRXFIELD_D540\"><Name>TransactionSchedule<\/Name><Value>Unscheduled<\/Value><\/Field><Field id=\"TRXFIELD_D541\"><Name>AuthorizationType<\/Name><Value>NotSet<\/Value><\/Field><Field id=\"TRXFIELD_D542\"><Name>CCEntryIndicator<\/Name><Value>Entered<\/Value><\/Field><Field id=\"TRXFIELD_D543\"><Name>POSEntryMode<\/Name><Value>01<\/Value><\/Field><Field id=\"MSO_Last_Xmit_Date\"><Name>MSO_Last_Xmit_Date<\/Name><Value>2021-05-17 00:00:00<\/Value><\/Field><Field id=\"MSO_Last_Xmit_Time\"><Name>MSO_Last_Xmit_Time<\/Name><Value>1900-01-01 11:02:53 PM<\/Value><\/Field><Field id=\"MSO_Last_Settled_Date\"><Name>MSO_Last_Settled_Date<\/Name><Value>1900-01-01<\/Value><\/Field><Field id=\"MSO_Last_Settled_Time\"><Name>MSO_Last_Settled_Time<\/Name><Value>1900-01-01 00:00:00<\/Value><\/Field><Field id=\"MSO_TrxType\"><Name>MSO_TrxType<\/Name><Value>7<\/Value><\/Field><Field id=\"MSO_TrxStatus\"><Name>MSO_TrxStatus<\/Name><Value>0<\/Value><\/Field><Field id=\"MSO_IsCardValid\"><Name>MSO_IsCardValid<\/Name><Value>1<\/Value><\/Field><Field id=\"MSO_Auth_Amount\"><Name>MSO_Auth_Amount<\/Name><Value>33.00<\/Value><\/Field><\/Fields><\/Transaction><\/RequestData><\/Transaction><\/TransactionData>",
    "TerminalID": "",
    "TerminalResultCode": "",
    "TrxAmount": "33.00",
    "TrxDate": "5\/17\/2021 11:02:53 PM",
    "TrxKey": "21051700697007",
    "WalletID": null
  },
  "TrxSchedule": "Unscheduled",
  "TrxUserDefine1": "118",
  "TrxUserDefine2": "",
  "TrxUserDefine3": "",
  "TrxUserDefine4": "",
  "Type": "Book"
}
```
For more information and descriptions please see our [PayFabric](https://github.com/PayFabric/APIs/blob/master/PayFabric/README.md "PayFabric").



