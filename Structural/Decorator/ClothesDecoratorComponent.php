<?php
/**
 * 衣服装饰器
 */
namespace DesignPatterns\Structural\Decorator;


class ClothesDecoratorComponent extends DecoratorComponentAbstract
{

    public function handle()
    {
        $this->component->handle();
        echo "has clothes";
    }

}