<?php
/**
 * 神州笔记本
 */

namespace DesignPatterns\Creational\FactoryMethod;


class HaseeComputer implements ComputerInterface
{
    protected $cpu;
    protected $quality;
    public function setCpu($cpu)
    {
        $this->cpu = $cpu.'-'.'l';
    }

    /**
     * @param mixed $quality
     */
    public function setQuality($quality): void
    {
        $this->quality = $quality;
    }

}