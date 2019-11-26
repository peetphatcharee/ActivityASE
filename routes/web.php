<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('edit_st{id}_{ac}','ActivityListController@getedit_st');//แก้ไขชื่อนศ
Route::post('update_st','ActivityListController@updateForm_st');//ทำการอัพเดตชื่อนศ

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/ActivityList', 'ActivityListController@getAc');//แสดงข้อมูลกิจกรรม หน้า admin
Route::get('AcList2{id}', 'ActivityListController@getAc2');//แสดงข้อมูลกิจกรรมหน้า 2 หน้า admin

Route::get('/StudentList{id}', 'ActivityListController@getStudent');//แสดงข้อมูลนักศึกษา


Route::get('edit{id}','ActivityListController@getEdit');//แก้ไข
Route::post('update','ActivityListController@updateForm');//ทำการอัพเดต

Route::get('form_addAc','ActivityListController@getForm'); //หน้าเพิ่มกิจกรรม
Route::post('add','ActivityListController@postForm');

Route::get('del{id}','ActivityListController@del');//ลบ

Route::get('add_student{id}','ActivityListController@getSt'); //หน้าเพิ่มนักศึกษา
Route::post('add_st','ActivityListController@postSt');


Route::get('/AcList_St', 'ActivityListController@getAc_St');//แสดงข้อมูลกิจกรรม หน้า นศ
Route::get('/St_AcList2{id}', 'ActivityListController@getAc2_St');//แสดงข้อมูลกิจกรรมหน้า 2 หน้า นศ

Route::get('st_del{id}_{ac}','ActivityListController@del_st');//ลบรายชื่อนักศึกษา

Route::get('/ListStudent_st{id}', 'ActivityListController@getStudent_st');//แสดงข้อมูลนักศึกษา หน้า นศ


