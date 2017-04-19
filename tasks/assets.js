var gulp = require('gulp'),
    gutil = require('gulp-util'),
    gulpIf = require('gulp-if'),
    imagemin = require('gulp-imagemin'),
    cache = require('gulp-cached'),
    debug = require('gulp-debug'),
    config = require('../config'),
    rename = require('gulp-rename');
var del = require('del');
var vinylPaths = require('vinyl-paths');

gulp.task('assets', function() {
  var next = gutil.noop;
  return gulp
  .src(config.paths.src.assets)
	.pipe(cache()) // cache independed of env
  // .pipe( gulpIf(config.paths.src.images, cache(imagemin())) ) // if is an image - optimize it
  .pipe(debug({title:'assets'}))
  .pipe(gulp.dest(config.paths.dest.assets));
});

/** advanced compile svg to png (flags) **/
var svg2png = require('gulp-svg2png');

gulp.task('svg2png', function () {
    gulp.src('development/assets/img/flags/**/*.svg')
        .pipe(svg2png({ width: 72, height: 72 }))
        .pipe(gulp.dest('development/assets/img/flags/'));
});

// gulp.task('mergeSvgFlags', function () {
//     gulp.src('development/assets/img/flags/**/*.svg')
//         .pipe(gulp.dest('development/test/img/flags/'));
// });

gulp.task('renameSvg', function () {
  // rename via function
gulp.src("development/test/img/flags-png/**/*.svg")
  .pipe(vinylPaths(del))
  .pipe(rename(function (path) {
    path.extname = ".png"
  }))
  .pipe(gulp.dest("development/test/img/flags-png/"));
})
