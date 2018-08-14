<?php
/**
 * 微星电脑
 */

namespace DesignPatterns\Creational\FactoryMethod;


class MsiComputer  implements ComputerInterface
{
    protected $cpu;
    protected $quality;
    public function setCpu($cpu)
    {
        $this->cpu = $cpu.'-'.'n';
    }

    /**
     * @param mixed $quality
     */
    public function setQuality($quality): void
    {
        $this->quality = $quality;
    }

}