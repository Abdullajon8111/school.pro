<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\NtmOtRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class NtmOtCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class NtmOtCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\NtmOt::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/ntm-ot');
        CRUD::setEntityNameStrings('Oliy ta`lim', 'Oliy ta`lim');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->query = $this->crud->query->orderBy('id');

        CRUD::column('Id');
        CRUD::column('Reestr boʻyicha');
        CRUD::column('Dastur t/r');
        CRUD::column('Ariza berilgan sana');
        CRUD::column('STIR raqami');
        CRUD::column('Taʼlim muassasa nomi');
        CRUD::column('Yuridik manzili');
        CRUD::column('Telefon raqami');
        CRUD::column('Tashkiliy huquqiy shakli');
        CRUD::column('Xisob raqami');
        CRUD::column('Tashkilot rahbari F.I.Sh');
        CRUD::column('Xudud');
        CRUD::column('Taʼlim faoliyati turi');
        CRUD::column('Taʼlim yoʻnalishlari roʻyxati');
        CRUD::column('Faoliyatni amalga oshirish manzili');
        CRUD::column('Litsenziya raqami');
        CRUD::column('Litsenziya berilgan sana');
        CRUD::column('Litsenziyaning amal qilish muddati');
        CRUD::column('Invoys raqami yoki toʻlov topshiriqnomasi');
        CRUD::column('Toʻlov amalga oshirilgan sana');
        CRUD::column('Yigʻim summasi');
        CRUD::column('Davlat boji summasi');
        CRUD::column('Pedagog xodimlar toʻgʻrisida maʼlumot');
        CRUD::column('Xolati');
        CRUD::column('Izoh');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(NtmOtRequest::class);

        CRUD::field('Reestr boʻyicha');
        CRUD::field('Dastur t/r');
        CRUD::field('Ariza berilgan sana');
        CRUD::field('STIR raqami');
        CRUD::field('Taʼlim muassasa nomi');
        CRUD::field('Yuridik manzili');
        CRUD::field('Telefon raqami');
        CRUD::field('Tashkiliy huquqiy shakli');
        CRUD::field('Xisob raqami');
        CRUD::field('Tashkilot rahbari F.I.Sh');
        CRUD::field('Xudud');
        CRUD::field('Taʼlim faoliyati turi');
        CRUD::field('Taʼlim yoʻnalishlari roʻyxati');
        CRUD::field('Faoliyatni amalga oshirish manzili');
        CRUD::field('Litsenziya raqami');
        CRUD::field('Litsenziya berilgan sana');
        CRUD::field('Litsenziyaning amal qilish muddati');
        CRUD::field('Invoys raqami yoki toʻlov topshiriqnomasi');
        CRUD::field('Toʻlov amalga oshirilgan sana');
        CRUD::field('Yigʻim summasi');
        CRUD::field('Davlat boji summasi');
        CRUD::field('Pedagog xodimlar toʻgʻrisida maʼlumot');
        CRUD::field('Xolati');
        CRUD::field('Izoh');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
