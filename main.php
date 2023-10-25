<?php

require 'Card.php';
require 'Deck.php';
require 'Player.php';
require 'Dealer.php';

$deck = new Deck();
$deck->shuffle();

$player = new Player();
$dealer = new Dealer();

echo "ブラックジャックを開始します。\n";

// カードを2枚ずつ引く
$player->drawCard($deck->drawCard());
$player->drawCard($deck->drawCard());
$dealer->drawCard($deck->drawCard());
$dealer->drawCard($deck->drawCard());

$player->firstHand();
$dealer->firstHand();


while ($player->score < 21) {
    print "あなたの現在の得点は{$player->score}です。";
    $choice = readline("カードを引きますか？（Y/N）: ");
    
    if (strtolower($choice) === "y") {
        $card = $deck->drawCard();
        $player->drawCard($card);
        echo "あなたの引いたカードは{$card->suit}の{$card->rank}です。\n";
    } else {
        break;
    }
}

if ($player->score <= 21) {
  while ($dealer->score < 17) {
      $card = $deck->drawCard();
      $dealer->drawCard($card);
  }
}

echo "ディーラーの引いた2枚目のカードは{$dealer->hand[1]->suit}の{$dealer->hand[1]->rank}でした。\n";
echo "ディーラーの現在の得点は{$dealer->score}です。\n";


echo "あなたの現在の得点は{$player->score}です。\n";
echo "ディーラーの現在の得点は{$dealer->score}です。\n";


if ($player->score > 21 || ($dealer->score <= 21 && $dealer->score > $player->score)) {
    echo "ディーラーの勝ちです！\n";
} elseif ($dealer->score > 21 || ($player->score <= 21 && $player->score > $dealer->score)) {
    echo "あなたの勝ちです！\n";
} else {
    echo "引き分けです。\n";
}

echo "ブラックジャックを終了します。\n";