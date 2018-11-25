<?php
namespace Prose\Test;

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
