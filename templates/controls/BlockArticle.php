<?php

/**
 * BlockArticle short summary.
 *
 * BlockArticle description.
 *
 * @version 1.0
 * @author Michael
 */
class BlockArticle
{
   public $title;
   public $description;
   public $iconClass;

   public function __construct($title, $description, $iconClass){
        $this->title = $title;
        $this->description = $description;
        $this->iconClass = $iconClass;
   } 
}

?>