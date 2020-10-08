const gulp = require('gulp');
const handlebars = require('gulp-handlebars');
const rename = require('gulp-rename');
const del = require('del');

function clean() {
  return del('./dist/**/*');
}

function build() {
  return gulp.src('./src/pages/*.hbs')
    .pipe(handlebars({}, {
      ignorePartials: true,
      batch: ['./src/partials']
    }))
    .pipe(rename({
      extname: '.html'
    }))
    .pipe(gulp.dest('./dist'));
}

function copyAssets() {
  return gulp.src('./src/assets/**/*')
    .pipe(gulp.dest('./dist'));
}

exports.clean = clean;
exports.default = gulp.series(clean, gulp.parallel(build, copyAssets));
