<?php

namespace Tasmir\Menus\Tests;

use Collective\Html\HtmlServiceProvider;
use Tasmir\Menus\MenusServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class BaseTestCase extends OrchestraTestCase
{
    public function setUp() : void
    {
        parent::setUp();

        // $this->setUpDatabase();
    }

    protected function getPackageProviders($app)
    {
        return [
            HtmlServiceProvider::class,
            MenusServiceProvider::class,
        ];
    }

    /**
     * Set up the environment.
     *
     * @param \Illuminate\Foundation\Application $app
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('menus', [
            'styles' => [
                'navbar' => \Tasmir\Menus\Presenters\Bootstrap\NavbarPresenter::class,
                'navbar-right' => \Tasmir\Menus\Presenters\Bootstrap\NavbarRightPresenter::class,
                'nav-pills' => \Tasmir\Menus\Presenters\Bootstrap\NavPillsPresenter::class,
                'nav-tab' => \Tasmir\Menus\Presenters\Bootstrap\NavTabPresenter::class,
                'sidebar' => \Tasmir\Menus\Presenters\Bootstrap\SidebarMenuPresenter::class,
                'navmenu' => \Tasmir\Menus\Presenters\Bootstrap\NavMenuPresenter::class,
            ],

            'ordering' => false,
        ]);
    }
}
