<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SKoefRequest;
use App\Models\SKoef;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanel;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SKoefCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class SKoefCrudController extends CrudController
{
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ShowOperation;


    public function setup()
    {
        CRUD::setModel(SKoef::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/s-koef');
        CRUD::setEntityNameStrings('s koef', 's koefs');
    }

    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::column('name');
        CRUD::column('lower_value');
        CRUD::column('high_value');

    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(SKoefRequest::class);

        CRUD::field('name')->type('text');
        CRUD::field('lower_value');
        CRUD::field('high_value');

    }
}
