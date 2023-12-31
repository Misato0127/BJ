# BLACKJACK

ブラックジャックをオブジェクト指向で実装するために、PHPでクラスごとにファイルを分けて実装します。


## カードクラス (card.php)

カードオブジェクトの属性と振る舞いを表現するクラスを作成します。
カードの数字やスート（ハート、ダイヤ、スペード、クラブ）をプロパティとして持つことが考えられます。
カードのポイントを計算するメソッドを提供します。


## デッキクラス (deck.php)

カードのデッキを管理するクラスを作成します。
シャッフル、カードの配布、カードの引き当てなどの操作を提供します。


## プレイヤークラス (player.php)

プレイヤーオブジェクトを表現するクラスを作成します。
手札を管理するプロパティを持ち、手札の合計ポイントを計算するメソッドを提供します。
カードを引いたり、手札にカードを加えたりするメソッドを提供します。


## ディーラークラス (dealer.php)

ディーラーオブジェクトを表現するクラスを作成します。
ディーラーの振る舞いに関連するメソッドを提供します。
カードを引いたり、手札にカードを加えたりするメソッドを提供します。ディーラーの行動ルール（17を超えるまでカードを引く）もここで実装します。


## ゲームクラス (main.php)

ゲーム全体を管理するクラスを作成します。
ゲームの進行、プレイヤーとディーラーのターン、結果の判定などを処理します。
各クラスはファイルに分割し、必要なクラスをインクルードまたはオートロードすることで連携させます。
