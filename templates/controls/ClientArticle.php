<?php

/**
 * ClientArticle short summary.
 *
 * ClientArticle description.
 *
 * @version 1.0
 * @author Michael
 */
class ClientArticle
{
    public $name;
    public $shortDescription;
    public $pageUrl;
    public $showReadMore;

     public function __construct($title, $shortDescription, $pageUrl, $showReadMore){
        $this->name = $title;
        $this->shortDescription = $shortDescription;
        $this->pageUrl = $pageUrl;
        $this->showReadMore = $showReadMore;
   } 
}
