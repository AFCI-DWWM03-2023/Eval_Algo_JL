<?php

//je n'arrive pas a aligner les tableau les uns a cotes des autres.

$tab1 = ["
        Tableau 1
        Avion
        BOING747
        AIRBUSA380
        LEARJET45
        DC10 
        CONCORDE
        ANTONOV32"];
    for($i=0;$i<count($tab1);$i++){
        echo $tab1[$i] . "\n" ;
    }
$tab2 = ["
        Tableau 2 
        CodeAVION 
        BO
        AB 
        LJ 
        DC 
        CO
        AN "];
 for($i=0;$i<count($tab2);$i++){
        echo $tab2[$i] . "\n";
    }

$tab3 = ["
        Tableau 3
        VitesseCroisiere
        800 
        950 
        700 
        900 
        1400
        560 "];
    for($i=0;$i<count($tab3);$i++){
        echo $tab3[$i] . "\n";
    }

$tab4 = ["
        Tableau 4
        RayonAction 
        10000 
        12000 
        4500 
        8000 
        16000 
        2500"];
    for($i=0;$i<count($tab4);$i++){
        echo $tab4[$i] . "\n";
        
}

    

?>