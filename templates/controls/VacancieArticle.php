<?php

/**
 * VacancieArticle short summary.
 *
 * VacancieArticle description.
 *
 * @version 1.0
 * @author Michael
 */
class VacancieArticle
{
    public $title;
    public $description;

     public function __construct($title, $description){
        $this->title = $title;
        $this->description = $description;
   } 
}
