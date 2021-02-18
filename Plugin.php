<?php namespace Dmrch\Seo;

use Backend;
use System\Classes\PluginBase;

/**
 * Seo Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Seo',
            'description' => 'No description provided yet...',
            'author'      => 'Angelo Demarchi',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Dmrch\Seo\Components\Assertive' => 'assertive',
            'Dmrch\Seo\Components\Pages' => 'seo'
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
         return [
            'dmrch.seo.access_pages' => [
                'tab'   => 'SEO',
                'label' => 'Pages'
            ],
            'dmrch.seo.access_assertive' => [
                'tab'   => 'SEO',
                'label' => 'Assertive'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'pages' => [
                'label'       => 'SEO',
                'url'         => Backend::url('dmrch/seo/pages'),
                'icon'        => 'icon-file-code-o',
                'permissions' => ['dmrch.seo.*'],
                'order'       => 500,
                'sideMenu' => [
                    'pages' => [
                        'label'       => 'Pages',
                        'icon'        => 'icon-file-code-o',
                        'url'         => Backend::url('dmrch/seo/pages'),   
                        'permissions' => ['dmrch.seo.access_pages'],
 
                    ],
                    'assertive' => [
                        'label'       => 'Assertive',
                        'icon'        => 'icon-file-code-o',
                        'url'         => Backend::url('dmrch/seo/assertive'),
                        'permissions' => ['dmrch.seo.access_assertive'], 
                    ]
                ]
            ]
        ];
    }
    

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'SEO',
                'description' => 'Manage user based settings.',
                'category'    => 'SEO',
                'icon'        => 'icon-cog',
                'class'       => 'Dmrch\Seo\Models\Settings',
                'order'       => 500,
                'permissions' => ['dmrch.seo.access_settings']
            ]
        ];
    }
}
