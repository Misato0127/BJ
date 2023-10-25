<?php

require 'Card.php';
require 'Deck.php';
require 'Player.php';
require 'Dealer.php';

$deck = new Deck();
$deck->shuffle();

$player = new Player();
$dealer = new Dealer();

// カードを2枚ずつ引く
$player->drawCard($deck->drawCard());
$player->drawCard($deck->drawCard());
$dealer->drawCard($deck->drawCard());
$dealer->drawCard($deck->drawCard());

echo "ブラックジャックを開始します。\n";

while ($player->score < 21) {
    $player->showHand();
    $choice = readline("カードを引きますか？（Y/N）: ");
    
    if (strtolower($choice) === "y") {
        $card = $deck->drawCard();
        $player->drawCard($card);
    } else {
        break;
    }
}

$dealer->showHand();

while ($dealer->score < 17) {
    $card = $deck->drawCard();
    $dealer->drawCard($card);
}

echo "ディーラーの引いた2枚目のカードは{$dealer->hand[1]->suit}の{$dealer->hand[1]->rank}でした。\n";

$player->showHand();
$dealer->showHand();

if ($player->score > 21 || ($dealer->score <= 21 && $dealer->score > $player->score)) {
    echo "ディーラーの勝ちです！\n";
} elseif ($dealer->score > 21 || ($player->score <= 21 && $player->score > $dealer->score)) {
    echo "あなたの勝ちです！\n";
} else {
    echo "引き分けです。\n";
}

echo "ブラックジャックを終了します。\n";