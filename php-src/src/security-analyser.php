<?php

function CheckForVulnerability(string $_line)
{


    return -1;
}


function IsLineAConstruct(string $_line): int
{
    $isConstruct = -1;
    $isConstruct = strpos($_line, "new", 0);
    if ($isConstruct === false) {
        $isConstruct = -1;
    }

    return $isConstruct;
}

function IsTheConstructABDD(string $_line): int
{

    $isBDD = -1;
    $bddDeclarationType = array("pdo", "mysqli");

    for ($i = 0; $i < count($bddDeclarationType); $i++) {

        $b_foundBDDDeclaration = strpos(strtolower($_line), $bddDeclarationType[$i], 0);

        if ($b_foundBDDDeclaration !== false) {
            $isBDD = $b_foundBDDDeclaration;
            break;
        }
        echo "<br>";
    }

    return $isBDD;
}


function CheckHardCodedInformation($_line){
    if (IsLineAConstruct($_line) >= 0 && IsTheConstructABDD($_line) >= 0){

    }
}