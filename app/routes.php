<?php
// Routes
use App\Action\FightAction;

$app->get('/', App\Action\HomeAction::class)
    ->setName('homepage');
$app->get('/fight', FightAction::class);