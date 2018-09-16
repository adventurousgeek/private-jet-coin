'use strict';

var gulp = require('gulp'),
    sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

// Compile & Generate Style File

gulp.task('styles', function (done) {
    gulp.src('./src-assets/scss/style.scss')
        .pipe(sass())
        .pipe(cleanCSS({compatibility: 'ie8'})) //Later on
        .pipe(gulp.dest('./'));
    done();
});

// End


// Compile & Generate Javscript File
gulp.task('scripts', function (done) {
    gulp.src([

        //jQuery
        //'javascripts/vendor-components/jquery/jquery.1.12.4.min.js',

        //Bootstrap Components

        //'javascripts/bootstrap-components/affix.js',
        //'javascripts/bootstrap-components/alert.js',
        'src-assets/javascripts/bootstrap-components/button.js',
        'src-assets/javascripts/bootstrap-components/carousel.js',
        'src-assets/javascripts/bootstrap-components/collapse.js',
        'src-assets/javascripts/bootstrap-components/dropdown.js',
        'src-assets/javascripts/bootstrap-components/modal.js',
        'src-assets/javascripts/bootstrap-components/tab.js',
        'src-assets/javascripts/bootstrap-components/transition.js',

        //Common Components
        'src-assets/javascripts/common-components/global.js',

        //Components
        'src-assets/javascripts/components/qaisu-archiver.js',
        //'src-assets/javascripts/components/home.js',

    ])
        .pipe(concat('scripts.js'))
        .pipe(uglify())
        .pipe( gulp.dest('./assets/js/'));
        done();


});


// Watch If SCSS File Changes
gulp.task('styles:watch', function (done) {
    gulp.watch('./src-assets/scss/**/*.scss', gulp.series('styles'));
    done();
});

// Watch If Javascript File Changes
gulp.task('scripts:watch', function (done) {
    gulp.watch('./src-assets/javascripts/**/*.js', gulp.series('scripts'));
    done();
});

gulp.task('default', gulp.series('styles', 'scripts' , 'styles:watch' , 'scripts:watch'));
