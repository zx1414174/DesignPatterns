<?php
/**
 * 工厂抽象类
 */

namespace DesignPatterns\Creational\FactoryMethod;


abstract class FactoryMethod
{
    # 各工厂继承实现的基本创建类方法
    # 如何实例化方法
    abstract protected function createComputer($type) : ComputerInterface;
    # 通用处理办法
    # 对所有实例化对象的通用处理办法
    public function create($type)
    {
        $this->createComputer($type);
    }


}