var gulp = require('gulp');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var sass = require('gulp-sass');
var bourbon = require('node-bourbon');
var minifycss = require('gulp-minify-css');
var plumber = require('gulp-plumber');
var livereload = require('gulp-livereload');
var nano = require('gulp-cssnano');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');

var paths = {
  scripts: [],
  styles: ['./css/scss/**/*.scss'],
  stylesDest: './css',
  scriptsDest: './js/dist'
}

gulp.task('watch', function(){
  gulp.watch(paths.styles, ['styles']);
});

gulp.task('styles', function(){
  gulp.src(paths.styles)
      .pipe(plumber())
      .pipe(sourcemaps.init())
      .pipe(sass({
        outputStyle: 'expanded',
        includePaths: require('node-bourbon').includePaths
      }))
      .pipe(concat('main.css'))
      .pipe(sourcemaps.write('.'))
      .pipe(minifycss())
      .pipe(gulp.dest(paths.stylesDest))
      .pipe(livereload({start: true}));
});
