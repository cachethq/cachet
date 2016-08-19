<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers\Dashboard;

use AltThree\Validator\ValidationException;
use CachetHQ\Cachet\Bus\Commands\Plugin\DisablePluginCommand;
use CachetHQ\Cachet\Bus\Commands\Plugin\EnablePluginCommand;
use CachetHQ\Cachet\Bus\Commands\Plugin\InstallPluginCommand;
use CachetHQ\Cachet\Bus\Commands\Plugin\UninstallPluginCommand;
use CachetHQ\Cachet\Integrations\Exceptions\Plugins\PluginFailedToDisableException;
use CachetHQ\Cachet\Integrations\Exceptions\Plugins\PluginFailedToEnableException;
use CachetHQ\Cachet\Integrations\Exceptions\Plugins\PluginFailedToInstallException;
use CachetHQ\Cachet\Integrations\Exceptions\Plugins\PluginFailedToUninstallException;
use CachetHQ\Cachet\Models\Plugin;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class PluginController extends Controller
{
    /**
     * Array of sub-menu items.
     *
     * @var array
     */
    protected $subMenu = [];

    /**
     * Creates a new plugin controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->subMenu = [
            'enabled' => [
                'title'  => trans('dashboard.plugins.enabled'),
                'url'    => route('dashboard.plugins.index'),
                'icon'   => 'ion-toggle-filled',
                'active' => false,
            ],
            'disabled' => [
                'title'  => trans('dashboard.plugins.disabled'),
                'url'    => route('dashboard.plugins.index', ['enabled' => 'no']),
                'icon'   => 'ion-toggle',
                'active' => false,
            ],
        ];

        View::share([
            'sub_menu'  => $this->subMenu,
            'sub_title' => trans_choice('dashboard.plugins.plugins', 2),
        ]);
    }

    /**
     * Shows the plugins view.
     *
     * @return \Illuminate\View\View
     */
    public function showPlugins()
    {
        $enabled = Binput::get('enabled', 'yes') !== 'no';
        $plugins = Plugin::orderBy('order')->orderBy('created_at');
        $plugins = ($enabled ? $plugins->enabled() : $plugins->disabled())->get();

        $this->subMenu[$enabled ? 'enabled' : 'disabled']['active'] = true;

        return View::make('dashboard.plugins.index')
            ->withPageTitle(trans_choice('dashboard.plugins.plugins', 2).' - '.trans('dashboard.dashboard'))
            ->withPlugins($plugins)
            ->withSubMenu($this->subMenu);
    }

    /**
     * Shows the install plugin view.
     *
     * @return \Illuminate\View\View
     */
    public function showInstallPlugin()
    {
        return View::make('dashboard.plugins.install')
            ->withPageTitle(trans('dashboard.plugins.install.title').' - '.trans('dashboard.dashboard'));
    }

    /**
     * Installs a new plugin.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function installPluginAction()
    {
        $vendor = Binput::get('plugin.vendor');
        $package = Binput::get('plugin.package');
        $version = Binput::get('plugin.version', '~1.0.0');

        try {
            $plugin = dispatch(new InstallPluginCommand(
                $vendor,
                $package,
                $version
            ));
        } catch (PluginFailedToInstallException $e) {
            return Redirect::route('dashboard.plugins.install')
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.plugins.install.failure')));
        } catch (ValidationException $e) {
            return Redirect::route('dashboard.plugins.install')
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.plugins.install.failure')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::route('dashboard.plugins.index', ['enabled' => 'no'])
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.plugins.install.success')));
    }

    /**
     * Uninstalls a plugin.
     *
     * @param \CachetHQ\Cachet\Models\Plugin $plugin
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function uninstallPluginAction(Plugin $plugin)
    {
        if ($plugin->enabled) {
            // @todo: message saying can't uninstall whilst enabled
            return Redirect::route('dashboard.plugins.index');
        }

        try {
            dispatch(new UninstallPluginCommand($plugin));
        } catch (PluginFailedToUninstallException $e) {
            return Redirect::route('dashboard.plugins.index', ['enabled' => 'no'])
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.plugins.uninstall.failure')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::route('dashboard.plugins.index')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.plugins.uninstall.success')));
    }

    /**
     * Enables a plugin.
     *
     * @param \CachetHQ\Cachet\Models\Plugin $plugin
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function enablePluginAction(Plugin $plugin)
    {
        if ($plugin->enabled) {
            // @todo: message saying already enabled
            return Redirect::route('dashboard.plugins.index');
        }

        try {
            dispatch(new EnablePluginCommand($plugin));
        } catch (PluginFailedToEnableException $e) {
            return Redirect::route('dashboard.plugins.index', ['enabled' => 'no'])
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.plugins.enable.failure')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::route('dashboard.plugins.index')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.plugins.enable.success')));
    }

    /**
     * Disables a plugin.
     *
     * @param \CachetHQ\Cachet\Models\Plugin $plugin
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function disablePluginAction(Plugin $plugin)
    {
        if (!$plugin->enabled) {
            // @todo: message saying already not enabled
            return Redirect::route('dashboard.plugins.index', ['enabled' => 'no']);
        }

        try {
            dispatch(new DisablePluginCommand($plugin));
        } catch (PluginFailedToDisableException $e) {
            return Redirect::route('dashboard.plugins.index')
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.plugins.disable.failure')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::route('dashboard.plugins.index')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.plugins.disable.success')));
    }
}
