<?php
// src/Rubens/CoreBundle/Menu/Builder.php
namespace Rubens\CoreBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav');

        $menu->addChild('HISTORIQUE', array('route' => 'rubens_web_historique'));
        $menu->addChild('L\'EQUIPE', array('route' => 'rubens_web_fssf'));
        $menu->addChild('FEDERATION', array('route' => 'rubens_web_ciss'));
        $menu->addChild('DIVERS', array('route' => 'rubens_web_divers'));
        $menu->addChild('MEDIA', array('route' => ''))->setAttribute('dropdown', true);
        $menu['MEDIA']->addChild('GALERIES', array('route' => 'rubens_web_galeries'));
        $menu['MEDIA']->addChild('VIDEOS', array('route' => 'rubens_web_videos'));
        $menu->addChild('AGENDA', array('route' => 'rubens_web_agenda'));
        $menu->addChild('ARCHIVES', array('route' => 'rubens_web_archives'));
        $menu->addChild('BUREAU', array('route' => 'rubens_web_bureau'));
        $menu->addChild('CONTACT', array('route' => 'rubens_web_contact'));

        return $menu;
    }

    public function rightMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav navbar-right');
        
        $menu->addChild('AGENDA', array('route' => 'rubens_web_agenda'));
        $menu->addChild('ARCHIVES', array('route' => 'rubens_web_archives'));
        $menu->addChild('BUREAU', array('route' => 'rubens_web_bureau'));
        $menu->addChild('CONTACT', array('route' => 'rubens_web_contact'));

        return $menu;
    }
}
