<?php

namespace Core\Test;

/**
 * @Entity 
 * @Table(name="test_table")
 * */
class DummyEntity {

    /**
     * @Id 
     * @Column(type="integer")
     * @GeneratedValue 
     * 
     * */
    private $id = "";

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

}
