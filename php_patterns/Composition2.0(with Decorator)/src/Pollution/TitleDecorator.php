<?php

namespace App\Pollution;

abstract class TitleDecorator extends Title
{
    protected Title $title;
    public function __construct(Title $title){
        $this->title = $title;
    }
}