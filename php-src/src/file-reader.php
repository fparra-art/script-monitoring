<?php
include "./security-analyser.php";

$dir = "../raw-files/";
$fileArrayFromDir = scandir($dir, 1);

//remove ".." && "." reference from the array
$cleanFileArray = array_splice($fileArrayFromDir, 0, -2);

for ($i = 0; $i < count($cleanFileArray); $i++) {

    $currentFilePath = $dir . $cleanFileArray[$i];
    $handler = fopen($currentFilePath, "r");

    if ($handler === FALSE) {
        exit("Could not open $currentFilePath");
    }

    $filesize = filesize($currentFilePath);

    $lineIndex = 0;
    while (($buffer = fgets($handler, 4096)) !== false) {
        echo "<br>";
        echo $lineIndex . ": " . $buffer . " is construct ? " . CheckForVulnerability($buffer);

        $lineIndex++;
    }


    if (!feof($handler)) {
        echo "Error : unexpected fgets() fail\n";
    }

    fclose($handler);
}
