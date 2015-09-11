<?php 
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

interface iSection{
    public function isAllDataSet();
    public function isSomeDataSet();
}


abstract class Section implements iSection{
    protected function getFieldValue($fieldID){
        return get_field_object($fieldID, $page->ID)['value'];
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

    public function isAllDataSet(){
        return $this->companyFullDescription != '' &&  $this->companyShortDescription != '' &&  $this->projectDescription;
    }

    public function isSomeDataSet(){
        return $this->companyFullDescription != '' ||  $this->companyShortDescription != '' ||  $this->projectDescription;
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
        
        //echo "<ul>";          
        //foreach ($techs_array as $item)
        //{
        //    echo "<li>$item</li>";
        //}
        //echo "</ul>";

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

    public function isAllDataSet(){
        return $this->backendTechnologies != '' &&  $this->frontEndTechnologies != '';
    }

    public function isSomeDataSet(){
        return $this->backendTechnologies != '' ||  $this->frontEndTechnologies != '';
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

    public function isAllDataSet(){
        return $this->text != '' &&  $this->author != '';
    }

    public function isSomeDataSet(){
        return $this->text != '' ||  $this->author != '';
    }
}
?>