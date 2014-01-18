<?php

// This program uses inheritance to extend Box.
class Box {

    public $width;
    public $height;
    public $depth;

// construct 
    public function __construct($width = NULL, $height = NULL, $depth = NULL) {
        $this->width = $width;
        $this->height = $depth;
        $this->depth = $height;
    }

    public function volume() {
        return $this->width * $this->height * $this->depth;
    }

}

class BoxWeight extends Box {

    public $weight; // weight of box

    public function __construct($width = NULL, $height = NULL, $depth = NULL, $weight = NULL) {
        parent::__construct($width, $height, $depth);
    }

}

$bw = new BoxWeight(10, 20, 15, 34.3)
?>