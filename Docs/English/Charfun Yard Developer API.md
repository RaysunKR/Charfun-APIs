# Charfun Yard Developer API

This API is currently available for unlimited use. The usage limit will be set later depending on the situation.

### Get Allowed Email

Before you create a chanel , you must get your AKey and BKey by Email , we do not allow any email address to recieve the information. The API could tell you the email service providers that we allow.

| **Request Method** | **Request Format**                             |
| :----------------- | ---------------------------------------------- |
| GET                | https://www.charfun.com/api/yard/getallowemail |

#### Example

**Request:** https://www.charfun.com/api/yard/getallowemail 

**Arguments:** 

**Response：**

```javascript
["gmail.com","outlook.com","hotmail.com","live.cn","live.com","live.jp","qq.com","163.com","126.com","wo.cn","189.cn","139.com","yahoo.co.jp","yahoo.com"]
```



### Create a channel

The API could help you create a channel. You need an Email address to recieve AKey and BKey. Each email address could create only one channel. Please remember your AKey and BKey carefully. If you lost your AKey and BKey , you could get it again by the API. Just use the same Email you used.

Once you used the API, you must wait for 120 seconds to use it again.

| **Request Method** | **Request Format**                             | **Note**                         |
| :----------------- | ---------------------------------------------- | -------------------------------- |
| POST               | https://www.charfun.com/api/yard/createchannel | Format of the Body is form-data. |

| **Key** | **Value**            |
| ------- | -------------------- |
| email   | (Your email address) |

#### Example

**Request:** POST https://www.charfun.com/api/yard/createchannel

**Body:** 

| **Key** | **Value**            |
| ------- | -------------------- |
| email   | (Your email address) |

**Response:** (If your email address is available, you would recieve an email from Charfun).



### Get Token

Token is necessary for any operation. These API could help you get a token . Life of each Token is 3600 seconds. If a token died , you must get a new token by the API.

| **Request Method** | **Request Format**                        | **Note**                         |
| :----------------- | ----------------------------------------- | -------------------------------- |
| POST               | https://www.charfun.com/api/yard/gettoken | Format of the Body is form-data. |

| **Key** | **Value**                 |
| ------- | ------------------------- |
| akey    | The AKey of your channel. |
| bkey    | The AKey of your channel. |

#### Example

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



### Update Channel Info

The API could help you change the Channel name , Channel description and manager name.

| **Request Method** | **Request Format**                                 | **Note**                         |
| :----------------- | -------------------------------------------------- | -------------------------------- |
| POST               | https://www.charfun.com/api/yard/updatechannelinfo | Format of the Body is form-data. |

| **Key**     | **Value**                                                    |
| ----------- | ------------------------------------------------------------ |
| token       | The token of the channel. Necessary.                         |
| channelname | The new channel name you want to use. If ignore it, the name would not be changed. Unnecessary. |
| managername | The new manager name you want to use. If ignore it, the name would not be changed. Unnecessary. |
| description | The new channel description you want to use. If ignore it, the description would not be changed. Unnecessary. |

#### Example

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



### Add content

The API could help you add contents to your channel. If the content be added, you would get the uuid of the content.

| **Request Method** | **Request Format**                          | **Note**                         |
| :----------------- | ------------------------------------------- | -------------------------------- |
| POST               | https://www.charfun.com/api/yard/addcontent | Format of the Body is form-data. |

| **Key** | **Value**                                                    |
| ------- | ------------------------------------------------------------ |
| token   | The token of the channel. Necessary.                         |
| title   | The title you want to use. If ignore it, the title would be null. Unnecessary. |
| content | The content of the new message. If ignore it, the content would be null. Unnecessary. |

#### Example

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



### Get content

The API could help you get contents you added to your channel.

| **Request Method** | **Request Format**                          | **Note**                         |
| :----------------- | ------------------------------------------- | -------------------------------- |
| POST               | https://www.charfun.com/api/yard/addcontent | Format of the Body is form-data. |

| **Key** | **Value**                                                    |
| ------- | ------------------------------------------------------------ |
| token   | The token of the channel. Necessary.                         |
| uuid    | UUID of the content you want to get. If ignore it, the API would fetch the content by title or fetch all of your contents. Unnecessary. |
| title   | Title of the content you want to get. If ignore it, the API would fetch the content by UUID or fetch all of your contents. Unnecessary. |

If both UUID and title are used, the API would fetch the content by UUID.

#### Example

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
            "uuid": "220c469a-052e-518f-a1a1-e752672109ec",
            "title": "yeyrereqw324324ererwerewfsfaFrett",
            "content": "fddsfsarewrrfdfsdafasd"
        },
        {
            "uuid": "38bd4d20-324d-5f09-837a-3b1b467f7f9a",
            "title": "ererwerewfsfaF",
            "content": "ssdadasdsaddsadfsfddsfdsfsdasfdsfsdfdfsdafasd"
        },
        {
            "uuid": "4b0aecb0-c7ab-5318-b386-bb4916637909",
            "title": "sewrwereffyfrasasreqrqrrwerewfsfaFrettsdfsddgfdgasf",
            "content": "fddsfsarewrrsffdfsdafasdsdfaswerwetrwtwrewrewr"
        }
    ]
}
```



### Delete content

The API could help you delete content from your channel.

| **Request Method** | **Request Format**                          | **Note**                         |
| :----------------- | ------------------------------------------- | -------------------------------- |
| POST               | https://www.charfun.com/api/yard/delcontent | Format of the Body is form-data. |

| **Key** | **Value**                                          |
| ------- | -------------------------------------------------- |
| token   | The token of the channel. Necessary.               |
| uuid    | UUID of the content you want to delete. Necessary. |

#### Example

**Request:** POST https://www.charfun.com/api/yard/delcontent

**Body:** 

| **Key** | **Value**                                                    |
| ------- | ------------------------------------------------------------ |
| token   | xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx |
| uuid    | 529f524d-296e-559f-94ec-df9210cd6f6b                         |

**Response:** 

```javascript
{"info":"OK"}
```

### Edit content

The API could help you Edit content in your channel.

| **Request Method** | **Request Format**                           | **Note**                         |
| :----------------- | -------------------------------------------- | -------------------------------- |
| POST               | https://www.charfun.com/api/yard/editcontent | Format of the Body is form-data. |

| **Key** | **Value**                                        |
| ------- | ------------------------------------------------ |
| token   | The token of the channel. Necessary.             |
| uuid    | UUID of the content you want to Edit. Necessary. |

#### Example

**Request:** POST https://www.charfun.com/api/yard/editcontent

**Body:** 

| **Key** | **Value**                                                    |
| ------- | ------------------------------------------------------------ |
| token   | xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx |
| uuid    | 529f524d-296e-559f-94ec-df9210cd6f6b                         |

**Response:** 

```javascript
{"info":"OK"}
```