var gulp        = require('gulp');
var bs = require('browser-sync').create();

gulp.task('browser-sync', function() {
    bs.init({
        proxy:'localhost/wordpress'
        
    });
    // gulp.watch("*.*").on('change', bs.reload);   -- // FOR WATCH ALL FILES
    gulp.watch("*.php").on('change', bs.reload);
    gulp.watch("*.html").on('change', bs.reload);
    gulp.watch("*.js").on('change', bs.reload);
    gulp.watch("*.css").on('change', bs.reload);

});

// gulp.task('sass', function () {
//     return gulp.src('scss/*.scss')
//                 .pipe(sass())
//                 .pipe(gulp.dest('css'))
//                 .pipe(bs.reload({stream: true}));
// });
