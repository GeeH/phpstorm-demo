<?php
/**
 * GeeH
 * 01/06/2017
 */
declare(strict_types=1);


namespace App\Action;


use Monolog\Logger;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\Twig;

class FightAction
{
    protected $view;
    protected $logger;

    /**
     * FightAction constructor.
     * @param $view
     * @param $logger
     */
    public function __construct(Twig $view, Logger $logger)
    {
        $this->view = $view;
        $this->logger = $logger;
    }

    function __invoke(Request $request, Response $response)
    {
        return $response->withJson($this->getMonsters());
    }

    /**
     * @return array
     */
    private function getMonsters() : array
    {
        $sql = "SELECT * FROM monsters";
        return [
            'monsters' => [
                'name'    => 'Dracula',
                'type'    => 'Vampire',
                'age'     => 294,
                'health'  => 100,
                'mana'    => 50,
                'attack'  => 48,
                'defense' => 5,
                'skills'  => [
                    'I vant to suck your bloood!' => [
                        'cost'     => 10,
                        'damage'   => 20,
                        'cooldown' => 60,
                    ],
                ],
            ],
        ];
    }
}
