var gulp = require('gulp');
var sassGlob = require('gulp-sass-glob');
var sass = require('gulp-sass');
var prefix = require('gulp-autoprefixer');
var uglifyCss = require('gulp-uglifycss');
var concat = require('gulp-concat');
var uglifyJs = require('gulp-uglify');
var maps = require('gulp-sourcemaps');
var rename = require('gulp-rename');

gulp.task('styles', function () {
	return gulp.src('assets/src/styles/main.scss')
		.pipe(maps.init())
		.pipe(sassGlob())
		.pipe(sass().on('error', sass.logError))
		.pipe(prefix())
		// .pipe(uglifyCss())
		.pipe(rename('main.min.css'))
		.pipe(maps.write('./maps'))
		.pipe(gulp.dest('assets/dist/styles'));
});

gulp.task('scripts', function () {
	return gulp.src([
			'assets/src/scripts/vendors/jquery-1.12.4.min.js',
			'assets/src/scripts/vendors/parsley.js',
			'assets/src/scripts/vendors/*.js',
			'assets/src/scripts/vendors/!modernizr.min.js',
			'assets/src/scripts/modules/**/*.js'
		])
		.pipe(concat('main.min.js'))
		// .pipe(uglifyJs().on('error', onError))
		.pipe(gulp.dest('assets/dist/scripts'));
});

gulp.task('watch', ['styles', 'scripts'], function () {
	gulp.watch('assets/src/styles/**/*.scss', ['styles']);
	gulp.watch('assets/src/scripts/modules/**/*.js', ['scripts']);
});

gulp.task('default', ['watch']);

function onError(err) {
  console.log(err);
}