<?php
/**
 * 帽子装饰期
 */

namespace DesignPatterns\Structural\Decorator;


class CapDecoratorComponent extends DecoratorComponentAbstract
{
    public function handle()
    {
        $this->component->handle();
        echo 'has cap'.'\n';
    }

}