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

 mix
    // .styles([
    //     'source/_assets/css/bootstrap.min.css',
    //     'source/_assets/css/owl.carousel.css',
    //     'source/_assets/css/owl.transitions.css',
    //     'source/_assets/css/animate.css',
    //     'source/_assets/css/meanmenu.min.css',
    //     'source/_assets/css/font-awesome.min.css',
    //     'source/_assets/css/themify-icons.css',
    //     'source/_assets/css/flaticon.css',
    //     'source/_assets/css/magnific.min.css',
    //     'source/_assets/css/style.css',
    //     'source/_assets/css/responsive.css',
    // ], 'css/vendor.css')
    .copyDirectory('source/_assets/css', mix.config.publicPath + '/css')
    .sass('source/_assets/sass/main.scss', 'css')
    // .scripts([
    //     'source/_assets/js/vendor/jquery-1.12.4.min.js',
    //     'source/_assets/js/bootstrap.min.js',
    //     'source/_assets/js/owl.carousel.min.js',
    //     'source/_assets/js/jquery.stellar.min.js',
    //     'source/_assets/js/jquery.counterup.min.js',
    //     'source/_assets/js/waypoints.js',
    //     'source/_assets/js/magnific.min.js',
    //     'source/_assets/js/wow.min.js',
    //     'source/_assets/js/jquery.meanmenu.js',
    //     'source/_assets/js/form-validator.min.js',
    //     'source/_assets/js/plugins.js',
    //     'source/_assets/js/nishflu.js',
    // ], 'js/vendor.js')
    .copyDirectory('source/_assets/js', mix.config.publicPath + '/js')
    .js('source/_assets/js/main.js', 'js')
    .copyDirectory('source/_assets/files', mix.config.publicPath + '/files')
    .copyDirectory('source/_assets/fonts', mix.config.publicPath + '/fonts')
    .copyDirectory('source/_assets/img', mix.config.publicPath + '/img')
    .options({
        processCssUrls: false,
    })
    .version();
