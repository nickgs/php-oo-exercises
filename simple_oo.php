<?php

/** 
 * Our first look at Object Oriented PHP code.
 **/
 
 
 
    /**
    * Our first Class definition
    */
    class House {
      // A property decribing the number of rooms in this house.
      public $num_rooms;
  
      // A method which returns the number of rooms in this house.
      public function getNumRooms(){
        return $this->num_rooms;
      }
    }

    $myHouse = new House();
    $myHouse->num_rooms = 2;
    echo $myHouse->getNumRooms();