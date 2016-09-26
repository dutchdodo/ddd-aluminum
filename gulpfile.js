var gulp        = require('gulp');

// Project plugins
var sass         = require('gulp-sass'); // CSS compiling
//var minifyCss    = require('gulp-minify-css');
var cleanCSS     = require('gulp-clean-css') // CSS minify and cleanup comments
var autoprefixer = require('gulp-autoprefixer'); // CSS prefix
var uncss        = require('gulp-uncss'); // CSS Stripping unused selectors
var sourcemaps   = require('gulp-sourcemaps'); // CSS Sourcemaps

var concat       = require('gulp-concat'); // JS concatenate
var uglify       = require('gulp-uglify'); // JS uglify

var rev          = require('gulp-rev'); // versioning, appending hash
var replace      = require('gulp-replace-task'); // versioning, replace text patterns
var collect      = require('gulp-rev-collector'); // versioning, replace links in html

var imagemin     = require('gulp-imagemin'); // imageOpt, Minify PNG, JPEG, GIF and SVG images
var pngquant     = require('imagemin-pngquant'); // imageOpt,
//var imageOpt    = require('gulp-image-optimization'); // Img smaller images

var browserSync  = require('browser-sync').create(); // dev browser reload


// Configuration
var themeName = 'ddd-alumnium';
var themePath = ''; // Directly in the root
var distPath  = themePath + 'dist';
var assetPath = themePath + 'assets';

gulp.task(
  'default',
  [
    'compile-styles',
    'compile-scripts',
    'compile-fonts',
    'compile-images',
    'compile-templates',
    'browser-sync'
  ],
  function() {
    gulp.watch(assetPath + '/scss/**/*.scss',  ['compile-styles']);
    gulp.watch(assetPath + '/js/**/*.js',      ['compile-scripts']);
    gulp.watch(assetPath + '/fonts/**/*',      ['compile-fonts']);
    gulp.watch(assetPath + '/images/**/*',     ['compile-images']);
    gulp.watch(assetPath + '/templates/**/*',  ['compile-templates']);
  }
);

// Styles
// ------

gulp.task('compile-styles', function () {
  return (
    gulp.src([
      assetPath + '/scss/style.scss'
    ])
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
    }))
    .pipe(cleanCSS())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(distPath + '/css'))
    .pipe(browserSync.stream())
  );
});


// Scripts
// -------

gulp.task('compile-scripts', function () {
  return (
    gulp.src([
    assetPath + '/js/headroom.js',
    assetPath + '/js/jquery.headroom.js',
      assetPath + '/js/main.js'
    ])
    .pipe(concat('script.js'))
    .pipe(uglify())
    .pipe(gulp.dest(distPath + '/js'))
    .pipe(browserSync.stream())
  );
});


// Images
// -------

gulp.task('compile-images', function () {
  return gulp.src(assetPath + '/images/**/*')
     .pipe(imagemin({
        progressive: true,
        svgoPlugins: [{removeViewBox: false}],
        use: [pngquant()]
      }))
    .pipe(gulp.dest(distPath + '/images'));
});


// Fonts
// -----

gulp.task('compile-fonts', function () {
  return gulp.src(assetPath + '/fonts/**/*')
    .pipe(gulp.dest(distPath + '/fonts'));
});



// Templates
// ---------

gulp.task('compile-templates', function () {
  return gulp.src(assetPath + '/templates/**/*')
    .pipe(gulp.dest(themePath));
});


// versioning
// -----------

gulp.task('version-assets', function () {
  return gulp.src(distPath + '/**/*')
    .pipe(rev())
    .pipe(gulp.dest(distPath))
    .pipe(rev.manifest())
    .pipe(gulp.dest(themePath));
});

gulp.task('replace-versioned-assets-in-assets', function () {
  var dirReplacements = {};
  dirReplacements[distPathAbsolute] = config.productionAssetURL;

  return gulp.src([
      themePath + '/**/*.json',
      distPath + '/**/*.css',
      distPath + '/**/*.js'
    ])
    .pipe(collect({ replaceReved: true, dirReplacements: dirReplacements }))
    .pipe(gulp.dest(distPath));
});

gulp.task('replace-versioned-assets-in-templates', function () {
  var dirReplacements = {};
  dirReplacements[distPathAbsolute] = config.productionAssetURL;

  return gulp.src([
      themePath + '/**/*.json',
      themePath + '/*.php'
    ])
    .pipe(collect({ replaceReved: true, dirReplacements: dirReplacements }))
    .pipe(gulp.dest(themePath));
});

// Live reload
// -----------

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "ddd.marcel.dev"
    });
});
