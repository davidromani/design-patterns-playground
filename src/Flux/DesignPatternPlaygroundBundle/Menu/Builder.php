<?php
namespace Flux\DesignPatternPlaygroundBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\Request;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        //$menu->setCurrentUri($this->container->get('request')->getRequestUri());
        $menu->addChild('strategy', array('route' => 'flux_design_pattern_playground_strategy'));
        $menu->addChild('observer', array('route' => 'flux_design_pattern_playground_observer'));
        return $menu;
    }
}