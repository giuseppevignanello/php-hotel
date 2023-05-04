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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <title>Hotels</title>
</head>

<body>
    <div class="forms d-flex">
        <form method="get" class="w-50 m-auto">
            <div class="mb-5">
                <label for="parking" class="form-label">Parking</label>
                <select class="form-select form-select-lg" name="parking" id="parking">
                    <option selected>Select one</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
                <button type="submit" class="btn btn-primary">OK</button>
            </div>
        </form>
        <form method="get" class="w-50 m-auto">
            <div class="mb-5">
                <label for="Vote" class="form-label">Vote</label>
                <select class="form-select form-select-lg" name="Vote" id="Vote">
                    <option selected>Select one</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <button type="submit" class="btn btn-primary">OK</button>
            </div>
        </form>
    </div>



    <table class="table mt-5">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">
                    Name
                </th>
                <th scope="col">
                    Description
                </th>
                <th scope="col">
                    Parking
                </th>
                <th scope="col">
                    Vote
                </th>
                <th scope="col">
                    Distance to Center
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                foreach ($hotels as $hotel) {
                    ?>
                    <th scope="row">

                    </th>

                    <td>
                        <?= $hotel["name"] ?>
                    </td>
                    <td>
                        <?= $hotel["description"] ?>
                    </td>
                    <td>
                        <?php if ($hotel["parking"] === true) { ?>
                            ✅
                        <?php } else { ?>
                            ❌
                            <?php
                        } ?>
                    </td>
                    <td>
                        <?= $hotel["vote"] ?>
                    </td>
                    <td>
                        <?= $hotel["distance_to_center"] ?>
                    </td>
                </tr>
            </tbody>
        <?php }
                ?>
    </table>

    <!-- hotels table -->
</body>

</html>