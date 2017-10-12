/*
Tugas Sorting array
Ma'ruf Harsono
*/

<?php
function urut($numbers){

  sort($numbers);

  $arrlength = count($numbers);
  for($x = 0; $x < $arrlength; $x++) {
      echo $numbers[$x];
      echo "\t";
    }
    echo "\n";
}

function genap($numbers){
  sort($numbers);

  $arrlength = count($numbers);
  for($x = 0; $x < $arrlength; $x++) {
    if ($numbers[$x] % 2 == 0){
      if($numbers[$x] >= 0){
        echo $numbers[$x];
        echo "\t";
        }
      }
    }
    echo "\n";
}

function ganjil($numbers){
  sort($numbers);

  $arrlength = count($numbers);
  for($x = 0; $x < $arrlength; $x++) {
    if ($numbers[$x] % 2 == 1){
      echo $numbers[$x];
      echo "\t";
      }
    }
}

$number = array(-4, 8, 4, 2, 5, 3, 7, 8, -3, -1, 0, 10, 9, 14, 21);
$numbers = array_unique($number);

echo "Sorting array"."\t" .":";
urut ($numbers);
echo "Angka Genap"."\t" .":";
genap($numbers);
echo "Angka Ganjil"."\t" .":";
ganjil($numbers);
