<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\NtmMttRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class NtmMttCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class NtmMttCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\NtmMtt::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/ntm-mtt');
        CRUD::setEntityNameStrings('Maktabdan tashqari ta`lim', 'Maktabdan tashqari ta`lim');
    }

    protected function setupListOperation()
    {
        $this->crud->query = $this->crud->query->orderBy('id');

        CRUD::column('id');
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
        CRUD::column('Izox(yoki Protokol raqami)');
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(NtmMttRequest::class);

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
        CRUD::field('Izox(yoki Protokol raqami)');
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
