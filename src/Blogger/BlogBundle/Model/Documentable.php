<?php

namespace Blogger\BlogBundle\Model;

interface Documentable
{
    public function getid();

    public function getContent();
}