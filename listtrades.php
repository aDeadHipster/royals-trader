<?php
// list_bugs.php
require_once "bootstrap.php";

$dql = "SELECT t FROM Trade t WHERE t.trade_owner = 1";


$query = $entityManager->createQuery($dql);
$query->setMaxResults(30);
$trades = $query->getResult();

foreach ($trades as $trade) {
    echo $trade->getDescription()." - ".$trade->getCreatedAt()->format('d.m.Y')."\n";
    echo "    Trade owner: ".$trade->getTradeOwner()->getUsername()."\n";
    echo "\n";
}