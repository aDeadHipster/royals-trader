<?php
// update_product.php <id> <new-name>
require_once "bootstrap.php";

$id = $argv[1];
$newUsername = $argv[2];

$user = $entityManager->find('User', $id);

if ($user === null) {
    echo "User $id does not exist.\n";
    exit(1);
}

$user->setUsername($newUsername);

$entityManager->flush();