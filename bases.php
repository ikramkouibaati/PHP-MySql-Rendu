<?php
    function formatage(string $phrase, string $balise):string {
        switch ($balise) {
            case 'b':
                $formatage = 'strong';
                break;
            case 'i':
                $formatage = 'em';
                break;
            case 's':
                $formatage = 'del';
                break;
            case 'u':
                $formatage = 'u';
                break;
            default:
                $formatage = '';
        }
        return "<{$formatage}>{$phrase}</{$formatage}>";
    }
    echo"<br>";
    
    echo  formatage('Formatage testing','b');

    //tableau associatif
    $myArray=[
        "key1"=>"value1",
        "key2"=>"value2",
    ];
    echo"<br>";
    echo "Le tableau contient ".count($myArray). " entrées";

    //Capitale des pays
    $countries=[
        "France"=>"Paris",
        "Japan"=>"Tokyo",
        "Australia"=>"Canberra",
        "Brazil"=>"Brasilia",

    ];
    echo "<br>";
    foreach ($countries as $country=>$capital){
        echo "<br>";
        echo " La capitale de $country est $capital ";
        
    }

    //Relevé de température
    $temperatures=[12, 15, 10, 10, 11, 15, 13, 17, 18, 23, 21, 21, 18, 19, 25, 26, 22, 18, 19, 20, 20, 17, 15, 12, 11, 13, 10, 13, 10, 8];

    echo "<br>";
    $temp_moyenne=array_sum($temperatures)/count($temperatures);
    echo "La température moyenne est: $temp_moyenne ";

    echo "<br>";

    sort($temperatures);
    $unique_temps=array_unique($temperatures);
    echo "Les cinques températures les plus froides:";
    for ($i=0;$i<count($unique_temps);$i++){
         echo "$unique_temps[$i] ";

    }
    


    
?>