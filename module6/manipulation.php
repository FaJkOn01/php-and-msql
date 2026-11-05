<?php 

$file = fopen('championsleague.txt', 'r');

$header = fgetcsv($file, 0);


echo implode("\t", $header) .  "\n";

while (($row = fgetcsv($file, 0, "\t")) == true){
    echo implode("\t", $row).  "\n";
}


fclose($file);



$my_file = fopen('championsleague.txt', 'a');

$added_text = 'Llapi vs Drenica 4-2';

fwrite($my_file, $added_text);


?>