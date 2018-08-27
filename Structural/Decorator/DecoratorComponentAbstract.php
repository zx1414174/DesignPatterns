<?php
/**
 * 装饰组件
 */

namespace DesignPatterns\Structural\Decorator;


abstract class DecoratorComponentAbstract implements ComponentInterface
{
    /**
     * @var ComponentInterface
     */
    protected $component;

    /**
     * 设置组件
     * @param ComponentInterface $component
     * @author pyh
     * @time 2018/8/27
     */
    public function setComponent(ComponentInterface $component)
    {
        $this->component = $component;
    }

}