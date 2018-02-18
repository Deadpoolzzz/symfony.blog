<?php

namespace Blogger\BlogBundle\Controller;

use Blogger\BlogBundle\Model\Documentable;

class DocumentStore
{
    protected $data = [];

    public function addDocument (Documentable $document)
    {
        $key = $document->getid();
        $value = $document->getContent();
        $this->data[$key] = $value;
    }

    public function getDocuments()
    {
        return $this->data;
    }
}