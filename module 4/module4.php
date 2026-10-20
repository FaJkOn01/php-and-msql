<?php 

$emri = "Fajkon";

print_r($emri);
echo "<br>";
echo gettype($emri);


function displaytext() {
    echo "Hello World";
}

displaytext();





function shuma() {
    $value = 120 + 20;
    echo $value;
}

shuma();


function shuma2(){
    $value1 = 180 + 20;
    echo $value1;
}
shuma2();

function shuma3(){
    $numri1 = 100;
    $numri2 = 50;
    $shumafinale = $numri1 + $numri2;
    echo $shumafinale;
}


shuma3();
    


function zbritja(){
    $zbritja = 5000 - 2500;
    echo $zbritja;
}


zbritja();





function maximum($x , $y){
    if($x > $y){
        return $x;
    } else {
        return $y;
    }
}

$a = 20;
$b = 30;
$test = maximum($a, $b);
echo "The maximum of $a and $b is: $test";





function minimum($x , $y){
    if($x < $y){
        return $x;
    } else {
        return $y;
    }
}

$a = 30;
$b = 20;
$test = minimum($a, $b);
echo "The minimum of $a and $b is: $test";



function even_odd($numri){
    if($numri % 2 == 0){
        return "$numri eshte qift";
    }
    else{
        return "$numri eshte tek";
    }
}



$mosha = 50;
echo "<br>";
echo even_odd($mosha);
?>