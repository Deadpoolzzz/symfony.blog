<?php


namespace Blogger\BlogBundle\Controller;


use Blogger\BlogBundle\Model\Documentable;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HtmlController extends Controller implements Documentable
{
    protected $url;


    public function getid()
    {
        return $this->url;
    }

    public function getContent()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 3);
        $html = curl_exec($ch); curl_close($ch);

        return $html;

    }

    public function showContentAction(Request $request)
    {
        $this->url = "google.com";
        $this->getContent();
        die();
    }

}