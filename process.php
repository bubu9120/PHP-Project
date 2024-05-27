<?php
// process.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['qone'])) {
        $selectedOption = $_POST['qone'];

        // Lade die aktuelle Datei, um die bestehenden Optionen zu bekommen
        include 'data.php';

        // Füge die neue Option hinzu
        $options[] = $selectedOption;

        // Speichere die Optionen zurück in die Datei
        $dataString = '<?php $options = ' . var_export($options, true) . '; ?>';
        file_put_contents('swipe1.php', $dataString);

        echo "Option gespeichert: " . htmlspecialchars($selectedOption);
    } else {
        echo "Keine Option ausgewählt.";
    }
}
