<?php 

namespace App\Domain;

class Musician{
    public $first_name, $last_name, $instrument, $website;
    
    public function __construct($first_name, $last_name, $instrument, $website) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->instrument = $instrument;
        $this->website = $website;
    }

    public function __toString() {
        return "$this->first_name $this->last_name - \"$this->instrument\" - \"$this->website\"";
    }
}