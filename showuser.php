<?php
// show_product.php <id>
require_once "bootstrap.php";

$id = 3;
$user = $entityManager->find('User', $id);

if ($user === null) {
    echo "No user found.\n";
    exit(1);
}

echo sprintf("-%s\n", $user->getUsername());