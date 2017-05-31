<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-27 19:54
 */
namespace Notadd\Socket;

use Illuminate\Events\Dispatcher;
use Notadd\Foundation\Module\Abstracts\Module;
use Notadd\Socket\Listeners\CsrfTokenRegister;
use Notadd\Socket\Listeners\FlowRegister;
use Notadd\Socket\Listeners\PermissionGroupRegister;
use Notadd\Socket\Listeners\PermissionModuleRegister;
use Notadd\Socket\Listeners\PermissionRegister;
use Notadd\Socket\Listeners\PermissionTypeRegister;
use Notadd\Socket\Listeners\RouteRegister;

/**
 * Class ModuleServiceProvider.
 */
class ModuleServiceProvider extends Module
{
    /**
     * Boot module.
     */
    public function boot()
    {
        $this->app->make(Dispatcher::class)->subscribe(CsrfTokenRegister::class);
        $this->app->make(Dispatcher::class)->subscribe(FlowRegister::class);
        $this->app->make(Dispatcher::class)->subscribe(PermissionGroupRegister::class);
        $this->app->make(Dispatcher::class)->subscribe(PermissionModuleRegister::class);
        $this->app->make(Dispatcher::class)->subscribe(PermissionRegister::class);
        $this->app->make(Dispatcher::class)->subscribe(PermissionTypeRegister::class);
        $this->app->make(Dispatcher::class)->subscribe(RouteRegister::class);
    }

    /**
     * Description of module
     *
     * @return string
     */
    public static function description()
    {
        return '';
    }

    /**
     * Install for module.
     *
     * @return string
     */
    public static function install()
    {
        return '';
    }

    /**
     * Name of module.
     *
     * @return string
     */
    public static function name()
    {
        return 'Socket';
    }

    /**
     * Uninstall for module.
     *
     * @return string
     */
    public static function uninstall()
    {
        return '';
    }

    /**
     * Version of module.
     *
     * @return string
     */
    public static function version()
    {
        return '0.1.0';
    }
}
