     var elixir = require('laravel-elixir');

var packages = 'node_modules/',
    adminLte = 'admin-lte/',
    adminPlugins = adminLte + 'plugins/';




/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    /*
    |--------------------------------------------------------------------------
    | Copy Required assets to public folder
    |--------------------------------------------------------------------------
    */
    mix.copy('resources/assets/js/init.js','public/js');
    mix.copy('resources/assets/css/styles.css','public/css');
    mix.copy(packages+adminPlugins+'jQuery','public/js/jQuery');
    mix.copy(packages+adminPlugins+'bootstrap','public/bootstrap');
    mix.copy(packages+adminPlugins+'jQueryUI','public/js/jQueryUI');
    mix.copy(packages+adminPlugins+'daterangepicker/moment.min.js','public/js');
    mix.copy(packages+'toastr/build/toastr.min.js','public/js');
    mix.copy(packages+'toastr/build/toastr.css','public/css');
    /*
    |--------------------------------------------------------------------------
    | Mix admin-LTE Template plugins  (JS)
    |--------------------------------------------------------------------------
    */
    mix.scripts([
        adminLte+'bootstrap/js/bootstrap.min.js',
        adminPlugins+'datatables/jquery.dataTables.min.js',
        adminPlugins+'datatables/dataTables.bootstrap.min.js',
        adminPlugins+'select2/select2.js',
        adminPlugins+'iCheck/icheck.min.js',
        adminPlugins+'fullcalendar/fullcalendar.js',
        adminPlugins+'bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js',
        adminPlugins+'datepicker/bootstrap-datepicker.js',
        adminLte+'dist/js/app.js'
    ],'public/js/app.js',packages);
    /*
    |--------------------------------------------------------------------------
    | Mix admin-LTE Template plugins (CSS)
    |--------------------------------------------------------------------------
    */
    mix.styles([

        adminPlugins+'iCheck/square/_all.css',
        adminPlugins+'fullcalendar/fullcalendar.css',
        adminPlugins+'bootstrap-wysihtml5/bootstrap3-wysihtml5.css',
        adminPlugins+'datepicker/datepicker3.css',
        adminPlugins+'datatables/dataTables.bootstrap.css',
        adminLte+'dist/css/adminLTE.min.css',
        adminPlugins+'select2/select2.css',
        adminLte+'dist/css/skins/_all-skins.css'
    ],'public/css/app.css',packages)
});
