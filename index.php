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

   <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <?php
            //Stampa ogni chiave del primo elemento nell'array hotels
            foreach ($hotels[0] as $key => $value) {               
                echo "<th scope='col'>" . $key . "</th>";
            };
        ?>  
      </tr>
    </thead>
    <tbody>
    <?php
                // Per ogni hotel nella lista
                foreach ($hotels as $k => $hotel) {
                    // Crea una riga della colonna
                    echo "<tr>";
                    // Ed aumenta il valore ciclato 'k' di 1
                    echo "<th scope='row'>" . $k . "</th>";
                    // Per ogni hotel nella lista
                    foreach ($hotel as $key => $value) {
                        // Se alla chiave parking è assegnato valore true
                        if ($key == 'parking' && $value == true) {
                            // Sostituisco quel valore con una spunta
                            $value = '&#x2713;';
                        }
                        // Se alla chiave parking è assegnato valore false
                        else if ($key == 'parking' && $value == false){
                            // Sostituisco quel valore con una X
                            $value = '&#10005;';
                        }
                        echo "<td>" . $value . "</td>";
                    }
                    echo "</tr>";
                }
            ?>
    </tbody>
  </table> 

    


</body>
</html>


