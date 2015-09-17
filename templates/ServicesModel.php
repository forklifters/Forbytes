<?php
    require('Interfaces.php');
    class ServicesModel 
    {
         public $general;
         public $whatWeDo;
         public $howWeWork;
         public $technologiesWeUse;
         public $letsWorkTogether;

         public function __construct()
         {
            $this->general = new General(); 
            $this->whatWeDo = new WhatWeDo(); 
            $this->howWeWork = new HowWeWork(); 
            $this->technologiesWeUse = new TechnologiesWeUse(); 
            $this->letsWorkTogether = new LetsWorkTogether(); 
         }   
    }

    class General extends Section{
        public $title;
        public $description;
        public $buttonText;

        public function __construct()
        {
           $this->title = $this->getFieldValue('general_title'); 
           $this->description = $this->getFieldValue('general_description'); 
           $this->buttonText = $this->getFieldValue('general_button_text'); 
        }   

        protected function GetEnabledFieldID(){
            return 'enable_general_section';
        }
    }

    class WhatWeDo extends Section{
        public $title;
        public $articles;

        public function __construct()
        {
           $this->title = parent::getFieldValue('what_we_do_title'); 
           for ($i = 1; $i <= 5; $i++) {
                $keyTitle = 'block_'.$i.'_title';
                $keyDescription = 'block_'.$i.'_description';
                $blockTitle = $this->getFieldValue($keyTitle);
                $blockDescription = $this->getFieldValue($keyDescription); 
                $this->articles[$blockTitle] = $blockDescription;
           }
        }  
        
        protected function GetEnabledFieldID(){
            return 'enable_what_we_do_section';
        }
    }

    class HowWeWork extends Section{
        public $title;
        public $dedicatedTeamTitle;
        public $dedicatedTeamDescription;
        public $customDevelopmentTeamTitle;
        public $customDevelopmentTeamDescription;

        public function __construct()
        {
           $this->title = $this->getFieldValue('how_we_work_title'); 
           $this->dedicatedTeamTitle = $this->getFieldValue('dedicated_team_title'); 
           $this->dedicatedTeamDescription = $this->getFieldValue('dedicated_team_description'); 
           $this->customDevelopmentTeamTitle = $this->getFieldValue('custom_development_title'); 
           $this->customDevelopmentTeamDescription = $this->getFieldValue('custom_development_description'); 
        }  

        protected function GetEnabledFieldID(){
            return 'enable_how_we_work_section';
        }
    }

    class TechnologiesWeUse extends Section{
        public $title;
        public $netTitle;
        public $netTechnologies;
        public $phpTitle;
        public $phpTechnologies;
        public $frontEndTitle;
        public $frontEndTechnologies;
        public $dataStorageTitle;
        public $dataStorageTechnologies;

        public function __construct()
        {
           $this->title = $this->getFieldValue('technologies_we_use_title'); 
           $this->netTitle = $this->getFieldValue('net_title'); 
           $this->netTechnologies = $this->getFieldValue('net_technologies'); 
           $this->phpTitle = $this->getFieldValue('php_title'); 
           $this->phpTechnologies = $this->getFieldValue('php_technologies'); 
           $this->frontEndTitle = $this->getFieldValue('front_end_title'); 
           $this->frontEndTechnologies = $this->getFieldValue('front_end_technologies'); 
           $this->dataStorageTitle = $this->getFieldValue('data_storages_title'); 
           $this->dataStorageTechnologies = $this->getFieldValue('data_storages_technologies'); 
        }  

        protected function GetEnabledFieldID(){
            return 'enable_technologies_we_use_section';
        }
    }

    class LetsWorkTogether extends Section{
        public $title;
        public $description;
        public $buttonText;
        public $errorText;
        public $successText;

        public function __construct()
        {
           $this->title = $this->getFieldValue('lets_work_together_title'); 
           $this->description = $this->getFieldValue('lets_work_together_description'); 
           $this->buttonText = $this->getFieldValue('lets_work_together_button_text'); 
           $this->errorText = $this->getFieldValue('lets_work_together_error'); 
           $this->successText = $this->getFieldValue('lets_work_together_success'); 
        }  

        protected function GetEnabledFieldID(){
            return 'enable_lets_work_together_section';
        }
    }
?>