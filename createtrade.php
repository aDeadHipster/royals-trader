<?php
// createtrade.php <user-id> <description> <status>
require_once "bootstrap.php";

$trade_owner_id = $argv[1];
$description = $argv[2];
$status = $argv[3];

$trade_owner = $entityManager->find("User", $trade_owner_id);

if (!$trade_owner) {
    echo "No user found for the given id(s).\n";
    exit(1);
}

$trade = new Trade();
$trade->setTradeOwner($trade_owner);
$trade->setDescription($description);
$trade->setCreatedAt(new DateTime("now"));
$trade->setStatus($status);

$entityManager->persist($trade);
$entityManager->flush();

echo "Your new Trade Id: ".$trade->getId()."\n";