<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SLocationTypeRequest;
use App\Models\SLocationType;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanel;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SLocationTypeCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class SLocationTypeCrudController extends CrudController
{
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ShowOperation;


    public function setup()
    {
        CRUD::setModel(SLocationType::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/s-location-type');
        CRUD::setEntityNameStrings('s location type', 's location types');
    }

    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::column('name')->type('text');

    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(SLocationTypeRequest::class);

        CRUD::field('name')->type('text');
    }
}
