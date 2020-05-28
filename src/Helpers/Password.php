<?php

namespace DesignByCode\QuickSocialite\Helpers;


class Password
{

    /**
     * @param int $num
     * @return String
     */
    public static function make($num = 10): String
    {
        $alphabet = "abcdefghijklmnopqrstuwxyz@#$%^&*()?=ABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";

        $pass = []; //remember to declare $pass as an array

        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache

        for ($i = 0; $i < $num; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }

}
