<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ASchoolClassRequest;
use App\Models\ASchoolClass;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanel;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ASchoolClassCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class ASchoolClassCrudController extends CrudController
{
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ShowOperation;


    public function setup()
    {
        CRUD::setModel(ASchoolClass::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/a-school-class');
        CRUD::setEntityNameStrings('a school class', 'a school classes');
    }

    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::column('school');
        CRUD::column('class');
        CRUD::column('boys_count');
        CRUD::column('girls_count');

    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(ASchoolClassRequest::class);

        CRUD::field('school');
        CRUD::field('class');
        CRUD::field('boys_count');
        CRUD::field('girls_count');

    }
}
