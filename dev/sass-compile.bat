@echo off
set sass_dir="resources/assets/sass"
set css_dir="public/css"

sass --load-path=node_modules --watch --style=compressed ^
  "%sass_dir%/com/fonts.scss:%css_dir%/com/fonts.css" ^
  "%sass_dir%/com/com.scss:%css_dir%/com/com.css" ^
  "%sass_dir%/admin/main.scss:%css_dir%/admin/main.css" 