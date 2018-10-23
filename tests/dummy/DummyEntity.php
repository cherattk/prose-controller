<?php
namespace Prose\Tests;

/**
 * @Entity 
 * @Table(name="test_table")
 **/

class DummyEntity{
    
    /** 
     * @Id 
     * @Column(type="integer")
     * @GeneratedValue 
     * 
     * */
    private $id = "";

    
    /**
     * @Column(type="string") 
     */
    private $label = "";
    
    /**
     * 
     * @var string
     */    
    public $table = 'test_table';
    
    public function setId($id) {
        $this->id = $id;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getLabel() {
        return $this->label;
    }

    public function setLabel($label) {
        $this->label = $label;
        return $this;
    }
}
