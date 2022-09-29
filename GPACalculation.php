<?php

$marks=33;

if($marks>=80 && $marks<=100){
    echo "A+";
}
else if($marks>=70 && $marks<80){
    echo "A";
}
else if($marks>=60 && $marks<70){
    echo "A-";
}
else if($marks>=50 && $marks<60){
    echo "B";
}
else if ($marks>=40 && $marks<50){
    echo "C";
}
else if($marks>=33 && $marks<40){
    echo "D";
}

else if($marks>=0 && $marks<=32){
    echo "Fail";
}

else{
    echo "Invalid";
}
?>
