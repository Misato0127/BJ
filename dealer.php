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
      if ($this->score > 21) {
        echo "ディーラーの得点が21を超えました。\n";
    }    
  }

  public function firstHand() {
    // 最初のカードを取得
    $firstCard = $this->hand[0];
    
    // 最初のカードのスートとランクを表示
    echo "ディーラーの引いたカードは{$firstCard->suit}の{$firstCard->rank}です。\n";
    echo "ディーラーの引いた2枚目のカードはわかりません。\n";
}

public function secondHand() {
    
    // 最初のカードのスートとランクを表示
  echo "ディーラーの引いた2枚目のカードは{$this->hand[1]->suit}の{$this->hand[1]->rank}でした。\n";
    echo "ディーラーの現在の得点は{$this->score}です。\n";
}
}