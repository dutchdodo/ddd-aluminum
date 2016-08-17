var gulp        = require('gulp');
var watch       = require('gulp-watch');

var concat      = require('gulp-concat'); // JS concatenate 
var uglify      = require('gulp-uglify'); // JS minify

var sass        = require('gulp-sass'); // CSS compiling
var sourcemaps  = require('gulp-sourcemaps'); // CSS Sourcemaps
var prefixer    = require('gulp-autoprefixer'); // CSS prefix
var cssNano     = require('gulp-cssnano'); // CSS minify
var uncss       = require('gulp-uncss'); // CSS Stripping unused selectors

var imageOpt    = require('gulp-image-optimization'); // Img smaller images
var browserSync = require('browser-sync').create(); // Dev browser reload

var paths = {
    js : {
        src  : 'assets/js/src/*.js',
        dist : 'assets/js'
    },
    sass : {
        src  : 'assets/scss/**/*.scss',
        dist : 'assets/css'
    },
    img : {
        src  : 'assets/img/src/*',
        dist : 'assets/img'
    }
};

/**
 * Javascript task.
 */
gulp.task('js', function() {
    gulp.src(paths.js.src)
        .pipe(sourcemaps.init())
        .pipe(concat('combined.min.js'))
        .pipe(uglify())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(paths.js.dist))
        .pipe(browserSync.stream());
});

/**
 * Sass task.
 */
gulp.task('sass', function() {
    gulp.src(paths.sass.src)
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(concat('style.min.css'))
        .pipe(prefixer())
        .pipe(cssNano())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(paths.sass.dist))
        .pipe(browserSync.stream());
});

/**
 * Image optimization task.
 */
gulp.task('image', function() {
    gulp.src(paths.img.src)
        .pipe(imageOpt())
        .pipe(gulp.dest(paths.img.dist));
});

/**
 * Browser sync task.
 */
gulp.task('browser-sync', function() {
    browserSync.init();
});

/**
 * Watch task
 */
gulp.task('watch', ['browser-sync'], function() {
    gulp.watch(paths.js.src, ['js']);
    gulp.watch(paths.sass.src, ['sass']);
    gulp.watch(paths.img.src, ['image']);
});