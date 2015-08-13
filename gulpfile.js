'use strict'
var gulp = require('gulp');
var rename = require("gulp-rename");
var less = require("gulp-less");
var autoprefixer = require('gulp-autoprefixer');
var clean = require('gulp-clean');
var jade = require('gulp-jade');

gulp.task('clean', function () {
  return gulp.src('./styles/build/*', {read: false})
    .pipe(clean());
});

gulp.task('styles', ['clean'], function () {
	gulp.src('./styles/src/main.less')
		.pipe(less())
		.pipe(autoprefixer('last 5 versions', '> 1%', 'ie 9'))
		.pipe(rename('build.css'))
		.pipe(gulp.dest('./styles/build/'));
});

gulp.task('jade', function(){
	gulp.src('./jade/*.jade')
		.pipe(jade({pretty: true}))
		.pipe(gulp.dest('./html/'))
});

gulp.task('watch', ['jade','styles'], function(){
	gulp.watch('./jade/**/*.jade', ['jade']);
	gulp.watch('./styles/src/**/*.less', ['styles']);
});

gulp.task('default', ['jade','styles']);
