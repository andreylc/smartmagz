var gulp = require('gulp');
var sass = require('gulp-sass');
 
gulp.task('sass', function () {
  return gulp.src('css/style.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(gulp.dest('css'));
});
 
gulp.task('watcher', function () {
  gulp.watch('css/*.scss', ['sass']);
  console.log("Wather is run!")
});



