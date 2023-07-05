<?php 
    include __DIR__  ."/template/hotels.php";
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
                        <tbody>
                            <!-- CICLE FOR-EACH -->
                            <?php foreach($hotels as $hotel){ ?>
                                    <tr class="text-center">
                                        <td><?php echo $hotel['name'] ?></td>
                                        <td><?php echo $hotel['description'] ?></td>
                                        <td><?php echo $hotel['parking'] === true ? 'Si' : 'No'; ?></td>
                                        <td><?php echo $hotel['vote'] ?></td>
                                        <td><?php echo $hotel['distance_to_center'] ?></td>
                                    </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>