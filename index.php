<?php
    $next = "<br>";
    $nb = 42;
    $str = '42';
    $nbstr = "$nb";

    echo $nb;
    echo '<br>';
    echo $str;
    echo '<br>';
    echo $nbstr;
    echo '<br>';

    $nb_tab = [1, 2.0, 3.56, 8, 12, 69, 44.55];

    foreach($nb_tab as $one_nb){
        print_r($one_nb);
        echo "<br>";
    }

    $animal = [
        "species" => "lol",
        "name" => "charlie",
        "age" => 258
    ];

    print_r($animal["species"]);
    echo '<br>';
    print_r($animal["name"]);
    echo '<br>';
    print_r($animal["age"]);
    echo '<br>';

    $data = 42;
    $float = (float) $data;
    $str = (string) $float;

    $animals = ["Chat", "Chien", "Lapin", "Souris"];

    foreach($animals as $animal){
        echo $animal;
        echo '<br>';
    }

    $numbers = [28, 32, 44, -67, 18, 24, -98];

    foreach($numbers as $number){
        if($number < 0){
            echo $number;
            echo '<br>';
        }
    }

    $user = [
        "firstName" => "Barack",
        "lastName" => "Obama"
    ];

    echo "Je suis ".$user["firstName"]." ".$user["lastName"].", le 44ème président des USA.";
    echo '<br>';

    $users = [
        [
            "firstName" => "Mari",
            "lastName" => "Doucet"
        ],
        [
            "firstName" => "Hugues",
            "lastName" => "Froger"
        ]
    ];

    foreach($users as $user){
        echo $user["firstName"];
        echo $user["lastName"];
        echo '<br>';
    }

?>