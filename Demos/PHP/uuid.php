<?php

# Arguments:
# uuidVersion(Int:In [4,5,3,1],default value is 4);
# arg(If uuidVersion is 4 or 1, you could set generate number here,default value is 1,range of the value is 1-1000;If uuidVersion is 5 or 3, you could type name here, dafault value is 'Charfun')


function uuidGen($uuidVersion = 4, $arg = "Charfun")
{
    if (!in_array($uuidVersion, array(4, 5, 3, 1))) {
        return FALSE;
    } else {
        if (in_array($uuidVersion, array(4, 1))) {
            if ($arg != "Charfun" && is_integer($arg)) {
                $num = 1;
                if ($arg < 1 || $arg > 1000) {
                    echo "If uuidVersion is 4 or 1,the value must in the range of 1-1000 and the type must be Integer.";
                    return FALSE;
                } else {
                    $num = $arg;
                }
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://www.charfun.com/api/uuid" . $uuidVersion . "/" . $num);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, '0');
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, '0');
                $output = curl_exec($ch);
                $rawData = $output;
                curl_close($ch);
                $data = json_decode($rawData);
            } elseif (in_array($uuidVersion, array(5, 3))) {
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://www.charfun.com/api/uuid" . $uuidVersion . "/" . $arg);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $output = curl_exec($ch);
                $rawData = $output;
                curl_close($ch);

                $data = json_decode($rawData);
            }

            return $data;
        }
    }
}

var_dump(uuidGen(4, 10));
