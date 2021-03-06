<?php
/**
 * 戴尔电脑类
 */

namespace DesignPatterns\Creational\FactoryMethod;


class DellComputer implements ComputerInterface
{
    protected $cpu;
    protected $quality;
    public function setCpu($cpu)
    {
        $this->cpu = $cpu.'-'.'h';
    }
    public function setQuality($quality)
    {
        $this->quality = $quality;
    }

}