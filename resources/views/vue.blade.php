<!DOCTYPE html>
<html lang="{{ config('app.locale')}}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Laravel + Vue</title>
  <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <base href="<?php echo url('/');?>">
</head>


<body style="height:100%;">
  <div id="app" style="height:100%;">
    <v-app style="margin-top:64px;">
      <header-component></header-component>
      <router-view></router-view>
      <footer-component></footer-component>

    </v-app>
  </div>
  <script src="{{mix('js/app.js')}}"></script>
</body>
</html>