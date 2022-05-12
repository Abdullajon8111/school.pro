<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\STypeForeignLanguageRequest;
use App\Models\STypeForeignLanguage;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanel;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class STypeForeignLanguageCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class STypeForeignLanguageCrudController extends CrudController
{
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ShowOperation;


    public function setup()
    {
        CRUD::setModel(STypeForeignLanguage::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/s-type-foreign-language');
        CRUD::setEntityNameStrings('s type foreign language', 's type foreign languages');
    }

    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::column('name')->type('text');
        CRUD::column('status');
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(STypeForeignLanguageRequest::class);

        CRUD::field('name')->type('text');
        CRUD::field('status');
    }
}
