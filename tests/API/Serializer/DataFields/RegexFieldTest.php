<?php
namespace LeadFerret\Lib\API\Serializers\DataFields;


/**
 *
 * @author solvire <stevenjscott@gmail.com>
 * @package DataFields
 * @group DataFields
 * @namespace LeadFerret\Lib\API\Serializers\DataFields
 */
class RegexFieldTest extends \GenericTestCase
{
    
    /**
     * @expectedException \RuntimeException
     */
    public function testRegexFieldNotWorking()
    {
        $rx = new RegexField();
        $rx->setData('test');
    }

     /**
      * @expectedException \RuntimeException
      * 
      */
    public function testRegexFieldGetDataNotWorking()
    {
        $rx = new RegexField();
        $rx->getData();
    }
    
}