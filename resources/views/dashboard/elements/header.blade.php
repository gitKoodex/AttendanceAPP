<?php
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\App;
    App::setLocale('fa');
    $locale = App::currentLocale();
?>
<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8"/>
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
    <meta content="ie=edge" http-equiv="x-ua-compatible"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Material Design for Bootstrap</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"/>
    <noscript>
        <link href="{{url('/')}}/dashboard/css/jquery.fileupload-noscript.css" rel="stylesheet"/>
    </noscript>
    <noscript>
        <link href="{{url('/')}}/dashboard/css/jquery.fileupload-ui-noscript.css" rel="stylesheet"/>
    </noscript>
    <link href="{{url('/')}}/dashboard/css/style.css" rel="stylesheet">
    @yield('extracss')
</head>
