# Charfun Yard Developer API

這個API現在可以無限制使用，但是以後會根據情況加以限制。

注意：所有發表過的消息都會在15天后刪除。

### 獲取本站支持的電子郵件服務商列表

在你創建頻道之前，需要一個電子郵箱來獲取用來操作頻道的AKey和BKey，而本站並不允許所有郵箱都可以接收這些信息。

| **Request Method** | **Request Format**                             |
| :----------------- | ---------------------------------------------- |
| GET                | https://www.charfun.com/api/yard/getallowemail |

#### 範例

**Request:** https://www.charfun.com/api/yard/getallowemail 

**Arguments:** 

**Response：**

```javascript
["gmail.com","outlook.com","hotmail.com","live.cn","live.com","live.jp","qq.com","163.com","126.com","wo.cn","189.cn","139.com","yahoo.co.jp","yahoo.com"]
```



### 創建頻道

這是創建頻道的API。 您需要一個電子郵箱去接收AKey和BKey。 每個郵箱只可以用來創建一個頻道。請妥善保存您的AKey和BKey。如果您丟失了AKey和BKey，您可以通過用之前的郵箱再次調用這個API的方式找回。

調用這個API的時間間隔為120秒。

| **Request Method** | **Request Format**                             | **Note**                 |
| :----------------- | ---------------------------------------------- | ------------------------ |
| POST               | https://www.charfun.com/api/yard/createchannel | 請求體的格式爲form-data. |

| **Key** | **Value**            |
| ------- | -------------------- |
| email   | (Your email address) |

#### 範例

**Request:** POST https://www.charfun.com/api/yard/createchannel

**Body:** 

| **Key** | **Value**            |
| ------- | -------------------- |
| email   | (Your email address) |

**Response:** （如果您的郵箱可用，您可以收到一封來自Charfun的郵件）



### 獲取Token

所有操作都必須使用Token。這是用來獲取Token的API。每個Token的生命周期為3600秒。如果Token失效，您必須再次使用這個API生成Token。

| **Request Method** | **Request Format**                        | **Note**                  |
| :----------------- | ----------------------------------------- | ------------------------- |
| POST               | https://www.charfun.com/api/yard/gettoken | 請求體的格式爲form-data。 |

| **Key** | **Value**  |
| ------- | ---------- |
| akey    | 您的AKey。 |
| bkey    | 您的BKey。 |

#### 範例

**Request:** POST https://www.charfun.com/api/yard/gettoken

**Body:** 

| **Key** | **Value**                                       |
| ------- | ----------------------------------------------- |
| akey    | b620xxxxxxx3a78xxxxb9axxxxxxxxxxxxxxxxxxxxxxxxx |
| bkey    | bxxxxxxxxxxx                                    |

**Response:** 

```javascript
{"info":"OK","token":"ac3337xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"}
```



### 更新頻道信息

這是用來更新頻道名稱、頻道描述、頻道管理人名稱的API。

| **Request Method** | **Request Format**                                 | **Note**                  |
| :----------------- | -------------------------------------------------- | ------------------------- |
| POST               | https://www.charfun.com/api/yard/updatechannelinfo | 請求體的格式爲form-data。 |

| **Key**     | **Value**                                           |
| ----------- | --------------------------------------------------- |
| token       | 頻道Token。必須。                                   |
| channelname | 新頻道名稱，如果不填則不更改頻道名稱。非必須。      |
| managername | 新管理員名稱，如果不填則不更改管理員名稱。 非必須。 |
| description | 新頻道描述，如果不填則不更改頻道描述。非必須。      |

#### 範例

**Request:** POST https://www.charfun.com/api/yard/updatechannelinfo

**Body:** 

| **Key**     | **Value**                                                    |
| ----------- | ------------------------------------------------------------ |
| token       | xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx |
| channelname | hello                                                        |
| managername | cool                                                         |
| description | hey man                                                      |

**Response:** 

```javascript
{"info":"OK"}
```



### 增加内容

這是往頻道裏增加内容的API。如果增加成功，您可以得到這則新内容的UUID。

| **Request Method** | **Request Format**                          | **Note**                  |
| :----------------- | ------------------------------------------- | ------------------------- |
| POST               | https://www.charfun.com/api/yard/addcontent | 請求體的格式爲form-data。 |

