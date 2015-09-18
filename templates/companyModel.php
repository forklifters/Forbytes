<?php
   require('Interfaces.php');
    require('controls/Quote.php');
    require('controls/BlockArticle.php');
    class CompanyModel 
    {
         public $ourTeam;
         public $companyPrinciples;
         public $story;
         public $location;
         public $contactUs;

         public function __construct()
         {
            $this->ourTeam = new OurTeam(); 
            $this->companyPrinciples = new CompanyPrinciples(); 
            $this->story = new Story(); 
            $this->location = new Location(); 
            $this->contactUs = new ContactUs(); 
         }   
    }

    class OurTeam extends Section{
        protected function GetEnabledFieldID(){
            return 'our_team_enabled';
        }
    }

    class CompanyPrinciples extends Section{
        public $title;
        public $articles;
        public $quotes;

        public function __construct()
        {
           $this->title = $this->getFieldValue('company_principles_title'); 
           for ($i = 1; $i <= 3; $i++) {
                $keyTitle = 'cp_block_'.$i.'_title';
                $keyDescription = 'cp_block_'.$i.'_description';
                $keyIconClass = 'cp_block_'.$i.'_icon_class';
                $this->articles[$i] = new BlockArticle($this->getFieldValue($keyTitle), $this->getFieldValue($keyDescription), $this->getFieldValue($keyIconClass));
           }

           for ($i = 1; $i <= 2; $i++) {
                $keyAuthor = 'cp_quote_'.$i.'_author';
                $keyText = 'cp_quote_'.$i.'_text';
                
                $this->quotes[$i] = new Quote($this->getFieldValue($keyAuthor), $this->getFieldValue($keyText));
           }
        }  
        
        protected function GetEnabledFieldID(){
            return 'company_principles_enabled';
        }
    }

    class Story extends Section{
        public $title;
        public $description;

        public function __construct()
        {
           $this->title = $this->getFieldValue('story_title'); 
           $this->description = $this->getFieldValue('story_description'); 
        }   

        protected function GetEnabledFieldID(){
            return 'story_enabled';
        }
    }

     class Location  extends Section{
        public $title;
        public $headOfficeTitle;
        public $headOfficeDescription;

        public $developmentCenterTitle;
        public $developmentCenterDescription;

        public function __construct()
        {
           $this->title = $this->getFieldValue('location_title'); 
           $this->headOfficeTitle = $this->getFieldValue('head_office_title'); 
           $this->headOfficeDescription = $this->getFieldValue('head_office_description'); 
           $this->developmentCenterTitle = $this->getFieldValue('development_center_title'); 
           $this->developmentCenterDescription = $this->getFieldValue('development_center_description'); 
        }   

        protected function GetEnabledFieldID(){
            return 'location_enabled';
        }
    }

     class ContactUs extends Section{
        public $title;
        public $description;
        public $buttonText;
        public $errorText;
        public $successText;

        public function __construct()
        {
           $this->title = $this->getFieldValue('contact_us_title'); 
           $this->description = $this->getFieldValue('contact_us_description'); 
           $this->buttonText = $this->getFieldValue('button_text'); 
           $this->errorText = $this->getFieldValue('error_text'); 
           $this->successText = $this->getFieldValue('success_text'); 
        }  

        protected function GetEnabledFieldID(){
            return 'contact_us_enabled';
        }
    }
?>
