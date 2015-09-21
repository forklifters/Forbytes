<?php
require('Interfaces.php');
require('controls/VacancieArticle.php');
/**
 * CareersModel short summary.
 *
 * CareersModel description.
 *
 * @version 1.0
 * @author Michael
 */
    class CareersModel
    {
         public $vacancies;
         public $contactUs;

         public function __construct($contextPageID)
         {
             $this->vacancies = new Vacancies($contextPageID); 
             $this->contactUs = new ContactUs(); 
         }   
    }

    class Vacancies extends Section{
        public $title;
        public $vacanciesList;

        public function __construct($contextPageID)
        {
            $this->vacanciesList = array();
            $this->title = $this->getFieldValue('vacancies_title'); 
            foreach($this->GetVacanciePages($contextPageID) as $vacanciePage){
                $vacancieArticle = new VacancieArticle($vacanciePage->post_title, 
                                                   $vacanciePage->post_content);
                
                $this->vacanciesList[] = $vacancieArticle;
            }
        }  

        private function GetVacanciePages($pageID){
             $args = array(
            	    'post_parent' =>  $pageID,
	                'post_type'   => 'page', 
	                'numberposts' => -1,
	                'post_status' => array('publish', 'private'),
                    'orderby' => 'menu_order',
                    'order' => 'ASC'
            );
            return get_children($args, $output); 
        }
        
        protected function GetEnabledFieldID(){
            return 'vacancies_enabled';
        }
    }

    class ContactUs extends Section{
        public $title;
        public $description;

        public function __construct()
        {
           $this->title = $this->getFieldValue('contact_us_title'); 
           $this->description = $this->getFieldValue('contact_us_description'); 
        }  

        protected function GetEnabledFieldID(){
            return 'contact_us_enabled';
        }
    }

?>