<?php
/**
 * 国内
 */

namespace DesignPatterns\Creational\FactoryMethod;


class InlandForeignFactoryMethod extends FactoryMethod
{
    protected function createComputer($type): ComputerInterface
    {
        $type = strtoupper($type);
        switch ($type) {
            case 'HASEE':
                $computer = new HaseeComputer();
                break;
            case 'LENOVO':
                $computer = new LenovoComputer();
                break;
            default:
                throw new \Exception('未找到此类型电脑');
        }
        $computer->setQuality('log');
    }

}