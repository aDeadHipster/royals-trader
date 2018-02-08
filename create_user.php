<?php
require_once "bootstrap.php";

$newUserName = "Justin2";
$newEmail = "jw.praas2@gmail.com";
$newPassword = '$2y$10$FHLBc7YUMb9gE3IdWuZXBO40cUp3MTAz/5s6rSKJ5G13cfLwK3Qri';
$newDiscord = "aDeadHipster - Justin#2696";
$newReputation = 0;

$user = new User();
$user->setUsername($newUserName);
$user->setEmail($newEmail);
$user->setDiscord($newDiscord);
$user->setIGNs("");
$user->setReputation($newReputation);
$user->setPassword($newPassword);


$entityManager->persist($user);
$entityManager->flush();

