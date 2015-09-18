<?php
require('Interfaces.php');
require('controls/ClientArticle.php');

    class ClientsModel
    {
        public $ourClients;
        public $contactUs;

        public function __construct($contextPageID)
        {
            $this->ourClients = new OurClients($contextPageID); 
            $this->contactUs = new ContactUs(); 
        }   
    }

    class OurClients extends Section{
        public $title;
        public $clients;

        public function __construct($contextPageID)
        {
            $this->clients = array();
            $this->title = $this->getFieldValue('our_clients_title'); 
            foreach($this->GetCompaniesPages($contextPageID) as $companyPage){
                
                $clientArticle = new ClientArticle($companyPage->post_name, 
                                                   $this->getFieldValueByPage('company_short_description', $companyPage->ID),
                                                   get_page_link($companyPage->ID),
                                                   $this->getFieldValueByPage('read_more', $companyPage->ID));
                
                $this->clients[] = $clientArticle;
            }
        }  

        private function GetCompaniesPages($pageID){
             $args = array(
            	    'post_parent' =>  $pageID,
	                'post_type'   => 'page', 
	                'numberposts' => -1,
	                'post_status' => 'publish',
                    'orderby' => 'menu_order',
                    'order' => 'ASC'
            );
            return get_children($args, $output); 
        }
        
        protected function GetEnabledFieldID(){
            return 'our_clients_enabled';
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
           $this->buttonText = $this->getFieldValue('contact_us_button_text'); 
           $this->errorText = $this->getFieldValue('contact_us_error_text'); 
           $this->successText = $this->getFieldValue('contact_us_success_text'); 
        }  

        protected function GetEnabledFieldID(){
            return 'contact_us_enabled';
        }
    }

?>
