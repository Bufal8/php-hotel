<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Hotel</title>
</head>
<body>
    <form class="container">
    <label for="parking">Parcheggio</label>
    <input type="checkbox" name="parking">

    <div class="voto">
    <label for="vote">Vote</label>
        <select class="form-select" size="3" aria-label="size 3 select example">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="2">4</option>
            <option value="3">5</option>
        </select>
    </div>
    <input type="submit" value="Submit!">

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
    
   <table class="table table-dark my-5">
       <thead>
           <tr>
            <?php
                //Stampa ogni chiave del primo elemento nell'array hotels
                foreach ($hotels[0] as $key => $value) {               
                    echo "<th scope='col'>" . $key . "</th>";
                };
                echo "</tr></thead>";
                echo "<tbody>";
    foreach ($hotels as $hotel) {
    
        if ($_GET == [] || $_GET["parking"] == "" ){//&& $GET["vote"] == "") {
                echo "<tr>";
                foreach ($hotel as $key => $value){
                    // $voto_scelto = isset($GET['vote'])
                    // if($hotel["vote"] >= $voto_scelto)
                    echo "<td>" . $value . "</td>";
                };
                echo "</tr>";
        } else{
            $parcheggio_si = isset($_GET['parking']);
            if($hotel["parking"] == $parcheggio_si){
                echo "<tr>";

                foreach ($hotel as $key => $value) {
                    echo "<td>" . $value . "</td>";
                };
                echo "</tr>";
            };
        };

    };
    echo "</tbody></table>";
    ?>

  </form>  


</body>
</html>


