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
        CRUD::column('s_province_id');
        CRUD::column('s_district_id');
        CRUD::column('s_language_type_id');
        CRUD::column('s_type_foreign_language_id');
        CRUD::column('s_subject_id');
        CRUD::column('s_location_type_id');
        CRUD::column('create_year');
        CRUD::column('update_year');
        CRUD::column('s_in_turn_id');
        CRUD::column('s_school_status_id');
        CRUD::column('comment');
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(ASchoolRequest::class);

        CRUD::field('name');
        CRUD::field('s_province_id');
        CRUD::field('s_district_id');
        CRUD::field('s_language_type_id');
        CRUD::field('s_type_foreign_language_id');
        CRUD::field('s_subject_id');
        CRUD::field('s_location_type_id');
        CRUD::field('create_year');
        CRUD::field('update_year');
        CRUD::field('s_in_turn_id');
        CRUD::field('s_school_status_id');
        CRUD::field('comment');
    }


    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
