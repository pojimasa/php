<?php
for ($i = 0; $i < 4; $i++){
  echo $i;
}

<?php
for ($i = 1; $i <= 5; $i++){
  echo $i * 2 . '<br />';
}

<?php
$i = 0;

while ($i < 3){
  echo 'i = ' . '<br />';
  $i += 1;
}

<?php
$count = 0;

while ($count < 20){
  $count += 1;
  echo $count . '<br />';
}

<?php
$i = 0;

while ($i < 10){
  if  ($i == 5){
    break;
    //$iが5の時、ループから抜ける。
  }
  echo $i;
  $i++;
} 

<?php
$i = 0;

while ($i < 10){
  if ($1 == 5){
    $1++;
    continue;
    //$iが5の時、$iに1を足す処理をし、スキップする。
    //5がなくなる。
  }
  echo $i;
  $i++;
}

<?php
$count = 0;

while ($count <= 100){
  if ($count == 20){
    break;
  }
  if ($count % 3 === 0){
    $count++;
    continue;
  }
  echo $count . '<br />';
  $count++;
}

<?php
$i = 0;
do{
  echo $i . '<br />';
  $i++; 
} while ($i < 5);

<?php
$num = 0;

do{
  echo $num . 'num =' .'<br />';
  $num += 1;
} while ($num < 3);

<?php
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++){
  if ($i % 15 == 0){
    echo $FizzBuzz;
  } else if ($i % 3 == 0){
  echo $Fizz;
  } else if ($i % 5 == 0) {
    echo $Buzz;
  } else {
    echo $i;
  }
}

<?php
for ($i = 1; $i < 6; $i++){
  for ($j = 1; $j < 6; $j++){
    echo "⚫︎"
  }
  echo "<br />"
}