<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere',
            'parking' => 'Parking',
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro',
            'parking' => 'Parking',
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare',
            'parking' => 'No parking',
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista',
            'parking' => 'No parking',
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano',
            'parking' => 'Parking',
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Found your Hotel</title>
</head>
<body>
    <h1 class="text-center py-3">Find your Hotel</h1>

    <section class="mt-3 container">
        <div class="flex row">
            <div class="card w-25">
                <?php
                    foreach($hotels as $hotel) {
                        echo "<h2>". $hotel["name"] . "</h2>";
                        echo "<p>". $hotel["description"] . " Ha il parcheggio?  "  . $hotel["parking"] . " " . "</p>";
                        echo "<p>". "Stelle Hotel: " . $hotel["vote"] . "</p>";
                        echo  "<p>". " Distanza dal centro: " . $hotel['distance_to_center'] . "</p>";
                    }
                ?>
            </div>
        </div>
    </section>
</body>
</html>