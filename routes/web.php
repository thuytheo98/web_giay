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

Route::get("admin/dang-nhap",'Admin\UserController@getAdminLogin');
Route::post("admin/dang-nhap",'Admin\UserController@postAdminLogin');

Route::get("admin/index",function(){
    return view('admin.index');
});

Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'loginAdmin'],function (){

    Route::group(['prefix'=>'danh_muc'],function (){
        Route::get("them",['as'=>'themdanhmuc','uses'=>'CategoryController@getAddCate']);
        Route::post("them",['as'=>'themdanhmuc','uses'=>'CategoryController@postAddCate']);
        Route::get("danh-sach",['as'=>'listdanhmuc','uses'=>'CategoryController@getListCate']);
        Route::get("sua/{id}",['as'=>'suadanhmuc','uses'=>'CategoryController@getEditCate']);
        Route::post("sua/{id}",['as'=>'suadanhmuc','uses'=>'CategoryController@postEditCate']);

    });
    Route::group(['prefix'=>'san_pham'],function (){
        Route::get("them",['as'=>'themsanpham','uses'=>'ProductController@getAddProduct']);
        Route::post("them",['as'=>'themsanpham','uses'=>'ProductController@postAddProduct']);
        Route::get("danh-sach",['as'=>'listsanpham','uses'=>'ProductController@getListProduct']);
        Route::get("sua/{id}",['as'=>'suasanpham','uses'=>'ProductController@getEditProduct']);
        Route::post("sua/{id}",['as'=>'suasanpham','uses'=>'ProductController@postEditProduct']);

    });
    Route::group(['prefix'=>'thuong_hieu'],function (){
        Route::get("them",['as'=>'themthuonghieu','uses'=>'BrandController@getAddBrand']);
        Route::post("them",['as'=>'themthuonghieu','uses'=>'BrandController@postAddBrand']);
        Route::get("danh-sach",['as'=>'listthuonghieu','uses'=>'BrandController@getListBrand']);
    });
    Route::group(['prefix'=>'kich_thuoc'],function (){
        Route::get("them",['as'=>'themkichthuoc','uses'=>'SizeController@getAddSize']);
        Route::post("them",['as'=>'themkichthuoc','uses'=>'SizeController@postAddSize']);
        Route::get("danh-sach",['as'=>'listkichthuoc','uses'=>'SizeController@getListSize']);
        Route::get("sua/{id}",['as'=>'suakichthuoc','uses'=>'SizeController@getEditSize']);
        Route::post("sua/{id}",['as'=>'suakichthuoc','uses'=>'SizeController@postEditSize']);
    });
    Route::group(['prefix'=>'don_hang'],function (){
        Route::get("danh-sach",['as'=>'listhoadon','uses'=>'BillController@getListBill']);
    });
    Route::group(['prefix'=>'coupon'],function (){
        Route::get("them",['as'=>'themcoupon','uses'=>'CouponController@getAddCoupon']);
        Route::post("them",['as'=>'themcoupon','uses'=>'CouponController@postAddCoupon']);
        Route::get("danh-sach",['as'=>'listcoupon','uses'=>'CouponController@getListCoupon']);
    });
});

//fontend
Route::get("admin",function (){
    return view('admin.index');
});
