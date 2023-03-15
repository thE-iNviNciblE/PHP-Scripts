<?php
// Setzen Sie die URL der Webseite, die Sie abrufen möchten
$url = 'http://example.com';

// Setzen Sie den Dateinamen für die Cache-Datei
$cache_file = 'cache.html';

// Setzen Sie die Lebensdauer des Caches in Sekunden
$cache_lifetime = 3600;

// Überprüfen Sie, ob die Cache-Datei existiert und noch gültig ist
if (file_exists($cache_file) && (time() - filemtime($cache_file) < $cache_lifetime)) {
    // Lesen Sie den Inhalt der Cache-Datei
    $content = file_get_contents($cache_file);
} else {
    // Rufen Sie die Webseite ab
    $content = file_get_contents($url);

    // Speichern Sie den Inhalt in der Cache-Datei
    file_put_contents($cache_file, $content);
}

// Geben Sie den Inhalt aus
echo $content;
?>
