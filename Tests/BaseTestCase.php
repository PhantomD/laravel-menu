<?php

namespace PhantomD\Menus\Tests;

use Collective\Html\HtmlServiceProvider;
use PhantomD\Menus\MenusServiceProvider;
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
                'navbar' => \PhantomD\Menus\Presenters\Bootstrap\NavbarPresenter::class,
                'navbar-right' => \PhantomD\Menus\Presenters\Bootstrap\NavbarRightPresenter::class,
                'nav-pills' => \PhantomD\Menus\Presenters\Bootstrap\NavPillsPresenter::class,
                'nav-tab' => \PhantomD\Menus\Presenters\Bootstrap\NavTabPresenter::class,
                'sidebar' => \PhantomD\Menus\Presenters\Bootstrap\SidebarMenuPresenter::class,
                'navmenu' => \PhantomD\Menus\Presenters\Bootstrap\NavMenuPresenter::class,
            ],

            'ordering' => false,
        ]);
    }
}
