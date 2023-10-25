<?php

class Card {
    public $suit;
    public $rank;
    public $value;

    public function __construct($suit, $rank, $value) {
        $this->suit = $suit;
        $this->rank = $rank;
        $this->value = $value;
    }
}