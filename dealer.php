<?php

class Dealer {
    public $hand = [];
    public $score = 0;

    public function drawCard($card) {
        $this->hand[] = $card;
        $this->score += $card->value;
    }

    public function showHand() {
      foreach ($this->hand as $card) {
          echo "ディーラーの引いたカードは{$card->suit}の{$card->rank}です。\n";
      }
      echo "ディーラーの現在の得点は{$this->score}です。\n";
  }
}