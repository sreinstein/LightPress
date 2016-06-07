var gulp = require('gulp');
var cssmin = require('gulp-cssmin');
var imagemin = require('gulp-imagemin');
var sass = require('gulp-ruby-sass');
var uglify = require('gulp-uglify');
var notify = require('gulp-notify');
var rename = require('gulp-rename');
var newer = require('gulp-newer');


// Minify Styles

gulp.task('styles', function() {
    return sass('assets/scss/master.scss')
        .pipe(rename('style.css'))
        .pipe(cssmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('assets/build'))
        .pipe(notify({ message: 'Styles task complete' }));
});


// Minify Images

gulp.task('images', function() {
    return gulp.src('assets/img/**/*')
        .pipe(newer('assets/build/img'))
        .pipe(imagemin())
        .pipe(gulp.dest('assets/build/img'))
        .pipe(notify({ message: 'Images task complete' }));
});


// Minify JS

gulp.task('scripts', function () {
    gulp.src('assets/js/**/*.js')
        .pipe(rename('scripts.js'))
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(gulp.dest('assets/build'))
        .pipe(notify({ message: 'Scripts task complete' }));
});


// Watch

gulp.task('watch', function() {
	// Watch .scss files
	gulp.watch('assets/scss/**/*.scss', ['styles']);
	// Watch .js files
	gulp.watch('assets/js/**/*.js', ['scripts']);
});

gulp.task('default', function() {
	gulp.start('styles', 'scripts', 'images');
});