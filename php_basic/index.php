<?php


$color = 'red';
echo "My ${color} car was stolen";
echo '<br>';

//''で文字を書いて、 .で変数を繋げる
echo 'My'  . $color .  'car was stole';

//配列
//タンス、複数のデータを入れることができる
$arr = ['banana','apple','grape'];

echo '<br>';
print_r($arr);

//途中で値を確認するときのテンプレ
echo '<pre>'; //綺麗に表示
var_dump($arr);//データを確認
//die;//処理を終了させる　existでもok

//PHPは配列も連想配列もシステム的には同じ

//制御構文

//条件分岐
//if文
//1　変数$i = 100; を用意し、100から1まで1つずつカウントダウンするプログラムを
//作成してください。 （1つずつ改行して表示して下さい）
for($i = 1;$i >= 100; $i--) {
    echo $i;
    echo '<br>';
}

//正の整数1から9に、それぞれ3を掛けた数を半角スペース区切りで出力して下さい。
for($i = 1;$i < 9; $i++){
    echo $i * 3 . ' ';
}
//1から100までの数をプリントするプログラムを書きなさい。
// ただし3の倍数のときは数の代わりに｢Fizz｣と、5の倍数のときは｢Buzz｣とプリントし、
// 3と5両方の倍数の場合には｢FizzBuzz｣とプリントすること。
echo '<br>';

for($i = 1;$i <= 100; $i++){
    if($i % 3 === 0 && $i % 5 === 0){
        echo 'FizuuBuzz';
    }elseif($i % 3===0){
        echo 'Fizz';
    } elseif ($i % 5=== 0){
        echo 'Buzz';   
    } else {
        echo $i;
    }
    echo '<br>';
}


//1〜100までの数字を表示させるプログラムを作りましょう。 ※出力のレイアウト
//は下記のように表示すること（数字を10個表示したタイミングで改行する）
for($i = 1; $i <= 100; $i++){
    echo $i.' ';
    if($i % 10 === 0){
        echo '<br>';
    }
}
//5

$alpha = ['E', 'A', 'D', 'B', 'A', 'C', 'A', 'B', 'E', 'E', 'A', 'A', 'C'];

$i = 0;

foreach($alpha as $v){
    if ($v === 'A'){
        $i++;
    }
}
echo $i;

echo '<br>';
//英語と数学で合格判定。英語と数学それぞれが60点以上かつ、合計点が140点以上の場合
//「合格！」それ以外は「残念！」と表示してください。

$english = 70;
$math = 70;
$total = $english + $math;

if ($english >= 60 && $math >= 60 && $total >= 140){
    echo ('合格！');
}else {
    echo ('残念');
}
echo '<br>';

//7
for($i = 1; $i <= 9; $i++){
    for($j = 1; $j<= 9; $j++){
        $res = $i * $j . ' ';
        echo $res;
    }
    echo '<br>';
}

//100以下の素数を表示するプログラムを書いてください。 素数とは、1とそ
//の数自身以外では割り切れない数です。 1は素数には含みません。 例: 7は1
//と7でしか割れないため素数です。

$primeNumbers = [];
for($i = 2; $i < 100; $i++) {
    for($j = 2; $j <= $i; $j++) {
        if($i % $j === 0 && $j < $i){
            break;
        }

        if ($i === $j) {
            $primeNumbers[] = $i;
        }
    }
}
print_r($primeNumbers);
