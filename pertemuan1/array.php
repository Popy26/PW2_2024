<?php

//
// Associative Array
// Multidimensional Array

//     $fruits = ["Mangga", "Delima", "Kiwi"];

//     foreach ($fruits as $fruit) {
//         echo $fruit;
//         echo "<br>";
//     }

    // $dinos = [
    //     "dinoName" => "Tricera",
    //     "dinoAge" => 300,
    //     "isMarried" => "false"
    // ];

    // foreach($dinos as $dino) {
    //     echo $dino;
    //     echo "<br>";
    // }

    $dinos = [
        [
            "dinoName" => "Tricera",
            "dinoAge" => 300
        ],

        [
            "dinoName" => "Tricera",
            "dinoAge" => 500
        ],

        [
            "dinoName" => "Tricera",
            "dinoAge" => 250
        ],
    ];

    foreach ($dinos as $dino) {
        echo $dino["dinoName"] . " - " .$dino["dinoAge"] . " Tahun";
        echo '<br>';
}

//?>
