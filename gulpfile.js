'use strict'
var gulp = require('gulp');
var rename = require("gulp-rename");
var less = require("gulp-less");
var autoprefixer = require('gulp-autoprefixer');
var clean = require('gulp-clean');
var jade = require('gulp-jade');

var tplPath = "./bitrix/templates/main";

gulp.task('clean', function () {
  return gulp.src(tplPath + '/styles/build/*', {read: false})
    .pipe(clean());
});

gulp.task('styles', ['clean'], function () {
	gulp.src(tplPath + '/styles/src/main.less')
		.pipe(less())
		.pipe(autoprefixer('last 5 versions', '> 1%', 'ie 9'))
		.pipe(rename('build.css'))
		.pipe(gulp.dest(tplPath + '/styles/build/'));
});

gulp.task('jade', function(){
	gulp.src(tplPath + '/jade/*.jade')
		.pipe(jade({pretty: true}))
		.pipe(gulp.dest(tplPath + '/html/'))
});

gulp.task('watch', ['jade','styles'], function(){
	gulp.watch(tplPath + '/jade/**/*.jade', ['jade']);
	gulp.watch(tplPath + '/styles/src/**/*.less', ['styles']);
});

gulp.task('default', ['jade','styles']);
