<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ASchoolRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ASchoolCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ASchoolCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;


    public function setup()
    {
        CRUD::setModel(\App\Models\ASchool::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/a-school');
        CRUD::setEntityNameStrings('a school', 'a schools');
    }

    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::column('name');
        CRUD::column('province');
        CRUD::column('district');
        CRUD::column('language_type');
        CRUD::column('foreign_language');
        CRUD::column('subject');
        CRUD::column('location_type');
        CRUD::column('create_year');
        CRUD::column('update_year');
        CRUD::column('in_turn');
        CRUD::column('school_status');
        CRUD::column('comment');
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(ASchoolRequest::class);

        CRUD::field('name');
        CRUD::field('province');
        CRUD::field('district');
        CRUD::field('language_type');
        CRUD::field('foreign_language');
        CRUD::field('subject');
        CRUD::field('location_type');
        CRUD::field('create_year');
        CRUD::field('update_year');
        CRUD::field('in_turn');
        CRUD::field('school_status');
        CRUD::field('comment');
    }


    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
