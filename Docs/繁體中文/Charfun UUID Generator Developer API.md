# Charfun UUID Generator Developer API

此API現時可不受限使用，但是未來可能視乎情况設定限制。

### 生成 UUIDv4

| **Request方式** | **Request格式**                            | **備注**                                         |
| :-------------- | ------------------------------------------ | ------------------------------------------------ |
| GET             | https://www.charfun.com/api/uuid4/{number} | Number是可選變數，默認值是1，變數範圍是 1-1000。 |

#### 範例

**Request：** https://www.charfun.com/api/uuid4/5  

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

### 生成 UUIDv5

| **Request方式** | **Request格式**                          | **備注**                             |
| :-------------- | ---------------------------------------- | ------------------------------------ |
| GET             | https://www.charfun.com/api/uuid5/{name} | Name 是可選變數，默認值是“Charfun”。 |

#### 範例

**Request：** https://www.charfun.com/api/uuid5/helloworld  

**Response：**

```javascript
{"info":"OK",
 "data":["8cf4fccd-e796-5676-9352-57ff9bed87d1"]
}
```

### 生成 UUIDv3

| **Request方式** | **Request格式**                          | **備注**                             |
| :-------------- | ---------------------------------------- | ------------------------------------ |
| GET             | https://www.charfun.com/api/uuid3/{name} | Name 是可選變數，默認值是“Charfun”。 |

#### 範例

**Request：** https://www.charfun.com/api/uuid3/helloworld  

**Response：**

```javascript
{"info":"OK",
 "data":["def0fbe0-63e1-3bc5-8c80-3e4f481c1661"]
}
```
### 生成 UUIDv1

| **Request方法** | **Request格式**                            | **備注**                                         |
| :-------------- | ------------------------------------------ | ------------------------------------------------ |
| GET             | https://www.charfun.com/api/uuid1/{number} | Number是可選變數，默認值是1，變數範圍是 1-1000。 |

#### 範例

**Request：** https://www.charfun.com/api/uuid1/5  

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
