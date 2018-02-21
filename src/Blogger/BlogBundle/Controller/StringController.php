<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class StringController extends Controller
{
    public function indexAction()
    {
        $txt = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $sln = strlen($txt);
        return new Response($sln);
    }

    public function stringInStringAction()
    {
        $str = "Please locate where 'locate' occurs!";
        $findme = "locate";
        $pos = strpos($str, $findme);
        return new Response($pos);
    }

    public function lastIndexAction()
    {
        $str = "Please locate where 'locate' occurs!";
        $findme = "locate";
        $pos = strrpos($str, $findme);
        return new Response($pos);
    }

    public function slicesAction()
    {
        $str = "Apple, Banana, Kiwi";
        $res = substr($str, 7, 13);
        //$res = substr($str, -13,-6); //The same result as string above
        return new Response($res);
    }

    public function replaceAction()
    {
        $str = "Please visit Microsoft and Microsoft!";
        $n = str_replace("Microsoft", "W3Schools", $str);
        return new Response($n);
    }

    public function upperAction()
    {
        $text1 = "Hello World!";
        return new Response(strtoupper($text1));//strtolower($text1); //lowercase string
    }

    public function explodeAction()
    {
        $txt = "a,b,c,d,e";
        $arr = explode(",", $txt);
        return new Response($arr[0]);
    }

    public function concatAction()
    {
        $text1 = "Hello";
        $text2 = "World";
        $text3 = $text1 . " " . $text2;
        return new Response($text3);
    }
}