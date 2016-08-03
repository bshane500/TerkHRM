var elixir = require('laravel-elixir');

var adminLte =  'node_modules/admin-lte/';
var adminPlugins = adminLte+'plugins/';

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
    mix.copy('resources/assets/js/init.js','public/js');
    mix.copy('resources/assets/css/styles.css','public/css');
    mix.scripts([
        'bootstrap/js/bootstrap.min.js',
        adminPlugins+'datatables/jquery.dataTables.min.js',
        adminPlugins+'datatables/dataTables.bootstrap.min.js',
        adminPlugins+'select2/select2.full.js',
        adminPlugins+'iCheck/icheck.min.js',
        adminPlugins+'date_picker/picker.js',
        adminPlugins+'date_picker/picker.date.js',
        adminPlugins+'fullcalendar/fullcalendar.js',
        adminPlugins+'bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js',
        adminPlugins+'datepicker/bootstrap-datepicker.js',
        'dist/js/app.js'
    ],'public/js/app.js',adminLte);
    mix.styles([
        adminPlugins+'select2/select2.css',
        adminPlugins+'iCheck/square/blue.css',
        /*adminPlugins+'date_picker/themes/default.date.css',
        adminPlugins+'date_picker/themes/default.css',*/
        adminPlugins+'fullcalendar/fullcalendar.css',
        adminPlugins+'bootstrap-wysihtml5/bootstrap3-wysihtml5.css',
        adminPlugins+'datepicker/datepicker3.css',
        adminPlugins+'datatables/dataTables.bootstrap.css',
        'dist/css/adminLTE.css',
        'dist/css/skins/_all-skins.css'
    ],'public/css/app.css',adminLte)
});
