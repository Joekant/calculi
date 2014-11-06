var gulp = require('gulp'),
sass = require('gulp-sass'),
livereload = require('gulp-livereload'),
usemin = require('gulp-usemin'),
uglify = require('gulp-uglify'),
minifyHTML= require('gulp-minify-html'),
imagemin = require('gulp-imagemin'),
pngcrush = require('imagemin-pngcrush'),
glob = require('glob'),
uncss = require('gulp-uncss'),
ftp = require('gulp-ftp'),
minifyCSS = require('gulp-minify-css');

// compile styles and reload page
gulp.task('styles', function () {
	return gulp.src('dev/scss/app.scss')
	.pipe(sass())
	.pipe(gulp.dest('dev/css/'))
	.pipe(livereload())
})

// COPY .PHP Files
gulp.task('copy_php', function() {
	gulp.src('dev/php/**/*.*')
	.pipe(gulp.dest('dist/php'));
});

gulp.task('copy_frontend', function() {
	gulp.src('dev/_frontend/**/*.*')
	.pipe(gulp.dest('dist/_frontend'));
});

gulp.task('copy_client', function() {
	gulp.src('dev/_client/**/*.*')
	.pipe(gulp.dest('dist/_client'));
});

gulp.task('copy_worker', function() {
	gulp.src('dev/_worker/**/*.*')
	.pipe(gulp.dest('dist/_worker'));
});



// Minify index.php from _frontend
gulp.task('min_frontend', function () {
	return gulp.src('dev/_frontend/index.php')
	.pipe(usemin( {
		css: [minifyCSS(), 'concat'],
		js: [uglify()]
	}))
	.pipe(gulp.dest('dist/_frontend'))
})

// Minify index.php from _worker
gulp.task('min_worker', function () {
	return gulp.src('dev/_worker/index.php')
	.pipe(usemin( {
		css: [minifyCSS(), 'concat'],
		js: [uglify()]
	}))
	.pipe(gulp.dest('dist/_worker'))
})

// Minify index.php from _client
gulp.task('min_client', function () {
	return gulp.src('dev/_client/index.php')
	.pipe(usemin( {
		css: [minifyCSS(), 'concat'],
		js: [uglify()]
	}))
	.pipe(gulp.dest('dist/_client'))
})

// Minify Images
gulp.task('imagemin', function () {
	return gulp.src('dev/img/**/*.*')
	.pipe(imagemin({
		progressive: true,
		svgoPlugins: [{removeViewBox: false}],
		use: [pngcrush()]
	}))
	.pipe(gulp.dest('dist/img'));
});

// remove unused css
gulp.task('uncss', function() {
	gulp.src('dist/styles/styles.min.css')
	.pipe(uncss({
		html: glob.sync('dev/**/*.php')
	}))
	.pipe(gulp.dest('dist/styles'));
});

// Deploy to FTP
gulp.task('ftp', function () {
	return gulp.src('dist/**/*.*')
	.pipe(ftp({
		host: 'calculi.at',
		user: 'web256f5',
		pass: 'oiUBz3Ll'
	}));
});

// Check for Changes
gulp.task('watch', function() {
	gulp.watch('dev/**/*.*', ['styles'])
})

// perform all necessary Dist Tasks
gulp.task('dist', ['styles', 'copy_client', 'copy_worker', 'copy_frontend', 'copy_php', 'min_frontend', 'min_worker', 'min_client', ]);


// - imgmin = slow ;)
// - minhtml_php errors and stops other tasks. works fine when runs seperate
// - uncss Accordion not working (maybe recusrive problem - not all files are checked or classes do not exist during check (js injected))

