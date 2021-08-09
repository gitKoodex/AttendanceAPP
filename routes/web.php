<?php

use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/', 'App\Http\Controllers\GymoveadminController@dashboard_1');
Route::get('/index', 'App\Http\Controllers\GymoveadminController@dashboard_1');
Route::get('/form-editor-summernote', 'App\Http\Controllers\GymoveadminController@form_editor_summernote');
Route::get('/form-element', 'App\Http\Controllers\GymoveadminController@form_element');
Route::get('/form-pickers', 'App\Http\Controllers\GymoveadminController@form_pickers');
Route::get('/form-validation-jquery', 'App\Http\Controllers\GymoveadminController@form_validation_jquery');
Route::get('/form-wizard', 'App\Http\Controllers\GymoveadminController@form_wizard');
Route::get('/workout-statistic', 'App\Http\Controllers\GymoveadminController@workout_statistic');
Route::get('/workoutplan', 'App\Http\Controllers\GymoveadminController@workoutplan');
Route::get('/distance-map', 'App\Http\Controllers\GymoveadminController@distance_map');
Route::get('/food-menu', 'App\Http\Controllers\GymoveadminController@food_menu');
Route::get('/personal-record', 'App\Http\Controllers\GymoveadminController@personal_record');
Route::get('/reports', 'App\Http\Controllers\GymoveadminController@reports');
Route::get('/add-report', 'App\Http\Controllers\GymoveadminController@addReport');



//Route::post('/featured-menu-list', 'App\Http\Controllers\GymoveadminController@featured_menu_list');
//Route::post('/recent-activities', 'App\Http\Controllers\GymoveadminController@recent_activities');
//Route::post('/food-menu-list', 'App\Http\Controllers\GymoveadminController@food_menu_list');
//Route::post('/trending-ingridients', 'App\Http\Controllers\GymoveadminController@trending_ingridients');
//Route::get('/app-calender', 'App\Http\Controllers\GymoveadminController@app_calender');
//Route::get('/app-profile', 'App\Http\Controllers\GymoveadminController@app_profile');
//Route::get('/post-details', 'App\Http\Controllers\GymoveadminController@post_details');
//Route::get('/chart-chartist', 'App\Http\Controllers\GymoveadminController@chart_chartist');
//Route::get('/chart-chartjs', 'App\Http\Controllers\GymoveadminController@chart_chartjs');
//Route::get('/chart-flot', 'App\Http\Controllers\GymoveadminController@chart_flot');
//Route::get('/chart-morris', 'App\Http\Controllers\GymoveadminController@chart_morris');
//Route::get('/chart-peity', 'App\Http\Controllers\GymoveadminController@chart_peity');
//Route::get('/chart-sparkline', 'App\Http\Controllers\GymoveadminController@chart_sparkline');
//Route::get('/ecom-checkout', 'App\Http\Controllers\GymoveadminController@ecom_checkout');
//Route::get('/ecom-customers', 'App\Http\Controllers\GymoveadminController@ecom_customers');
//Route::get('/ecom-invoice', 'App\Http\Controllers\GymoveadminController@ecom_invoice');
//Route::get('/ecom-product-detail', 'App\Http\Controllers\GymoveadminController@ecom_product_detail');
//Route::get('/ecom-product-grid', 'App\Http\Controllers\GymoveadminController@ecom_product_grid');
//Route::get('/ecom-product-list', 'App\Http\Controllers\GymoveadminController@ecom_product_list');
//Route::get('/ecom-product-order', 'App\Http\Controllers\GymoveadminController@ecom_product_order');
//Route::get('/email-compose', 'App\Http\Controllers\GymoveadminController@email_compose');
//Route::get('/email-inbox', 'App\Http\Controllers\GymoveadminController@email_inbox');
//Route::get('/email-read', 'App\Http\Controllers\GymoveadminController@email_read');
//Route::get('/map-jqvmap', 'App\Http\Controllers\GymoveadminController@map_jqvmap');
//Route::get('/page-error-400', 'App\Http\Controllers\GymoveadminController@page_error_400');
//Route::get('/page-error-403', 'App\Http\Controllers\GymoveadminController@page_error_403');
//Route::get('/page-error-404', 'App\Http\Controllers\GymoveadminController@page_error_404');
//Route::get('/page-error-500', 'App\Http\Controllers\GymoveadminController@page_error_500');
//Route::get('/page-error-503', 'App\Http\Controllers\GymoveadminController@page_error_503');
//Route::get('/page-forgot-password', 'App\Http\Controllers\GymoveadminController@page_forgot_password');
//Route::get('/page-lock-screen', 'App\Http\Controllers\GymoveadminController@page_lock_screen');
//Route::get('/page-login', 'App\Http\Controllers\GymoveadminController@page_login');
//Route::get('/page-register', 'App\Http\Controllers\GymoveadminController@page_register');
//Route::get('/table-bootstrap-basic', 'App\Http\Controllers\GymoveadminController@table_bootstrap_basic');
//Route::get('/table-datatable-basic', 'App\Http\Controllers\GymoveadminController@table_datatable_basic');
//Route::get('/uc-lightgallery', 'App\Http\Controllers\GymoveadminController@uc_lightgallery');
//Route::get('/uc-nestable', 'App\Http\Controllers\GymoveadminController@uc_nestable');
//Route::get('/uc-noui-slider', 'App\Http\Controllers\GymoveadminController@uc_noui_slider');
//Route::get('/uc-select2', 'App\Http\Controllers\GymoveadminController@uc_select2');
//Route::get('/uc-sweetalert', 'App\Http\Controllers\GymoveadminController@uc_sweetalert');
//Route::get('/uc-toastr', 'App\Http\Controllers\GymoveadminController@uc_toastr');
//Route::get('/ui-accordion', 'App\Http\Controllers\GymoveadminController@ui_accordion');
//Route::get('/ui-alert', 'App\Http\Controllers\GymoveadminController@ui_alert');
//Route::get('/ui-badge', 'App\Http\Controllers\GymoveadminController@ui_badge');
//Route::get('/ui-button', 'App\Http\Controllers\GymoveadminController@ui_button');
//Route::get('/ui-button-group', 'App\Http\Controllers\GymoveadminController@ui_button_group');
//Route::get('/ui-card', 'App\Http\Controllers\GymoveadminController@ui_card');
//Route::get('/ui-carousel', 'App\Http\Controllers\GymoveadminController@ui_carousel');
//Route::get('/ui-dropdown', 'App\Http\Controllers\GymoveadminController@ui_dropdown');
//Route::get('/ui-grid', 'App\Http\Controllers\GymoveadminController@ui_grid');
//Route::get('/ui-list-group', 'App\Http\Controllers\GymoveadminController@ui_list_group');
//Route::get('/ui-media-object', 'App\Http\Controllers\GymoveadminController@ui_media_object');
//Route::get('/ui-modal', 'App\Http\Controllers\GymoveadminController@ui_modal');
//Route::get('/ui-pagination', 'App\Http\Controllers\GymoveadminController@ui_pagination');
//Route::get('/ui-popover', 'App\Http\Controllers\GymoveadminController@ui_popover');
//Route::get('/ui-progressbar', 'App\Http\Controllers\GymoveadminController@ui_progressbar');
//Route::get('/ui-tab', 'App\Http\Controllers\GymoveadminController@ui_tab');
//Route::get('/ui-typography', 'App\Http\Controllers\GymoveadminController@ui_typography');
//Route::get('/widget-basic', 'App\Http\Controllers\GymoveadminController@widget_basic');



