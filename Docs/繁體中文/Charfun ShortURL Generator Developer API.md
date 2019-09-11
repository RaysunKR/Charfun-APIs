# Charfun ShortURL Generator Developer API

此API現時可不受限使用，但是未來可能視乎情况設定限制。

### 生成一個短網址

| **Request方式** | **Request格式**                      | **備注**                        | **參數**                            |
| :-------------- | ------------------------------------ | ------------------------------- | ----------------------------------- |
| POST            | https://www.charfun.com/api/shorturl | Request body的格式是 form-data. | Key:longurl  Value:{Your long url.} |

#### 例子

**Request：** https://www.charfun.com/api/shorturl  

**參數：** Key:longurl Value:https://www.charfun.com/  

**Response：**

```javascript
{"info":"OK","shorturl":"https:\/\/cfn.wtf\/jXpsN2"}
```
