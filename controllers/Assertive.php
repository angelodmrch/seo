<?php namespace Dmrch\Seo\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Assertive Back-end Controller
 */
class Assertive extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Dmrch.Seo', 'pages', 'assertive');
    }
}
