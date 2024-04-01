<?php
$my_name = htmlspecialchars($_POST['my_name'],END_QUOTES);
$choices = htmlspecialchars($_POST['choices'],END_QUOTES);
$number = htmlspecialchars($_POST['number'],END_QUOTES);

print "私の名前は、" . $my_name . "<br />";
print "ご希望の商品は、" . $choices . "<br />";
print "注文数は、" . $number;
