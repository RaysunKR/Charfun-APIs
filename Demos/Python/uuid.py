import urllib3
import json

# The demo is based on Python3.x
# Arguments:
# uuidVersion(Int:In [4,5,3,1],default value is 4);
# arg(If uuidVersion is 4 or 1, you could set generate number here,default value is 1,range of the value is 1-1000;If uuidVersion is 5 or 3, you could type name here, dafault value is 'Charfun')


def uuidGen(uuidVersion=4, arg="Charfun"):
    if uuidVersion not in [4, 5, 3, 1]:
        return False
    else:
        if uuidVersion in [4, 1]:
            if arg is not "Charfun" and isinstance(arg, int):
                num = 1
                if arg < 1 or arg > 1000:
                    print(
                        "If uuidVersion is 4 or 1,the value must in the range of 1-1000 and the type must be Integer.")
                    return False
            else:
                num = arg

            http = urllib3.PoolManager()
            r = http.request(
                'GET', "https://www.charfun.com/api/uuid%s/%s" % (uuidVersion, num))
            rawData = r.data.decode()
            data = json.loads(rawData)
        elif uuidVersion in [5, 3]:

            http = urllib3.PoolManager()
            r = http.request(
                'GET', "https://www.charfun.com/api/uuid%s/%s" % (uuidVersion, arg))
            rawData = r.data.decode()
            data = json.loads(rawData)

        return data


if __name__ == "__main__":
    print(uuidGen())
