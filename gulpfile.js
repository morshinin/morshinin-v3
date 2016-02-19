// #VARS

var gulp = require('gulp');
var postcss = require('gulp-postcss');
var sass = require('gulp-sass');
// var connect = require('gulp-connect');
var browserSync = require('browser-sync');
// var csslint = require('gulp-csslint');

// var magician = require('postcss-font-magician');
var autoprefixer = require('autoprefixer');
var cssnano = require('cssnano');
var pxtorem = require('postcss-pxtorem');

var jade = require('gulp-jade');
var lost = require('lost');

var
    html2jade = require('gulp-html2jade'),
    decode = require('gulp-html-entities'), // decode html entities after converting to jade чтобы русские символы норм отображал
    css2scss = require('gulp-css-scss'),
    uncss = require('gulp-uncss'), // чистит css от неиспользуемых селекторов
    typograf = require('gulp-typograf'),
    imagemin = require('gulp-imagemin');

// SCSS to CSS
gulp.task('css', function() {
  var processors = [
    // magician({hosted:'../fonts'}),
    lost,
    autoprefixer,
    pxtorem({propWhiteList:[]}),
    cssnano
  ];
  return gulp.src('./source/sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss(processors))
    .pipe(gulp.dest('./build'))
    // .pipe(connect.reload());
    .pipe(browserSync.reload({stream:true}));
});

// CSS LINT
gulp.task('lint', function() {
  gulp.src('./build/*.css')
    .pipe(csslint())
    .pipe(csslint.reporter());
});

// JADE to HTML
gulp.task('html', function() {
  gulp.src('./source/jade/*.jade')
    .pipe(jade({pretty:true}))
    .pipe(gulp.dest('./build'))
    // .pipe(connect.reload());
    .pipe(browserSync.reload({stream:true}));
});

// Images optimization
gulp.task('imagemin', () => {
  return gulp.src('build/img/not_optimized/*')
    .pipe(imagemin({
      progressive: true,
      svgoPlugins: [
        {removeViewBox: false},
        {cleanupIDs: false}
      ]
    }))
    .pipe(gulp.dest('build/img'));
});

// HTML to JADE
gulp.task('html2jade', function() {
  gulp.src('index.html')
    .pipe(html2jade(options))
    .pipe(gulp.dest('source/jade'));
});

// Decode converted jade file
gulp.task('decode', function() {
  return gulp.src('source/jade/index.jade')
  .pipe(decode('decode'))
  .pipe(gulp.dest('source/jade'));
});

// CSS to SCSS
gulp.task('css2scss', () => {
  return gulp.src('uncss/style333.css')
  .pipe(css2scss())
  .pipe(gulp.dest('source/sass'));
});

// Remove unused css classes
gulp.task('uncss', function() {
  return gulp.src('style333.css')
    .pipe(uncss({html: ['index.html']}))
    .pipe(gulp.dest('uncss'));
});

// typograf
gulp.task('typograf', function() {
  gulp.src('build/index.html')
    .pipe(typograf({lang: 'ru'}))
    .pipe(gulp.dest('build'));
});

// WATCH JADE & SCSS

gulp.task('watch', function() {
  gulp.watch('./source/sass/**/*.scss', ['css']);
  gulp.watch('./source/jade/**/*.jade', ['html']);
  gulp.watch('./build/*.html', ['typograf']);
});

// #LIVE RELOAD
// gulp.task('connect', function() {
//   connect.server({
//     root: 'build',
//     livereload: true,
//     open: true
//   });
// });

//  BROWSER SYNC
gulp.task('browser-sync', function() {
  browserSync({
    server: {
      baseDir: "build"
    }
  });
});

// gulp.task('start', ['connect', 'watch']);
gulp.task('start', ['browser-sync', 'watch']);
