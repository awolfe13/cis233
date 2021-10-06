<?php 

namespace App\Domain;

class Musician{
    public $firstName, $lastName, $instrument, $website;
    
    public function __construct($firstName, $lastName, $instrument, $website) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->instrument = $instrument;
        $this->website = $website;
    }

    public function __toString() {
        return "$this->firstName $this->lastName - \"$this->instrument\" - \"$this->website\"";
    }
}