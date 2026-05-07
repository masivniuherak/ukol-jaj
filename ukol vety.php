<?php

echo "<h2>ÚLOHA 1:</h2>";
for ($i = 1; $i <= 100; $i++) {
    echo $i . " ";
}

echo "<h2>ÚLOHA 2:</h2>";
for ($i = 1; $i <= 100; $i++) {
    echo ($i <= 50) ? $i . " " : "hodně ";
}

echo "<h2>ÚLOHA 3:</h2>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}

echo "<h2>ÚLOHA 4:</h2>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        echo $i . " ";
    }
}

echo "<h2>ÚLOHA 5:</h2>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "BUM PRÁSK";
    } elseif ($i % 3 == 0) {
        echo "BUM ";
    } elseif ($i % 5 == 0) {
        echo "PRÁSK ";
    } else {
        echo $i . " ";
    }
}

echo "<h2>ÚLOHA 6:</h2>";
$pole = ["Jablko", "Kiwi", "Sandál", "Metro", "Oběd", "List", "Ubrus", "Trouba"];
foreach ($pole as $vec) {
    echo $vec . ", ";
}

echo "<h2>ÚLOHA 7:</h2>";
$mesta = ["Praha", "Brno", "Ostrava", "Plzeň", "Liberec", "Aš", "Olomouc"];
foreach ($mesta as $mesto) {
    if (strlen($mesto) > 5) {
        echo strtoupper($mesto) . " ";
    } else {
        echo $mesto . " ";
    }
}

echo "<h2>ÚLOHA 8:</h2>";
$jmeno = "Laura";
$vek = 16;
echo "Ahoj, jmenuji se $jmeno a je mi $vek let.";

echo "<h2>ÚLOHA 9: Hod kostkou</h2>";
echo "Padlo číslo: " . rand(1, 6);

echo "<h2>ÚLOHA 10:</h2>";
$podmet = ["Robot", "Učitel", "Kosmonaut", "Kuchař", "Hacker"];
$prisudek = ["programuje", "studuje", "opravuje", "testuje", "hledá"];
$predmet = ["chybu", "server", "databázi", "algoritmus", "kód"];

$veta = $podmet[rand(0, 4)] . " " . $prisudek[rand(0, 4)] . " " . $predmet[rand(0, 4)] . ".";
echo "Náhodná věta: " . $veta;

?>