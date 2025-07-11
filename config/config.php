<?php

return [

    'styles' => [
        'navbar' => \PhantomD\Menus\Presenters\Bootstrap\NavbarPresenter::class,
        'navbar-right' => \PhantomD\Menus\Presenters\Bootstrap\NavbarRightPresenter::class,
        'nav-pills' => \PhantomD\Menus\Presenters\Bootstrap\NavPillsPresenter::class,
        'nav-tab' => \PhantomD\Menus\Presenters\Bootstrap\NavTabPresenter::class,
        'sidebar' => \PhantomD\Menus\Presenters\Bootstrap\SidebarMenuPresenter::class,
        'navmenu' => \PhantomD\Menus\Presenters\Bootstrap\NavMenuPresenter::class,
        'adminlte' => \PhantomD\Menus\Presenters\Admin\AdminltePresenter::class,
        'zurbmenu' => \PhantomD\Menus\Presenters\Foundation\ZurbMenuPresenter::class,
    ],

    'ordering' => true,

];
