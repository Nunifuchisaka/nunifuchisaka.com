var gulp = require('gulp'),
    livereload = require('gulp-livereload'),
    shell = require('gulp-shell');


gulp.task('compass_compile', shell.task([
  'compass compile'
]));


gulp.task('watch', function(){
  
  livereload.listen();
  
  gulp.watch('www/htdocs/assets/_scss/**/*.scss', function(event){
    gulp.run('compass_compile');
  });
  
  gulp.watch([
    'www/htdocs/**/*.html',
    'www/htdocs/**/*.php',
    'www/htdocs/**/*.css',
    'www/htdocs/**/*.js'
  ]).on('change', livereload.changed);
  
});


gulp.task('default', ['watch']);

