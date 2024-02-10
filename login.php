<?php
// Gem den korrekte adgangskode
$correctPassword = "hejmeddig";

// Kontroller om formularen er indsendt
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Hent den indsendte adgangskode fra formularen
    $password = $_POST["password"];

    // Kontroller om adgangskoden er korrekt
    if ($password === $correctPassword) {
        // Adgangskoden er korrekt, omdiriger til admin_panel_access.html
        header("Location: admin_panel_access.html");
        exit();
    } else {
        // Adgangskoden er forkert, vis fejlbesked
        echo "Forkert kode. Prøv igen.";
    }
}
?>
