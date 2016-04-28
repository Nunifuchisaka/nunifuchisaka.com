var gulp = require('gulp'),
    plumber = require('gulp-plumber'),
    compass = require('gulp-compass'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    sourcemaps = require('gulp-sourcemaps'),
    rename = require('gulp-rename');


gulp.task('default', ['watch']);


gulp.task('compass_compile', function(){
  gulp.src('src/scss/**/*.scss')
    .pipe(plumber())
    .pipe(compass({
      config_file: 'src/config.rb',
      style: 'compressed',
      comments : false,
      css : 'dst',
      sass: 'src/scss',
      sourcemap: false
    }))
    .pipe(gulp.dest('dst'));
});


gulp.task('js_common_compile', function() {
  gulp.src([
      'src/js/common/110_header.js',
      'src/js/common/310_SmoothScroll.js',
      'src/js/common/710_Analytics.js',
      'src/js/common/800_app.js',
      'src/js/common/990_footer.js'
    ])
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(concat('common.js'))
    .pipe(gulp.dest('dst'))
    .pipe(uglify({preserveComments: 'some'}))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('dst'))
    .pipe(sourcemaps.write())
    .pipe(rename({suffix: '.sourcemap'}))
    .pipe(gulp.dest('dst'));
});


gulp.task('watch', function(){
  gulp.watch('src/scss/**/*.scss', ['compass_compile']);
  
  gulp.watch('src/js/common/**/*.js', ['js_common_compile']);
});
