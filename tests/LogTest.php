<?php

namespace Source;

use PHPUnit\Framework\TestCase;

class LogTest extends TestCase
{

    protected function assertPreConditions(): void
    {
        $this->assertTrue(class_exists(Log::class));
    }

    public function testSeLogEFeitoComSucesso()
    {
        $log = new Log();
        $log->log('Testando Save de log no Sistema!');

        $this->assertEquals('Logando dados no sistema: Testando Save de log no Sistema!',
                            $log->log('Testando Save de log no Sistema!'));
    }

}