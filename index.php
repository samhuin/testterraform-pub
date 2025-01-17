<?php
// Récupérer l'adresse IP du serveur
$server_ip = gethostbyname(gethostname());

// Afficher l'adresse IP du serveur
echo "L'adresse IP du serveur est : " . $server_ip;
?>
