let num = Math.floor(Math.random() * 20);

//numを3または5で割ったらあまりが0になる＝3と5の倍数
if (num % 3 == 0 && num % 5 == 0) {
  console.log('3と5の倍数です');
}


//numを3で割ったらあまりが0になる＝3の倍数
else if (num % 3 == 0) {
  console.log('3の倍数です');
}

//numを5で割ったらあまりが0になる＝5の倍数
else if (num % 5 == 0) {
  console.log('5の倍数です');
}




//それ以外の場合の変数の値を出力する
else {
  console.log(num);
}
