<?php
/**
 * 电脑抽象类
 */

namespace DesignPatterns\Creational\FactoryMethod;


interface ComputerInterface
{
    public function setCpu($cpu);
    public function setQuality($quality);
}