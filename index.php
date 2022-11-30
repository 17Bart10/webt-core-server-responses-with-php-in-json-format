<?php

require("ost_seeder.php");


// echo "User Story 3\n";
// $ostID2 = new OST_Seeder();
// $ostID2->generateOST()->getID();
// echo json_encode($ostID2->);

// echo "User Story 4\n";
// $seeder = new OST_Seeder();
// echo json_encode($seeder->generateOST());

$seeder2 = new OST_Seeder();

if (isset($_GET["id"])) { // Wenn ein GET-Parameter (URL-Parameter) an das Script angefügt wurde ...
    echo json_encode($seeder2->getOstByID($_GET["id"])); // ... rufe die Funktion mit einem Argument auf.
} else { // Wenn nicht ...
    echo json_encode($seeder2->getOstByID()); // .. rufe die Funktion ohne Argumente auf.
}


// foreach ($seeder2 as $OST){
//     echo $OST->getID();
//     if ($OST->getId() == 1){
//         echo json_encode($OST);
//     }
// }


// echo "Hallo";
