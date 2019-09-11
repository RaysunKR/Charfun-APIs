# Charfun UUID Generator Developer API

This API is currently available for unlimited use. The usage limit will be set later depending on the situation.

### Generate UUIDv4

| **Request Method** | **Request Format**                         | **Note**                                                     |
| :----------------- | ------------------------------------------ | ------------------------------------------------------------ |
| GET                | https://www.charfun.com/api/uuid4/{number} | Number is optional. Default value of it is 1.The range of it is 1-1000. |

#### Example

**Request:** https://www.charfun.com/api/uuid4/5  

**Response：**
```javascript
{"info":"OK",
 "data":
 ["281de078-96f5-4df7-b4ef-ec66471895b8",
  "0b3f760c-c75e-412b-83ce-8543bd5bc0af",
  "85d5548d-575b-434c-8e06-df9110eb0745",
  "e4253dab-73c6-45bd-988d-569dbb11ff41",
  "df37351d-2916-47cd-99a9-4beaf1c76553"]
}
```

### Generate UUIDv5

| **Request Method** | **Request Format**                       | **Note**                                           |
| :----------------- | ---------------------------------------- | -------------------------------------------------- |
| GET                | https://www.charfun.com/api/uuid5/{name} | Name is optional.Default value of it is 'Charfun'. |

#### Example

**Request:** https://www.charfun.com/api/uuid5/helloworld  

**Response：**

```javascript
{"info":"OK",
 "data":["8cf4fccd-e796-5676-9352-57ff9bed87d1"]
}
```

### Generate UUIDv3

| **Request Method** | **Request Format**                       | **Note**                                           |
| :----------------- | ---------------------------------------- | -------------------------------------------------- |
| GET                | https://www.charfun.com/api/uuid3/{name} | Name is optional.Default value of it is 'Charfun'. |

#### Example

**Request:** https://www.charfun.com/api/uuid3/helloworld  

**Response：**

```javascript
{"info":"OK",
 "data":["def0fbe0-63e1-3bc5-8c80-3e4f481c1661"]
}
```
### Generate UUIDv1

| **Request Method** | **Request Format**                         | **Note**                                                     |
| :----------------- | ------------------------------------------ | ------------------------------------------------------------ |
| GET                | https://www.charfun.com/api/uuid1/{number} | Number is optional. Default value of it is 1.The range of it is 1-1000. |

#### Example

**Request:** https://www.charfun.com/api/uuid1/5  

**Response：**

```javascript
{"info":"OK",
 "data":
 ["c1902ce0-d1e8-11e9-95fe-4fdd0d21aae2",
  "c190367c-d1e8-11e9-a941-158d72e80995",
  "c1903712-d1e8-11e9-af14-aff25cfac3b6",
  "c1903780-d1e8-11e9-84c9-7f0b0e8bf612",
  "c19037d0-d1e8-11e9-b18b-09772f7eb477"]
}
```
