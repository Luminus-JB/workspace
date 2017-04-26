<?php
/**
 * Created by PhpStorm.
 * User: Lumi
 * Date: 18/04/2017
 * Time: 14:52
 */
//la constante __NAMESPACE__ permet contient le nom du namespace dans laquelle elle se trouve
    namespace A
    {
        echo __NAMESPACE__;
    }

    namespace B
    {
        echo __NAMESPACE__;
    }

    namespace
    {
        echo __NAMESPACE__;
    }