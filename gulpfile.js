const browsersync = require("browser-sync");
const gulp = require("gulp");
const phpConnect = require('gulp-connect-php');
const sass = require('gulp-sass');

//Php connect
function connectsync() {
    phpConnect.server({
        // a standalone PHP server that browsersync connects to via proxy
        port: 8080,
		keepalive: true,
		dir: '/PHPFormMaker',
    }, function (){
        browsersync({
            proxy: 'localhost/PHPFormMaker',
            injectChanges: 'true',
        });
    });
}

//Watch SASS Files
gulp.task('sass', function(){
    return gulp.src('assets/sass/**/*.scss')
      .pipe(sass()) // Using gulp-sass
      .pipe(gulp.dest('./'))
  });

// BrowserSync Reloadc
function browserSyncReload(done) {
    browsersync.reload();
    done();
}

// Watch files
function watchFiles() {
    gulp.watch("./**/*.php", browserSyncReload);
    gulp.watch('assets/sass/**/*.scss', gulp.series(['sass'], browserSyncReload));
}

const watch = gulp.parallel(connectsync,watchFiles);

exports.watch = watch;