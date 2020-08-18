// fix problems with undefined Promise class
// http://stackoverflow.com/questions/32490328/gulp-autoprefixer-throwing-referenceerror-promise-is-not-defined
require('es6-promise').polyfill();

// Load plugins
var gulp = require('gulp');
var $ = require('gulp-load-plugins')();
var browsersync = require('browser-sync');
var yaml = require('js-yaml');
var fs = require('fs');
var rimraf = require('rimraf');
var touch = require('gulp-touch-fd');

// Load settings from config.yml
var config = loadConfig();

function loadConfig() {
    ymlFile = fs.readFileSync('config.yml', 'utf8');
    return yaml.load(ymlFile);
}

var sassOptions = {
    errLogToConsole: true,
    outputStyle: 'expanded',
    includePaths: config.PATHS.sass
};

var autoprefixerOptions = {
    overrideBrowserslist: config.COMPATIBILITY
};

// Styles
function styles() {
    return gulp.src(config.PATHS.src +'/scss/*.scss')
        .pipe($.sourcemaps.init())
        .pipe($.sass(sassOptions).on('error', $.sass.logError))
        .pipe($.autoprefixer(autoprefixerOptions))
        .pipe($.rename({ suffix: '.min' })
        .pipe($.cssnano()))
        .pipe($.sourcemaps.write('.', { sourceRoot: '../../assets/src/scss/' }))
        .pipe(gulp.dest(config.PATHS.dist + '/css'))
        .pipe(touch())
        .pipe(browsersync.stream())
        .pipe($.notify({ message: 'Styles task complete' }));
};

// secondary Styles
function secondary_styles() {
    return gulp.src(config.PATHS.src + '/scss/*.css')
        .pipe($.sourcemaps.init())
        //.pipe($.sass(sassOptions).on('error', $.sass.logError))
        .pipe($.autoprefixer(autoprefixerOptions))
        //.pipe($.rename({ suffix: '.min' })
        //    .pipe($.cssnano()))
        .pipe($.sourcemaps.write('.', { sourceRoot: '../../assets/src/scss/' }))
        .pipe(gulp.dest(config.PATHS.dist + '/css'))
        .pipe(touch())
        .pipe(browsersync.stream())
        .pipe($.notify({ message: 'Secondary Styles task complete' }));
};


// Scripts
function scripts() {
    return gulp.src(config.PATHS.javascript)
        .pipe($.sourcemaps.init())
        .pipe($.concat('main.js'))
        .pipe($.rename({ suffix: '.min' }))
        .pipe( $.uglify())
        .pipe($.sourcemaps.write('.', { sourceRoot: '../../assets/src/js/' }))
        .pipe(gulp.dest(config.PATHS.dist + '/js'))
        .pipe(touch())
        .pipe($.notify({ message: 'Scripts task complete' }));
};

// secondary scripts
function scripts_individual() {
    return gulp.src(config.PATHS.src + '/js/*/*.js')
        .pipe($.sourcemaps.init())
        //.pipe($.concat('main.js'))
        .pipe($.rename({ suffix: '.min' }))
        .pipe($.uglify())
        .pipe($.sourcemaps.write('.', { sourceRoot: '../../assets/src/js/' }))
        .pipe(gulp.dest(config.PATHS.dist + '/js'))
        .pipe(touch())
        .pipe($.notify({ message: 'Secondary Scripts task complete' }));
};

// third scripts
function scripts_individuals() {
    return gulp.src(config.PATHS.src + '/js/*.js')
        .pipe($.sourcemaps.init())
        //.pipe($.concat('main.js'))
        .pipe($.rename({ suffix: '.min' }))
        .pipe($.uglify())
        .pipe($.sourcemaps.write('.', { sourceRoot: '../../assets/src/js/' }))
        .pipe(gulp.dest(config.PATHS.dist + '/js'))
        .pipe(touch())
        .pipe($.notify({ message: 'Third Scripts task complete' }));
};

// sprites
function sprites() {
    var spriteData = gulp.src('data/avatars/*')
        .pipe($.spritesmith({
            imgName: 'sprite.png',
            imgPath: '../../../image/sprite.png',
            cssName: 'contributors.css',
            padding: 2
        }));
    spriteData.img.pipe(gulp.dest('web/image'));
    spriteData.css.pipe(gulp.dest(config.PATHS.src + '/scss/2-vendors'));
    return spriteData;
};


// Clean
function clean(done) {

    //return gulp.src('.').pipe($.nop());
    rimraf(config.PATHS.dist, done);
}

// The main build task
gulp.task('build', gulp.series(
    clean,
    sprites,
    gulp.parallel(styles, secondary_styles, scripts, scripts_individual, scripts_individuals)
));

// Watch
function watch() {

    // Initialize Browsersync
    browsersync.init({
        proxy: config.PROXY
    });

    // Watch .scss files
    gulp.watch(config.PATHS.src + '/scss/**/*.scss', styles);
    // Watch .js files
    gulp.watch(config.PATHS.src + '/js/**/*.js', scripts);
    // Watch any view files in 'views', reload on change
    gulp.watch(['views/**/*.php']).on('change', browsersync.reload);
    // Watch any files in 'assets/dist', reload on change
    gulp.watch([config.PATHS.dist + '/js/*']).on('change', browsersync.reload);
    gulp.watch([config.PATHS.dist + '/css/*']).on('change', browsersync.reload);
};

// Default task runs build and then watch
gulp.task('default', gulp.series('build', watch));

// Export these functions to the Gulp client
gulp.task('clean', clean);
gulp.task('styles', styles);

//gulp.task('scripts', scripts);
gulp.task('sprites', sprites);