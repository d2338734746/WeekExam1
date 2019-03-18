<?php 
//累加求和
//1.使用函数
function sum($sum){
 return  $sum =array_sum(range(1,$sum));
}
//echo sum(100);

//2.首尾相加
function sum1($sum){
return $sum=($sum+1)*($sum/2);

}
//echo sum1(100);

//3.循环累加
function sum2($n){
	$sum=0;
for ($i=1; $i <=$n ; $i++) { 
	 $sum+=$i;
}
return $sum;
}
//echo sum2(100);


//n的阶乘
//非递归
function jc($n){
	$sum=1;
for ($i=1; $i <=$n ; $i++) { 
	 $sum*=$i;
}
return $sum;
}
//echo jc(6);

//递归
function jc1($n){
 if ($n==1) {
 	return 1;
 }else{
  $sum*=jc1($n);
 }
}

echo jc(6);

//判断一个字符串是否是回文字符串
function hui($str){
	$string=strrev($str);
	if ($str==$string) {
		echo "是回文字符串";

	}else{
		echo "不是回文字符串";
	}
	return $string;

}
echo hui('abba');
 ?>


