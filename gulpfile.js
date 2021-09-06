// load packages
const gulp = require("gulp");
const cleanCSS = require("gulp-clean-css");
const concat = require("gulp-concat");
const sass = require("gulp-sass")(require("sass"));
const uglify = require("gulp-uglify");
const browserSync = require("browser-sync");

// define sources
const sources = {
    styles: ["assets/src/sass/main.scss"],
    scripts: [
        "assets/src/js/data.js",
        "assets/src/js/modules.js",
        "assets/src/js/main.js",
    ],
    images: ["assets/src/img/*"],
};

// task for compiling styles
gulp.task("styles", function () {
    return gulp
        .src(sources.styles)
        .pipe(concat("order.styles.css"))
        .pipe(sass())
        .pipe(cleanCSS())
        .pipe(gulp.dest("assets/dist/css"));
});

// task for compiling scripts
gulp.task("scripts", function () {
    return gulp
        .src(sources.scripts)
        .pipe(concat("order.script.js"))
        .pipe(uglify())
        .pipe(gulp.dest("assets/dist/js"));
});

// task for moving images
gulp.task("images", function () {
    return gulp.src(sources.images).pipe(gulp.dest("assets/dist/img"));
});

// reload browser function
function reload(done) {
    browserSync.reload();

    done();
}

// default task
gulp.task("default", gulp.series(gulp.parallel("styles", "scripts", "images")));

// watch task
gulp.task("watch", function () {
    browserSync.init({
        proxy: "http://localhost:8000",
        // baseDir: "./",
    });

    gulp.watch("*.html").on("change", reload);

    gulp.watch("assets/src/sass/*/*", gulp.series("styles", reload));

    gulp.watch("assets/src/js/*", gulp.series("scripts", reload));

    gulp.watch("*", gulp.series(reload));
});
