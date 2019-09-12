# Charfun ShortURL Generator Developer API

このAPIは今自由に使えます。でも、未来制限を設ける可能性があります。

### ShortURLを生成する

| **リクエスト方法** | **リクエスト形式**                   | **備考**                                | **Argument**                        |
| :----------------- | ------------------------------------ | --------------------------------------- | ----------------------------------- |
| POST               | https://www.charfun.com/api/shorturl | Request bodyのフォーマットは form-data. | Key:longurl  Value:{Your long url.} |

#### 例

**リクエスト方法** https://www.charfun.com/api/shorturl  

**Argument：** Key:longurl Value:https://www.charfun.com/  

**応答：**

```javascript
{"info":"OK","shorturl":"https:\/\/cfn.wtf\/jXpsN2"}
```

