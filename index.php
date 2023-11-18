<?php
require 'vendor/autoload.php';

// Пример участников
$participants = ['user1@example.com', 'user2@example.com', 'user3@example.com', 'user4@example.com'];

$santaGame = new SantaGame($participants);
$santaGame->playSecretSanta();

echo "Игра Тайного Санты завершена. Пользователям отправлены уведомления.";
