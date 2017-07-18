'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
var critical = require('critical');
 
gulp.task('sass', function () {
  return gulp.src('./scss/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./css/public'));
});
 
gulp.task('scss:watch', function () {
  gulp.watch('./css/scss/*.scss', ['sass']);
});


// critical.generate({
//   base: 'test/',
//   src: 'index.html',
//   dest: 'styles/styles.min.css',
//   minify: true,
//   width: 1300,
//   height: 900
// });