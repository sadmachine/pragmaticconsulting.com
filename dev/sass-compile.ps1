$sass_dir="resources/assets/sass"
$css_dir="public/css"
sass --load-path=. --watch --style=compressed `
  "%sass_dir%/shared.scss:%css_dir%/shared.css" `
  "%sass_dir%/com.scss:%css_dir%/com.css" `
  "%sass_dir%/gov.scss:%css_dir%/gov.css" `
  "%sass_dir%/dba.scss:%css_dir%/dba.css" `
  "%sass_dir%/healthcare.scss:%css_dir%/healthcare.css"
