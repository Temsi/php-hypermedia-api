<?php
namespace LeadFerret\Lib\API\Serializers\DataFields;


use LeadFerret\Lib\API\Exceptions\InvalidParameterException;

/**
 * 
 * @author solvire <stevenjscott@gmail.com>
 * @package DataFields
 * @namespace LeadFerret\Lib\API\Serializers\DataFields
 */
class CharField extends DataField
{
    
    protected $cast = 'string';
    
    public function setData($data)
    {
        if(!is_string($data))
            throw new InvalidParameterException('CharField data must be a string ' . $data);
        
        $this->data = $data;
        return $this;
    }
    
    /**
     * This is a char so it will always be just a string
     */
    public function getData()
    {
        return (string) $this->data;
    }
    
}