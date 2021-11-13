// #VARS

var gulp = require('gulp');
var
    config = require('./config.json'),
    config_ftp = require('./config_ftp.json');
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
    imagemin = require('gulp-imagemin'),
    ftp = require('vinyl-ftp');

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
  gulp.src(config.jadeSrc)
    .pipe(jade({pretty:true}))
    .pipe(gulp.dest(config.jadeDest))
    // .pipe(connect.reload());
    .pipe(browserSync.reload({stream:true}));
});

// Images optimization
gulp.task('imagemin', () => {
  return gulp.src('build/img/not_optimized/*')
    .pipe(imagemin())
    .pipe(gulp.dest('build/img'))
    .pipe(browserSync.reload({stream:true}));
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

// Deploy via FTP
gulp.task('deploy', function() {
  var conn = ftp.create( {
    host: 'ftp.a0018013.xsph.ru',
    user: 'a0018013',
    password: 'zucuceviev',
    parallel: 10
  });
  var globs = [
    'build/fonts/**',
    'build/img/**',
    'build/index.html',
    'build/style333.css'
  ];
  return gulp.src(globs, { base: '.', buffer: false})
    .pipe(conn.newer('/public_html/79265405446.ru/front-end'))
    .pipe(conn.dest('/public_html/79265405446.ru/front-end'));
});

// WATCH

gulp.task('watch', function() {
  gulp.watch('./source/sass/**/*.scss', ['css']);
  gulp.watch('./source/jade/**/*.jade', ['html']);
  gulp.watch('./build/*.html', ['typograf']);
  gulp.watch('./build/img/not_optimized/*', ['imagemin']);
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
