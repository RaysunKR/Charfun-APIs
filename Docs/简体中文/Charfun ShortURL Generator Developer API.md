# Charfun ShortURL Generator Developer API

这个API目前可以无限制使用，但日后可能会根据情况加一些限制。

### 生成一个短网址

| **请求方法** | **请求格式**                         | **备注**                        | **参数**                          |
| :----------- | ------------------------------------ | ------------------------------- | --------------------------------- |
| POST         | https://www.charfun.com/api/shorturl | Request body的格式是 form-data. | 键名:longurl  值:{Your long url.} |

#### 例子

**请求：** https://www.charfun.com/api/shorturl  

**参数：** Key:longurl Value:https://www.charfun.com/  

**响应：**

```javascript
{"info":"OK","shorturl":"https:\/\/cfn.wtf\/jXpsN2"}
```

