<?php

$a=10;
$b =10;
$c = "10"; //Equal Assignment Operator

echo $a+$b; //Addition
echo '<br/>';
echo $a-$b; //Subtraction
echo '<br/>';
echo $a*$b; //Multiplication
echo '<br/>';
echo $a/$b; //Division
echo '<br/>';
echo $a%$b; //Modulus
echo '<br/>';
echo $a**$b; //Exponential -- Power
echo '<br/>';
// echo $c+=10; //Addition Assignment Operators
echo '<br/>';
// echo $c-=10; //Subtraction Assignment Operators
echo '<br/>';
// echo $c*=10; //Multiplication Assignment Operators
echo '<br/>';
// echo $c/=10; //Division Assignment Operators
echo '<br/>';
// echo $a%=3; //Modulus Assignment Operators
echo '<br/>';

if($a==$b){ //Equal Equal
    echo "A & B Equal";
}
else{
    echo "Not Equal";
}

echo '<br/>';

if($a===$c){ //Identical
    echo "A & B Equal";
}
else{
    echo "Not Equal";
}
echo '<br/>';

if($a!=$b){ //Equal Equal
    echo "Not Equal";
}
else{
     echo "A & B Equal";
}
echo '<br/>';

if($a>$b){ //Equal Equal
    echo "A Greater than B";
}
else{
     echo "B Greater than A";
}

echo '<br/>';

if($a<$b){ //Equal Equal
    echo "B Greater than A";
}
else{
     echo "A Greater than B";
}
echo '<br/>';

if($a<=$b){ //Equal Equal
    echo "B Greater or Equal than A";
}
else{
     echo "A Greater or Equal than B";
}
echo '<br/>';

if($a>=$b){ //Equal Equal
    echo "A Greater or Equal than B";
}
else{
     echo "B Greater or Equal than A";
}


?>