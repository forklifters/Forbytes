<?php

/**
 * Interfaces short summary.
 *
 * Interfaces description.
 *
 * @version 1.0
 * @author Michael
 */
interface iSection{
    public function Enabled();
}

abstract class Section implements iSection{
    protected function getFieldValue($fieldID){
        return get_field_object($fieldID, $page->ID)['value'];
    }

    protected function getFieldValueByPage($fieldID, $pageID){
        return get_field_object($fieldID, $pageID)['value'];
    }

    protected abstract function GetEnabledFieldID();

    public function Enabled(){
        return $this->getFieldValue($this->GetEnabledFieldID());
    }
}

?>