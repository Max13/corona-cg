let mix = require('laravel-mix');
let build = require('./tasks/build.js');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch(['source/**/*.md', 'source/**/*.php', 'source/**/*.scss', '!source/**/_tmp/*']),
    ]
});

 mix.copyDirectory('source/_assets/files', mix.config.publicPath + '/files')
    .copyDirectory('source/_assets/fonts', mix.config.publicPath + '/fonts')
    .copyDirectory('source/_assets/img', mix.config.publicPath + '/img')
    .styles([
        'source/_assets/css/bootstrap.min.css',
        'source/_assets/css/owl.carousel.css',
        'source/_assets/css/owl.transitions.css',
        'source/_assets/css/animate.css',
        'source/_assets/css/meanmenu.min.css',
        'source/_assets/css/font-awesome.min.css',
        'source/_assets/css/themify-icons.css',
        'source/_assets/css/flaticon.css',
        'source/_assets/css/magnific.min.css',
        'source/_assets/css/nishflu.css',
        'source/_assets/css/responsive.css',
    ], mix.config.publicPath + '/css/vendor.css')
    .sass('source/_assets/sass/main.scss', 'css')
    .scripts([
        'source/_assets/js/jquery-1.12.4.min.js',
        'source/_assets/js/bootstrap.min.js',
        'source/_assets/js/owl.carousel.min.js',
        'source/_assets/js/jquery.stellar.min.js',
        'source/_assets/js/jquery.counterup.min.js',
        'source/_assets/js/waypoints.js',
        'source/_assets/js/magnific.min.js',
        'source/_assets/js/wow.min.js',
        'source/_assets/js/jquery.meanmenu.js',
        'source/_assets/js/form-validator.min.js',
        'source/_assets/js/plugins.js',
        'source/_assets/js/nishflu.js',
    ], mix.config.publicPath + '/js/vendor.js')
    .js('source/_assets/js/modernizr-2.8.3.min.js', 'js')
    .js('source/_assets/js/main.js', 'js')
    .options({
        processCssUrls: false,
    })
    .version();
