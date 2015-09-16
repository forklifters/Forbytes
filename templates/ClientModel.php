<?php 
require('interfaces.php');
class ClientModel 
{
     public $general;
     public $technologies;
     public $testimonial;

     public function __construct()
     {
        $this->general = new General(); 
        $this->technologies = new Technologies(); 
        $this->testimonial = new Testimonial(); 
     }   
}

class General extends Section{
    public $companyFullDescription;
    public $companyShortDescription;
    public $projectDescription;

    public function __construct()
    {
       $this->companyFullDescription = parent::getFieldValue('company_full_description'); 
       $this->companyShortDescription = parent::getFieldValue('company_short_description'); 
       $this->projectDescription = parent::getFieldValue('project_description'); 
    }   

    protected function GetEnabledFieldID(){
        return 'enable_general_section';
    }
}

class Technologies extends Section{
   
    public $backendTechnologies;
    public $frontEndTechnologies;

    public function __construct()
    {
       $this->backendTechnologies = parent::getFieldValue('backend_technologies'); 
       $this->frontEndTechnologies = parent::getFieldValue('frontend_technologies'); 
    }   

    private function buildTechnologiesList($technologiesValue)
    {
        $techs_array = explode("\r\n", $technologiesValue);
        $result = "<ul>";          
        
        foreach ($techs_array as $item)
        {
            $result .= "<li>$item</li>";
        }
        $result .= "</ul>";

        return $result;
    }

    public function buildBackendTecnologiesList(){
       return $this->buildTechnologiesList($this->backendTechnologies);
    }

    public function buildFrontendTecnologiesList(){
       return $this->buildTechnologiesList($this->frontEndTechnologies);
    }

    protected function GetEnabledFieldID(){
        return 'enable_technologies_section';
    }
}

class Testimonial extends Section{
    public $text;
    public $author;

    public function __construct()
    {
       $this->text = parent::getFieldValue('testimonial_text'); 
       $this->author = parent::getFieldValue('testimonial_author'); 
    }   

    protected function GetEnabledFieldID(){
        return 'enable_testimonial_section';
    }
}
?>