#!/bin/bash

fileOutput="$(< ./TestFiles/Faille1.php)";




filePath='./raw-files/first-analyse.txt';

touch $filePath;

echo $fileOutput > $filePath



