<?php
/**
 * 国外
 */

namespace DesignPatterns\Creational\FactoryMethod;


class ForeignFactoryMethod extends FactoryMethod
{
    /**
     * @param $type
     * @return ComputerInterface
     * @throws \Exception
     * @author pyh
     * @time 2018/8/14
     */
    public function createComputer($type): ComputerInterface
    {
        $type = strtoupper($type);
        switch ($type) {
            case 'MSI':
                $computer = new MsiComputer();
                break;
            case 'DELL':
                $computer = new DellComputer();
                break;
            default:
                throw new \Exception('未找到此类型电脑');
        }
        $computer->setQuality('height');

    }

}