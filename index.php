<?php

$string = "a (b c (d e (f) g) h) i (j k)";
$idx = 2;
$result = findIndexCloseParenthesis($string, $idx);
echo $result;

function findIndexCloseParenthesis($characters, $indexOpenPar){
  $charArr = str_split($characters);
  if($charArr[$indexOpenPar] != "(") {
    return "The given interger doesnt indicate the index position of an open pharenthesis";
  }
  $sumOpenPar = 0;
  for($i = $indexOpenPar+1; $i < count($charArr), $i++;){
    if ($charArr[$i] == "(") {
      $sumOpenPar += 1;
    } else if (($charArr[$i] === ")") && ($sumOpenPar > 0)) {
      $sumOpenPar -= 1;
    } else if (($charArr[$i] === ")") && ($sumOpenPar == 0)) {
      return $i;
    }
  }
}