<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KodexAdminController extends Controller
{
    public function dashboard_1()
    {


        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
        $active="active";
        $event_class="schedule-event";
        $button_class="btn-primary";


        return view('dashboard.acounter.acounter', compact('page_title', 'page_description','logo','logoText','active','event_class','button_class'));
    }

     // Ajax Featured Menu List
    public function featured_menu_list()
    {
        return view('dashboard.featured_menu_list');
    }

    // Workout Statistic
    public function workout_statistic()
    {

        $page_title = 'Workout Statistic';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";



        return view('dashboard.workout_statistic', compact('page_title', 'page_description','logo','logoText'));
    }

	     // Workoutplan
    public function workoutplan()
    {
        $page_title = 'Workout Plan';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";



        return view('dashboard.workoutplan', compact('page_title', 'page_description','logo','logoText'));
    }
	    // Distance Map
    public function distance_map()
    {
        $page_title = 'Distance Map';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";



        return view('dashboard.distance_map', compact('page_title', 'page_description','logo','logoText'));
    }

     // Ajax Recent Activities
    public function recent_activities()
    {
        return view('dashboard.recent_activities');
    }
	    // Food Menu
    public function food_menu()
    {
        $page_title = 'Statistics';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";



        return view('dashboard.food_menu', compact('page_title', 'page_description','logo','logoText'));
    }

     // Ajax Food Menu List
    public function food_menu_list()
    {
        return view('dashboard.food_menu_list');
    }

     // Ajax Trending Ingridients
    public function trending_ingridients()
    {
        return view('dashboard.trending_ingridients');
    }
	    // Personal Record
    public function personal_record()
    {
        $page_title = 'Companies';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";



        return view('dashboard.personal_record', compact('page_title', 'page_description','logo','logoText'));
    }
	    // Calender
    public function app_calender()
    {
        $page_title = 'Calender';
        $page_description = 'Some description for the page';



        return view('app.calender', compact('page_title', 'page_description'));
    }

	    // Profile
    public function app_profile()
    {
        $page_title = 'Profile';
        $page_description = 'Some description for the page';



        return view('app.profile', compact('page_title', 'page_description'));
    }
	    // Post Details
    public function post_details()
    {
        $page_title = 'Post Details';
        $page_description = 'Some description for the page';



        return view('app.post_details', compact('page_title', 'page_description'));
    }

	    // Chart Chartist
    public function chart_chartist()
    {
        $page_title = 'Chart Chartist';
        $page_description = 'Some description for the page';


        return view('chart.chartist', compact('page_title', 'page_description'));
    }

	    // Chart Chartjs
    public function chart_chartjs()
    {
        $page_title = 'Chart Chartjs';
        $page_description = 'Some description for the page';



        return view('chart.chartjs', compact('page_title', 'page_description'));
    }

	    // Chart Flot
    public function chart_flot()
    {
        $page_title = 'Chart Flot';
        $page_description = 'Some description for the page';



        return view('chart.flot', compact('page_title', 'page_description'));
    }

	    // Chart Morris
    public function chart_morris()
    {
        $page_title = 'Chart Morris';
        $page_description = 'Some description for the page';



        return view('chart.morris', compact('page_title', 'page_description'));
    }

	    // Chart Peity
    public function chart_peity()
    {
        $page_title = 'Chart Peity';
        $page_description = 'Some description for the page';



        return view('chart.peity', compact('page_title', 'page_description'));
    }

	    // Chart Sparkline
    public function chart_sparkline()
    {
        $page_title = 'Chart Sparkline';
        $page_description = 'Some description for the page';



        return view('chart.sparkline', compact('page_title', 'page_description'));
    }

	    // Ecommerce Checkout
    public function ecom_checkout()
    {
        $page_title = 'Checkout';
        $page_description = 'Some description for the page';



        return view('ecom.checkout', compact('page_title', 'page_description'));
    }

	    // Ecommerce Customers
    public function ecom_customers()
    {
        $page_title = 'Ecom Customers';
        $page_description = 'Some description for the page';



        return view('ecom.customers', compact('page_title', 'page_description'));
    }

	    // Ecommerce Invoice
    public function ecom_invoice()
    {
        $page_title = 'Invoice';
        $page_description = 'Some description for the page';



        return view('ecom.invoice', compact('page_title', 'page_description'));
    }

	    // Ecommerce Product Detail
    public function ecom_product_detail()
    {
        $page_title = 'Product Detail';
        $page_description = 'Some description for the page';



        return view('ecom.productdetail', compact('page_title', 'page_description'));
    }

	    // Ecommerce Product Grid
    public function ecom_product_grid()
    {
        $page_title = 'Product Grid';
        $page_description = 'Some description for the page';



        return view('ecom.productgrid', compact('page_title', 'page_description'));
    }

	    // Ecommerce Product List
    public function ecom_product_list()
    {
        $page_title = 'Product List';
        $page_description = 'Some description for the page';



        return view('ecom.productlist', compact('page_title', 'page_description'));
    }

	    // Ecommerce Product Order
    public function ecom_product_order()
    {
        $page_title = 'Product Order';
        $page_description = 'Some description for the page';



        return view('ecom.productorder', compact('page_title', 'page_description'));
    }

	    // Email Compose
    public function email_compose()
    {
        $page_title = 'Compose';
        $page_description = 'Some description for the page';



        return view('message.compose', compact('page_title', 'page_description'));
    }

	    // Email Inbox
    public function email_inbox()
    {
        $page_title = 'Inbox';
        $page_description = 'Some description for the page';



        return view('message.inbox', compact('page_title', 'page_description'));
    }

	    // Email Read
    public function email_read()
    {
        $page_title = 'Read';
        $page_description = 'Some description for the page';



        return view('message.read', compact('page_title', 'page_description'));
    }

	    // Form Editor Summernote
    public function form_editor_summernote()
    {
        $page_title = 'Summernote Editor';
        $page_description = 'Some description for the page';



        return view('form.editorsummernote', compact('page_title', 'page_description'));
	}

	    // Form Element
    public function form_element()
    {
        $page_title = 'Form Element';
        $page_description = 'Some description for the page';



        return view('form.element', compact('page_title', 'page_description'));
    }

	    // Form Pickers
    public function form_pickers()
    {
        $page_title = 'Form Pickers';
        $page_description = 'Some description for the page';



        return view('form.pickers', compact('page_title', 'page_description'));
    }

	    // Form Validation Jquery
    public function form_validation_jquery()
    {
        $page_title = 'Form Validation';
        $page_description = 'Some description for the page';



        return view('form.validationjquery', compact('page_title', 'page_description'));
    }

	    // Form Wizard
    public function form_wizard()
    {
        $page_title = 'Form Wizard';
        $page_description = 'Some description for the page';



        return view('form.wizard', compact('page_title', 'page_description'));
    }


	    // Map Jqvmap
    public function map_jqvmap()
    {
        $page_title = 'Map Jqvmap';
        $page_description = 'Some description for the page';



        return view('map.jqvmap', compact('page_title', 'page_description'));
    }

	    // Page Error 400
    public function page_error_400()
    {
        $page_title = 'Page Error 400';
        $page_description = 'Some description for the page';



        return view('page.error400', compact('page_title', 'page_description'));
    }

	    // Page Error 403
    public function page_error_403()
    {
        $page_title = 'Page Error 403';
        $page_description = 'Some description for the page';



        return view('page.error403', compact('page_title', 'page_description'));
    }

	    // Page Error 404
    public function page_error_404()
    {
        $page_title = 'Page Error 404';
        $page_description = 'Some description for the page';



        return view('page.error404', compact('page_title', 'page_description'));
    }

	    // Page Error 500
    public function page_error_500()
    {
        $page_title = 'Page Error 500';
        $page_description = 'Some description for the page';



        return view('page.error500', compact('page_title', 'page_description'));
    }

	    // Page Error 503
    public function page_error_503()
    {
        $page_title = 'Page Error 503';
        $page_description = 'Some description for the page';



        return view('page.error503', compact('page_title', 'page_description'));
    }

	    // Page Forgot Password
    public function page_forgot_password()
    {
        $page_title = 'Page Forgot Password';
        $page_description = 'Some description for the page';



        return view('page.forgot_password', compact('page_title', 'page_description'));
    }

	    // Page Lock Screen
    public function page_lock_screen()
    {
        $page_title = 'Page Lock Screen';
        $page_description = 'Some description for the page';



        return view('page.lockscreen', compact('page_title', 'page_description'));
    }

	    // Page Login
    public function page_login()
    {
        $page_title = 'Page Login';
        $page_description = 'Some description for the page';



        return view('page.login', compact('page_title', 'page_description'));
    }

	    // Page Register
    public function page_register()
    {
        $page_title = 'Page Register';
        $page_description = 'Some description for the page';



        return view('page.register', compact('page_title', 'page_description'));
    }

	    // Table Bootstrap Basic
    public function table_bootstrap_basic()
    {
        $page_title = 'Table Basic';
        $page_description = 'Some description for the page';

        return view('table.bootstrapbasic', compact('page_title', 'page_description'));
    }

	    // Table Datatable Basic
    public function table_datatable_basic()
    {
        $page_title = 'Table Datatable';
        $page_description = 'Some description for the page';



        return view('table.datatablebasic', compact('page_title', 'page_description'));
    }
	    // UC Nestable.
    public function uc_nestable()
    {
        $page_title = 'Nestable';
        $page_description = 'Some description for the page';



        return view('uc.nestable', compact('page_title', 'page_description'));
    }
	    // UC Lightgallery.
    public function uc_lightgallery()
    {
        $page_title = 'Lightgallery';
        $page_description = 'Some description for the page';



        return view('uc.lightgallery', compact('page_title', 'page_description'));
    }

	    // UC NoUi Slider
    public function uc_noui_slider()
    {
        $page_title = 'Noui Slider';
        $page_description = 'Some description for the page';



        return view('uc.nouislider', compact('page_title', 'page_description'));
    }

	    // UC Select2
    public function uc_select2()
    {
        $page_title = 'Select2';
        $page_description = 'Some description for the page';



        return view('uc.select2', compact('page_title', 'page_description'));
    }

	    // UC Sweetalert
    public function uc_sweetalert()
    {
        $page_title = 'Sweetalert';
        $page_description = 'Some description for the page';



        return view('uc.sweetalert', compact('page_title', 'page_description'));
    }

	    // UC Toastr
    public function uc_toastr()
    {
        $page_title = 'Toastr';
        $page_description = 'Some description for the page';



        return view('uc.toastr', compact('page_title', 'page_description'));
    }

	    // Ui Accordion
    public function ui_accordion()
    {
        $page_title = 'Accordion';
        $page_description = 'Some description for the page';



        return view('ui.accordion', compact('page_title', 'page_description'));
    }

	    // Ui Alert
    public function ui_alert()
    {
        $page_title = 'Alert';
        $page_description = 'Some description for the page';



        return view('ui.alert', compact('page_title', 'page_description'));
    }

	    // Ui Badge
    public function ui_badge()
    {
        $page_title = 'Badge';
        $page_description = 'Some description for the page';



        return view('ui.badge', compact('page_title', 'page_description'));
    }

	    // Ui Button
    public function ui_button()
    {
        $page_title = 'Button';
        $page_description = 'Some description for the page';



        return view('ui.button', compact('page_title', 'page_description'));
    }

	    // Ui Button Group
    public function ui_button_group()
    {
        $page_title = 'Button Group';
        $page_description = 'Some description for the page';



        return view('ui.buttongroup', compact('page_title', 'page_description'));
    }

	    // Ui Card
    public function ui_card()
    {
        $page_title = 'Card';
        $page_description = 'Some description for the page';



        return view('ui.card', compact('page_title', 'page_description'));
    }

	    // Ui Carousel
    public function ui_carousel()
    {
        $page_title = 'Carousel';
        $page_description = 'Some description for the page';



        return view('ui.carousel', compact('page_title', 'page_description'));
    }

	    // Ui Dropdown
    public function ui_dropdown()
    {
        $page_title = 'Dropdown';
        $page_description = 'Some description for the page';



        return view('ui.dropdown', compact('page_title', 'page_description'));
    }

	    // Ui Grid
    public function ui_grid()
    {
        $page_title = 'Grid';
        $page_description = 'Some description for the page';



        return view('ui.grid', compact('page_title', 'page_description'));
    }

	    // Ui List Group
    public function ui_list_group()
    {
        $page_title = 'List Group';
        $page_description = 'Some description for the page';



        return view('ui.listgroup', compact('page_title', 'page_description'));
    }

	    // Ui Media Object
    public function ui_media_object()
    {
        $page_title = 'Media Object';
        $page_description = 'Some description for the page';



        return view('ui.mediaobject', compact('page_title', 'page_description'));
    }

	    // Ui Modal
    public function ui_modal()
    {
        $page_title = 'Modal';
        $page_description = 'Some description for the page';



        return view('ui.modal', compact('page_title', 'page_description'));
    }

	    // Ui Pagination
    public function ui_pagination()
    {
        $page_title = 'Pagination';
        $page_description = 'Some description for the page';



        return view('ui.pagination', compact('page_title', 'page_description'));
    }

	    // Ui Popover
    public function ui_popover()
    {
        $page_title = 'Popover';
        $page_description = 'Some description for the page';



        return view('ui.popover', compact('page_title', 'page_description'));
    }

	    // Ui Progressbar
    public function ui_progressbar()
    {
        $page_title = 'Progressbar';
        $page_description = 'Some description for the page';



        return view('ui.progressbar', compact('page_title', 'page_description'));
    }

	    // Ui Tab
    public function ui_tab()
    {
        $page_title = 'Tab';
        $page_description = 'Some description for the page';



        return view('ui.tab', compact('page_title', 'page_description'));
    }


	    // Ui Typography
    public function ui_typography()
    {
        $page_title = 'Typography';
        $page_description = 'Some description for the page';



        return view('ui.typography', compact('page_title', 'page_description'));
    }

	    // Widget Basic
    public function widget_basic()
    {
        $page_title = 'Widget';
        $page_description = 'Some description for the page';



        return view('widget.widget_basic', compact('page_title', 'page_description'));
    }

    public function reports(){
        $page_title = 'گزارشات';
        $page_description = 'گزارشات روزانه شما از آخر به اول لیست شده اند';
        return view('dashboard.report.reports', compact('page_title', 'page_description'));
    }

    public function addReport(){
        $page_title = 'افزودن گزارش کار';
        $page_description = 'گزارش کار روزانه خود را اضافه کنید.';
        return view('dashboard.report.addreport', compact('page_title', 'page_description'));
    }
    public function getReportImg(Request $request){
        $data = array();

        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
        ]);

        if ($validator->fails()) {
            $data['success'] = 0;
            $data['error'] = $validator->errors()->first('file');// Error response
        }else{
            if($request->file('file')) {

                $file = $request->file('file');
                $filename = gnerate_img_file_name();

                // File extension
                $extension = $file->getClientOriginalExtension();
                $filename = $filename.".".$extension;
                // File upload location
                $location = 'files';

                // Upload file
                $file->move($location,$filename);

                // File path
                $filepath = url('files/'.$filename);

                // Response
                $data['success'] = 1;
                $data['message'] = 'Uploaded Successfully!';
                $data['filepath'] = $filepath;
                $data['extension'] = $extension;
            }else{
                // Response
                $data['success'] = 2;
                $data['message'] = 'File not uploaded.';
            }
        }

        return response()->json($data);

    }
}
