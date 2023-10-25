<?php

class Dealer {
    public $hand = [];
    public $score = 0;

    public function drawCard($card) {
        $this->hand[] = $card;
        $this->score += $card->value;
    }

    public function showPartialHand() {
        echo "ディーラーの引いたカードは{$this->hand[0]->suit}の{$this->hand[0]->rank}です。\n";
        echo "ディーラーの引いた2枚目のカードはわかりません。\n";
    }
}