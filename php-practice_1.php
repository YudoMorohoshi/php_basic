<?php
// Q1 変数と文字列
$name = "安藤";
echo "私の名前は「" . $name . "」です。";

// Q2 四則演算
$num = 5 * 4; 
echo $num . "\n"; 
$num = $num / 2; 
echo $num; 

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
$now = date("Y年m月d日 H時i分s秒");  
echo "現在時刻は、" . $now . "です。";

// Q4 条件分岐-1 if文
$device = "mac";

if ($device == "windows" || $device == "mac") {
echo "使用OSは、{$device}です。";
} else {
echo "どちらでもありません。";
}


// Q5 条件分岐-2 三項演算子
$age = 1; 

$message = ($age < 18) ? "未成年です。" : "成人です。";

echo $message;


// Q6 配列
$kanto = ["東京都", "神奈川県", "栃木県", "千葉県", "群馬県", "埼玉県", "茨城県"];
echo $kanto[2] . "と" . $kanto[3]. "は関東地方の都道府県です。";

// Q7 連想配列-1
$kanto_capitals = [
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市"
];

foreach ($kanto_capitals as $capital) {
  echo $capital . "\n";
}

// Q8 連想配列-2
$kanto_capitals = [
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市"
];


if (array_key_exists("埼玉県", $kanto_capitals)) {
  echo "埼玉県" . "の県庁所在地は、" . $kanto_capitals["埼玉県"] . "です。";
}

// Q9 連想配列-3
$prefectures = array(
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市",
  "愛知県" => "名古屋市",  
  "大阪府" => "大阪市"     
);


$kanto = array("東京都", "神奈川県", "千葉県", "埼玉県", "栃木県", "群馬県", "茨城県");  

foreach ($prefectures as $prefecture => $capital) {
  if (in_array($prefecture, $kanto)) {
      echo $prefecture . "の県庁所在地は、" . $capital . "です。\n";
  } else {
      echo $prefecture . "は関東地方ではありません。\n";
  }
}


// Q10 関数-1
function hello($name) {
    return $name . "さん、こんにちは。\n";
}

echo hello("金谷");
echo hello("安藤");

// Q11 関数-2
function calcTaxInPrice($price) {
    
  $taxRate = 0.10;
  $taxInPrice = $price + ($price * $taxRate);
  return $taxInPrice;
}

$price = 1000;

$taxInPrice = calcTaxInPrice($price);

echo $price . "円の商品" . "の税込価格は" . $taxInPrice . "円です。";

// Q12 関数とif文

function distinguishNum($number) {
  if ($number % 2 == 0) {
      return $number . "は偶数です。\n";
  } else {
      return $number . "は奇数です。\n";
  }
}

echo distinguishNum(11); 
echo distinguishNum(24); 

// Q13 関数とswitch文
function evaluateGrade($grade) {
  switch ($grade) {
      case 'A':
      case 'B':
          return "合格です。";
      case 'C':
          return "合格ですが追加課題があります。";
      case 'D':
          return "不合格です。";
      default:
          return "判定不明です。講師に問い合わせてください。";
  }
}

echo evaluateGrade('A') . "\n"; 
echo evaluateGrade('Z') . "\n"; 

?>