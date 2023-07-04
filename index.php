<?php 
    // ARRAY HOTELS
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
    <meta charset="UTF 8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="content mt-3">
                    <h1 class="text-center"><strong>HOTELS</strong></h1>
                    <table class="table mt-3">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">NAME</th>
                                <th scope="col">DESCRIPTION</th>
                                <th scope="col">PARKING</th>
                                <th scope="col">VOTE</th>
                                <th scope="col">DISTANCE TO CENTER</th>
                            </tr>
                        </thead>
                            <!-- CICLE FOR-EACH -->
                            <?php foreach($hotels as $hotel){ ?>
                                <tbody>
                                    <tr class="text-center">
                                        <td><?php echo $hotel['name'] ?></td>
                                        <td><?php echo $hotel['description'] ?></td>
                                        <td><?php echo $hotel['parking'] ?></td>
                                        <td><?php echo $hotel['vote'] ?></td>
                                        <td><?php echo $hotel['distance_to_center'] ?></td>
                                    </tr>
                                </tbody>
                            <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>