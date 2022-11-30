<?php
// Aufgabe 2


require("ost.php");

class OST_Seeder{

    private array $osts;

    function __construct(){
        $this->osts=array(
            new OST(001, "Nico", "How we started", "01.01.2022", [
                new Song("0", "Tommi - Live", "AnnenMayKantereit", "001", "04:49"),
                new Song("1", "Deine Mutter", "Kool Savas, Nessi", "002", "03:03"),
                new Song("2", "Auf Kurs nach Hause", "Prinz Pi", "003", "04:04"),
                new Song("3", "Feiert das", "Umse", "004", "02:57")
            ]),
            new OST(002, "Toni", "How it's going", "01.04.2022", [
                new Song("4", "Everyday", "Like This", "Dexter", "005", "02:14"),
                new Song("5", "Randale", "Architekt, Casper, Timi Hendrix", "006", "03:50"),
                new Song("6", "Take It Easy", "KYTES", "007", "03:11"),
                new Song("7", "Schau ned so zwider", "Norbert Schneider", "008", "04:19")
            ]),
            new OST(003, "Eyuep", "How it ends", "01.08.2022", [
                new Song("8", "Das ist alles von der Kunstfreiheit gedeckt", "Danger Dan", "009", "03:49"),
                new Song("9", "Irgendwas", "Yvonne Catterfeld, Bengio", "010", "03:34"),
                new Song("10", "Comment Allez-Vous?", "Leslie Clio", "011", "03:19"),
                new Song("11", "Mein kleines Hollywood", "Olson", "012", "04:42")
            ])
        );
    }

    public function generateOST():array{
        
        return array (
            new OST("001", "Nico", "How we started", "01.01.2022", [
                new Song("0", "Tommi - Live", "AnnenMayKantereit", "001", "04:49"),
                new Song("1", "Deine Mutter", "Kool Savas, Nessi", "002", "03:03"),
                new Song("2", "Auf Kurs nach Hause", "Prinz Pi", "003", "04:04"),
                new Song("3", "Feiert das", "Umse", "004", "02:57")
            ]),
            new OST("002", "Toni", "How it's going", "01.04.2022", [
                new Song("4", "Everyday", "Like This", "Dexter", "005", "02:14"),
                new Song("5", "Randale", "Architekt, Casper, Timi Hendrix", "006", "03:50"),
                new Song("6", "Take It Easy", "KYTES", "007", "03:11"),
                new Song("7", "Schau ned so zwider", "Norbert Schneider", "008", "04:19")
            ]),
            new OST("003", "Eyuep", "How it ends", "01.08.2022", [
                new Song("8", "Das ist alles von der Kunstfreiheit gedeckt", "Danger Dan", "009", "03:49"),
                new Song("9", "Irgendwas", "Yvonne Catterfeld, Bengio", "010", "03:34"),
                new Song("10", "Comment Allez-Vous?", "Leslie Clio", "011", "03:19"),
                new Song("11", "Mein kleines Hollywood", "Olson", "012", "04:42")
            ]),
            
        );
    }


    public function getOstByID(){
            $args = func_get_args();
            //print_r($args);

            if (count($args) > 0){
                
                foreach ($this->osts as $OST){
                    if ($OST->getId() == $args[0]){
                        return $OST;
                    }
                }
                return null;
    
            }else{
                return  $this->osts;
            }
    
    
        
    }
    
    // (string $id, string $name, string $videoGameName, string $releaseYear, array $trackList)
    
}