import urllib3
import json
import re


def shortUrlGen(longurl="https://www.charfun.com/"):
    pattern = r'(?i)\b((?:[a-z][\w-]+:(?:/{1,3}|[a-z0-9%])|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:\'".,<>?«»“”‘’]))'
    if re.match(pattern, longurl):
        http = urllib3.PoolManager()
        r = http.request(
            'POST', "https://www.charfun.com/api/shorturl", fields={"longurl": longurl})
        rawData = r.data.decode()
        data = json.loads(rawData)

        return data
    else:
        print("Illegal URL.")
        return False


if __name__ == "__main__":
    print(shortUrlGen("https://www.charfun.com/"))
