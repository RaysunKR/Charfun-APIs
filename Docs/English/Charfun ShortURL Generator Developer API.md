# Charfun ShortURL Generator Developer API

This API is currently available for unlimited use. The usage limit will be set later depending on the situation.

### Generate A ShortURL

| **Request Method** | **Request Format**                   | **Note**                                     | **Arguments**                       |
| :----------------- | ------------------------------------ | -------------------------------------------- | ----------------------------------- |
| POST               | https://www.charfun.com/api/shorturl | The format of the request body is form-data. | Key:longurl  Value:{Your long url.} |

#### Example

**Request:** https://www.charfun.com/api/shorturl  

**Arguments:** Key:longurl Value:https://www.charfun.com/  

**Response：**

```javascript
{"info":"OK","shorturl":"https:\/\/cfn.wtf\/jXpsN2"}
```
