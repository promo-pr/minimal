var gulp = require('gulp'),
    sourcemaps = require('gulp-sourcemaps'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    less = require('gulp-less'),
    cleanCSS = require('gulp-clean-css'),
    livereload = require('gulp-livereload'),
    path = {
        build: {
            js: 'js/',
            css: 'css/'
        },
        src: {
            libJs: [
                '../vendor/bower/bootstrap/js/affix.js',
                '../vendor/bower/bootstrap/js/alert.js',
                '../vendor/bower/bootstrap/js/button.js',
                '../vendor/bower/bootstrap/js/collapse.js',
                '../vendor/bower/bootstrap/js/dropdown.js',
                '../vendor/bower/bootstrap/js/tab.js',
                '../vendor/bower/bootstrap/js/transition.js'
            ],
            js: ['src/js/site.js'],
            less: ['src/less/site.less']
        },
        watch: {
            js: 'src/js/*.js',
            less: 'src/less/*.less'
        }
    };

gulp.task('default',['watch','style','js']);

gulp.task('watch', function(){
    livereload.listen();
    gulp.watch(path.watch.js,['js']);
    gulp.watch(path.watch.less,['style']);
});

gulp.task('style', function() {
    gulp.src(path.src.less)
        //.pipe(sourcemaps.init())
        .pipe(less())
        .pipe(cleanCSS())
        //.pipe(sourcemaps.write())
        .pipe(gulp.dest(path.build.css))
        .pipe(livereload());
    });

gulp.task('js', function() {
    gulp.src(path.src.js)
        .pipe(concat('site.js'))
        .pipe(uglify())
        .pipe(gulp.dest(path.build.js));
    gulp.src(path.src.libJs)
        .pipe(concat('lib.js'))
        .pipe(uglify())
        .pipe(gulp.dest(path.build.js));
});
