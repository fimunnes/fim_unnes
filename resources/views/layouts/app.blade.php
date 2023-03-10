<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard Fimnas</title>

    <meta name="description" content="" />

   <x-style></x-style>
   @livewireStyles
   @notifyCss
  </head>

  <body>
    <!-- Content -->
 <!-- Layout wrapper -->
 <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        
        <x-aside></x-aside>

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <div style="z-index: 10000">
            <x:notify-messages />
          </div>
          <x-navbar></x-navbar>

          <!-- / Navbar -->
          
          <!-- Content wrapper -->
          @yield('content')
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
   
    <x-script></x-script>
    @livewireScripts
    @notifyJs
  </body>
</html>