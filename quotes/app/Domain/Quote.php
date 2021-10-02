<?php

namespace app\Domain;

class Quote {
    public $author, $quote;
    
    public function __construct($author, $quote) {
        $this->author = $author;
        $this->quote = $quote;
    }

    public function __toString() {
        return "$this->author - \"$this->quote\"";
    }
    
}