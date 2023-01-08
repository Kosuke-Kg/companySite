const gulp = require("gulp")
const dartSass = require("gulp-sass")(require("sass"))
const notify = require("gulp-notify")
const plumber = require("gulp-plumber")
const sourcemaps = require("gulp-sourcemaps")
const autoprefixer = require("gulp-autoprefixer")
const mediaQueries = require("gulp-group-css-media-queries")
const minifyCss = require("gulp-minify-css")
const rename = require("gulp-rename")
const changed = require("gulp-changed")
const imagemin = require("gulp-imagemin")
const mozJpeg = require("imagemin-mozjpeg")
const webp = require("gulp-webp")
const pngquant = require("imagemin-pngquant")
const babel = require("gulp-babel")
const uglify = require("gulp-uglify")

const path = {
  css: {
    dir: "./assets/css",
  },
  js: {
    dir: "./assets/js",
  },
  scss: {
    src: "./src/sass/**/*.scss",
    main: "./src/sass/style.scss",
    dest: "./src/css",
  },
  img: {
    assets: "./assets/img",
    src: "./src/img**",
  },
}

const watchFiles = () => {
  gulp.watch(path.scss.src, sass)
  gulp.watch("./src/js/**", scriptTask)
  gulp.watch("./src/js/**", scriptMinTask)
  gulp.watch("./src/img/**", imageTask)
  gulp.watch("./src/img/**/*.{jpg,jpeg,png}", webpTask)
}

const sass = () =>
  gulp
    // watchするsassファイル
    .src(path.scss.main)
    // 強制停止防止
    .pipe(
      plumber({
        errorHandler: notify.onError("Error: <%= error.message %>"),
      })
    )
    // Sassファイルのキャッシュ
    .pipe(changed(path.css.dir))
    // ソースマップを初期化
    .pipe(sourcemaps.init(""))
    // Sassをコンパイルする
    .pipe(dartSass({ outputStyle: "expanded" }, { outputStyle: "expanded" }))
    // プレフィックスを付与
    .pipe(
      autoprefixer({
        cascade: true,
      })
    )
    // メディアクエリの最適化
    .pipe(mediaQueries())
    // コンパイルしたcss出力
    .pipe(gulp.dest(path.css.dir))
    // cssの軽量化
    .pipe(
      minifyCss({
        advanced: false,
      })
    )
    .pipe(
      rename({
        extname: ".min.css",
      })
    )
    // ソースマップ生成
    .pipe(sourcemaps.write("./", ""))
    // コンパイルしたcss出力
    .pipe(gulp.dest(path.css.dir))

const imageTask = () =>
  // 監視ディレクトリ
  gulp
    .src("./src/img/**")
    .pipe(changed(path.img.assets))
    .pipe(
      imagemin([
        pngquant({
          quality: [0.6, 0.7],
          speed: 1,
        }),
        mozJpeg({
          quality: 60,
        }),
        imagemin.svgo(),
        imagemin.optipng(),
        imagemin.gifsicle({
          optimizationLevel: 3,
        }),
      ])
    )
    .pipe(gulp.dest(path.img.assets))

const webpTask = () =>
  gulp
    .src("./src/img/**/*.{jpg,jpeg,png}")
    .pipe(rename((name) => name.basename + name.extname))
    .pipe(
      webp({
        quality: 70,
        method: 6,
      })
    )
    .pipe(gulp.dest(path.img.assets))

const scriptTask = () =>
  gulp
    .src("src/js/**", { sourcemaps: true })
    .pipe(
      plumber({ errorHandler: notify.onError("Error: <%= error.message %>") })
    )
    .pipe(
      babel({
        presets: ["@babel/env"],
      })
    )
    .pipe(gulp.dest(path.js.dir, { sourcemaps: "./" }))

const scriptMinTask = () =>
  gulp
    .src("src/js/**", { sourcemaps: true })
    .pipe(
      plumber({ errorHandler: notify.onError("Error: <%= error.message %>") })
    )
    .pipe(
      babel({
        presets: ["@babel/env"],
      })
    )
    .pipe(uglify({ output: { comments: /^!/ } }))
    .pipe(
      rename({
        suffix: ".min",
      })
    )
    .pipe(gulp.dest(path.js.dir, { sourcemaps: "./" }))

exports.sass = sass
exports.scriptTask = scriptTask
exports.scriptMinTask = scriptMinTask
exports.imageTask = imageTask
exports.webpTask = webpTask
exports.watch = watchFiles
