var gulp = require ('gulp');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer')
var bs = require('browser-sync').create();
var uglifycss = require('gulp-uglifycss');

var plumberErrorHandler = {erroHandler: notify.onError({
  title:'Gulp',
  message: 'Error: <%= error.message %>'
})
};

//tareas

gulp.task('php', function(){
  gulp.src('./**/*.php')
    .pipe(gulp.dest('./**/*.php'))
});

gulp.task('sass', function(){
  gulp.src('./sass/**/*.sass')
    .pipe(plumber(plumberErrorHandler))
    .pipe(sass())
    .pipe(autoprefixer('last 2 versions'))
    .pipe(gulp.dest('./css'))
    .pipe(bs.reload({stream: true}));
});

gulp.task('browser-sync', function(){
  bs.init({
    proxy: "localhost:8888/frameworkv1.0"
  });
});

gulp.task('watch', function(){
  gulp.watch('./sass/**/*.sass', ['sass']);
});

gulp.task('watch', ['browser-sync'], function(){
  gulp.watch('./sass/**/*.sass', ['sass']);
  gulp.watch('./**/*.php').on('change',bs.reload);
});

gulp.task('default',['sass', 'watch'])
