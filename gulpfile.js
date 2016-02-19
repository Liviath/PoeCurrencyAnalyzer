
var gulp = require('gulp');
var browserify = require('browserify');
var babelify= require('babelify');
var util = require('gulp-util');
var buffer = require('vinyl-buffer');
var source = require('vinyl-source-stream');
var uglify = require('gulp-uglify');
var sourcemaps = require('gulp-sourcemaps');
var babel = require('gulp-babel');
var watch = require('gulp-watch');

gulp.task('watch', function() {
  return gulp.watch('./src/CoreBundle/Resources/js/**/*.js', function() {
      gulp.run('build');
  });
})

gulp.task('build', function() {
  browserify('./src/CoreBundle/Resources/js/main.js', { debug: true })
  .transform(babelify)
  .bundle()
  .on('error', util.log.bind(util, 'Browserify Error'))
  .pipe(source('main.js'))
  .pipe(buffer())
  .pipe(sourcemaps.init({loadMaps: true}))
  .pipe(sourcemaps.write('./'))
  .pipe(gulp.dest('web/'));
});



gulp.task('default', ['build']);
