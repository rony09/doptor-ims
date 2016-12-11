<?php

namespace Modules\DoptorLtd\InstituteManagementSystem\Controllers;
/*
=================================================
Module Name     :   Institute Management System
Module Version  :   v1.0
Compatible CMS  :   v1.2
Site            :   http://doptor.com
Description     :   Institute Management System
===================================================
*/
use DB;
use Input;
use Redirect;
use Str;
use View;

use Backend\AdminController as BaseController;
use Services\Validation\ValidationException as ValidationException;

class InstituteBaseController extends BaseController {
    /**
     * The layout that should be used for responses.
     */
    protected $layout;
    // Type of the parent page
    protected $type;
    protected $config;
    protected $fields;
    protected $module_alias;
    protected $module_link;
    protected $module_namespace;

    public function __construct()
    {
        $this->config = json_decode(file_get_contents(__DIR__ . '/../module.json'), true);

        $this->module_name = $this->config['info']['name'];
        $this->module_alias = $this->config['info']['alias'];
        $this->module_vendor = $this->config['info']['vendor'];
        $this->module_link = Str::snake($this->module_alias, '_');

        if ($this->module_vendor) {
            $this->module_namespace = "Modules\\{$this->module_vendor}\\{$this->module_alias}\\";
        } else {
            $this->module_namespace = "Modules\\{$this->module_alias}\\";
        }

        View::share('module_name', $this->module_name);
        View::share('module_alias', $this->module_alias);
        View::share('module_vendor', $this->module_vendor);
        View::share('module_link', $this->module_link);

        parent::__construct();

        $this->type = $this->link_type;

        // Add location hinting for views
        View::addNamespace($this->module_alias,
            app_path() . "/Modules/{$this->module_vendor}/{$this->module_alias}/Views");
    }
}
