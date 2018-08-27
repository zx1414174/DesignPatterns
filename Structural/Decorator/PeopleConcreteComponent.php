<?php
/**
 * 人实体组件
 */
namespace DesignPatterns\Structural\Decorator;


class PeopleConcreteComponent implements ComponentInterface
{
    public function handle()
    {
        echo 'people go!!';
    }
}