<?php

/**
 * Quote short summary.
 *
 * Quote description.
 *
 * @version 1.0
 * @author Michael
 */
class Quote
{
   public $author;
   public $text;
   public function __construct($author, $text){
        $this->author = $author;
        $this->text = $text;
   }
}


?>