| **Key** | **Value**                                   |
| ------- | ------------------------------------------- |
| token   | 頻道Token。必須。                           |
| title   | 内容的標題。如果不填則顯示爲null。非必須。  |
| content | 内容的主體。如果不填則顯示爲null。 非必須。 |

#### 範例

**Request:** POST https://www.charfun.com/api/yard/addcontent

**Body:** 

| **Key** | **Value**                                                    |
| ------- | ------------------------------------------------------------ |
| token   | xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx |
| title   | hello                                                        |
| content | cool                                                         |

**Response:** 

```javascript
{"info":"OK","uuid":"eaaaaaab-7a3f-5bb4-9aad-d0ad5a979a8e"}
```



### 獲取内容

這是用來獲取内容的API。

| **Request Method** | **Request Format**                          | **Note**                  |
| :----------------- | ------------------------------------------- | ------------------------- |
| POST               | https://www.charfun.com/api/yard/addcontent | 請求體的格式爲form-data。 |

| **Key** | **Value**                                                    |
| ------- | ------------------------------------------------------------ |
| token   | 頻道Token。必須。                                            |
| uuid    | 想要獲取内容的UUID，如果不填則按照標題來獲取内容，或者直接獲取所有頻道下内容。非必須。 |
| title   | 想要獲取内容的標題，如果不填則按照UUID來獲取内容，或者直接獲取所有頻道下内容。 非必須。 |

如果uuid和title都填了，那麽會按照UUID來獲取内容。

#### 範例

**Request:** POST https://www.charfun.com/api/yard/getcontent

**Body:** 

| **Key** | **Value**                                                    |
| ------- | ------------------------------------------------------------ |
| token   | xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx |

**Response:** 

```javascript
{
    "info": "OK",
    "contents": [
        {
            "uuid": "xxxxxxx-052e-518f-a1a1-xxxxxxxxxxxx",
            "title": "yeyrereqw324324ererwerewfsfaFrett",
            "content": "fddsfsarewrrfdfsdafasd"
        },
        {
            "uuid": "xxxxxxx-324d-5f09-837a-xxxxxxxxxxxx",
            "title": "ererwerewfsfaF",
            "content": "ssdadasdsaddsadfsfddsfdsfsdasfdsfsdfdfsdafasd"
        },
        {
            "uuid": "xxxxxxx-c7ab-5318-b386-xxxxxxxxxxxx",
            "title": "sewrwereffyfrasasreqrqrrwerewfsfaFrettsdfsddgfdgasf",
            "content": "fddsfsarewrrsffdfsdafasdsdfaswerwetrwtwrewrewr"
        }
    ]
}
```



### 刪除内容

用這個API可以從頻道裏刪除指定内容。

| **Request Method** | **Request Format**                          | **Note**                  |
| :----------------- | ------------------------------------------- | ------------------------- |
| POST               | https://www.charfun.com/api/yard/delcontent | 請求體的格式爲form-data。 |

| **Key** | **Value**                  |
| ------- | -------------------------- |
| token   | 頻道Token。必須。          |
| uuid    | 需要刪除内容的UUID。必須。 |

#### 範例

**Request:** POST https://www.charfun.com/api/yard/delcontent

**Body:** 

| **Key** | **Value**                                                    |
| ------- | ------------------------------------------------------------ |
| token   | xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx |
| uuid    | xxxxxxd-296e-559f-94ec-xxxxxxxxxx                            |

**Response:** 

```javascript
{"info":"OK"}
```

### 編輯内容

編輯指定内容的API。

| **Request Method** | **Request Format**                           | **Note**                  |
| :----------------- | -------------------------------------------- | ------------------------- |
| POST               | https://www.charfun.com/api/yard/editcontent | 請求體的格式爲form-data。 |

| **Key** | **Value**                  |
| ------- | -------------------------- |
| token   | 頻道Token。必須。          |
| uuid    | 想要編輯内容的UUID。必須。 |

#### 範例

**Request:** POST https://www.charfun.com/api/yard/editcontent

**Body:** 

| **Key** | **Value**                                                    |
| ------- | ------------------------------------------------------------ |
| token   | xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx |
| uuid    | xxxxxxxd-2xxe-559f-94ec-xxxxxxxxxx                           |

**Response:** 

```javascript
{"info":"OK"}
```