<?php

return [

    'styles' => [
        'navbar' => \Tasmir\Menus\Presenters\Bootstrap\NavbarPresenter::class,
        'navbar-right' => \Tasmir\Menus\Presenters\Bootstrap\NavbarRightPresenter::class,
        'nav-pills' => \Tasmir\Menus\Presenters\Bootstrap\NavPillsPresenter::class,
        'nav-tab' => \Tasmir\Menus\Presenters\Bootstrap\NavTabPresenter::class,
        'sidebar' => \Tasmir\Menus\Presenters\Bootstrap\SidebarMenuPresenter::class,
        'navmenu' => \Tasmir\Menus\Presenters\Bootstrap\NavMenuPresenter::class,
        'adminlte' => \Tasmir\Menus\Presenters\Admin\AdminltePresenter::class,
        'zurbmenu' => \Tasmir\Menus\Presenters\Foundation\ZurbMenuPresenter::class,
    ],

    'ordering' => true,

];
