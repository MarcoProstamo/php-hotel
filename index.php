<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>PHP Hotel</title>
</head>
<body>
    <section class="my-3">
        <h1 class="text-center mb-3">Filters</h1>
        <form action="" method="GET" class="d-flex gap-3 p-3 justify-content-center">
            <div class="d-flex gap-2">
                <label class="form-label" for="vote">Vote</label>
                <input class="form-control" type="number" name="vote" id="vote" min="1" max="5">
            </div>
            <div>
                <label class="form-check-label" for="parking">Parking</label>
                <input class="form-check-input" type="checkbox" name="parking" id="parking">
            </div>
            <div>
                <button class="btn btn-light" type="submit">Filter</button>
            </div>
        </form>
        <hr>
    </section>

    <section class="container my-3">
        <h1 class="text-center mb-3">Hotels</h1>
        <div class="row gap-3">
            <?php
                foreach ($hotels as $hotel){
                    echo "<div class='col d-flex justify-content-center'>";
                    echo "<div class='card' style='min-width: 18rem;'>";
                    foreach ($hotel as $key => $value){
                        echo "<div class='card-body'> <h5 class='card-title'>$value</h5> </div>";
                    };
                    echo "</div>";
                    echo "</div>";
                }
            ?>
        </div>
    </section>
    
</body>
</html>