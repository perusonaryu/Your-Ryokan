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
  <style>
    #app{
      overflow: hidden;
    }
  </style>
</head>


<body style="width:100%; height:100%;">
  <div class="content" id="app" style="width:100%; height:100%;">
    <v-app style="width:100%; height:100%;">
      <header-component></header-component>
      <router-view></router-view>
      <footer-component></footer-component>

    </v-app>
  </div>
  <script src="{{mix('js/app.js')}}"></script>
</body>
</html>