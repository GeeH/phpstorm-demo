<?php
/**
 * GeeH
 * 15/06/2017
 */
declare(strict_types=1);


namespace Tests\Functional;


use App\Action\FightAction;


class FightActionTest extends BaseTestCase
{
    public function testFightReturnsJson()
    {
        $response = $this->runApp('GET', '/fight');

        self::assertEquals(200, $response->getStatusCode());
        self::assertContains('Dracula', (string)$response->getBody());
    }
}
