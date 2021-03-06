<?php
namespace LeadFerret\Lib\API\Serializers\DataFields;


/**
 *
 * @author solvire <stevenjscott@gmail.com>
 * @package DataFields
 * @group DataFields
 * @namespace LeadFerret\Lib\API\Serializers\DataFields
 */
class ListFieldTest extends \GenericTestCase
{
    /**
     * @expectedException \RuntimeException
     */
    public function testCanSetListData()
    {
        $l1 = ['1','2','3'];
        $l2 = '1,2,3';
        
        $list = new ListField();
        $list->setData($l1);
        $this->assertTrue(is_array($list->getData()));
        $this->assertCount(3,$list->getData());
        
        $list->setData($l2);
        $this->assertTrue(is_array($list->getData()));
        $this->assertCount(3,$list->getData());
        
        $list->setDelimiter($delimiter = '|');
        $this->assertEquals($list->getDelimiter(), '|');
        
        $list->setData(new \stdClass());
    }
    
}
