<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Mykola Chomenko <mykola.chomenko@dipcom.cz>
 */
namespace DIPcms\TemplateExtension;


interface ITemplateFactory {
    
    /**
     * @param string $name
     * @param mixins $value
     */
    public function setDefaultTemplateValue($name, $value);
    
    /**
     * @return array
     */
    public function getDefaultsTemplateValues();
}
