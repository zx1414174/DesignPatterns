<?php
/**
 * 工厂抽象类
 */

namespace DesignPatterns\Creational\FactoryMethod;


abstract class FactoryMethod
{
    # 各工厂继承实现的基本创建类方法
    abstract protected function createComputer($type);

}