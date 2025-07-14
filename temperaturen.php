
<?php
    $temperaturen = [21, -5, 0, 8, 12, 18, 25, 30, 35, 20]; // Liste von Temperaturen in Celsius
    // $temperaturen = [-5, 0, 8, 30, 35]; // Alternative Testdaten

    // Zähler für jede Temperaturkategorie
    $kalt = 0;
    $gemaessigt = 0;
    $heiss = 0;

    // Durchlaufen der Temperaturen und Einordnung in Kategorien
    foreach ($temperaturen as $temp) {
        if ($temp < 10) {
            echo "Die Temperatur $temp °C ist kalt.\n";
            $kalt ++;
        } elseif ($temp >= 10 && $temp <= 25) {
            echo "Die Temperatur $temp °C ist gemäßigt.\n";
            $gemaessigt ++;
        } else { // alles bei $temp > 25
            echo "Die Temperatur $temp °C ist heiß.\n";
            $heiss ++;
        }
    }

    // Liste für Tage mit gemäßigten Temperaturen erstellen
    $gemaessigte_tage = [];

    for ($i = 0; $i < count($temperaturen); $i++) {
        if ($temperaturen[$i] >= 10 && $temperaturen[$i] <= 25) {
            $gemaessigte_tage[] = $temperaturen[$i];
        }
    }

    // Ausgabe der Ergebnisse    
    echo "\nAnzahl kalte Tage: $kalt\n";
    echo "Anzahl gemäßigte Tage: $gemaessigt\n";
    echo "Anzahl heiße Tage: $heiss\n";

    // Ausgabe der gemäßigten Temperaturen
    echo "\nGemäßigte Tage: " . implode(", ", $gemaessigte_tage) . "\n";

    // Durchschnittstemperatur der gemäßigten Tage berechnen
    $summe = 0;
    $index = 0;

    // While-Schleife zur Berechnung der Summe
    while ($index < count($gemaessigte_tage)) {
        $summe += $gemaessigte_tage[$index];
        $index++;
    }

    // Durchschnitt berechnen (falls gemäßigte Tage existieren)
    if ($gemaessigt > 0) {
        $durchschnitt = $summe / $gemaessigt;
        echo "\nDurchschnittstemperatur der gemäßigten Tage: " . round($durchschnitt, 2) . "°C\n";
    } else {
        echo "\nEs gibt keine gemäßigten Tage, daher kann kein Durchschnitt berechnet werden.\n";
    }
?>
