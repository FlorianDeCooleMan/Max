schoolthema - generated WordPress theme
======================================

This theme was generated to match the look of the static site you uploaded.
I extracted assets from your uploaded zip and copied them into the theme's assets/ folder.

What I created:
- style.css (theme header + imports original CSS file)
- functions.php (registers menu, sidebar, enqueues styles/scripts)
- header.php, footer.php, sidebar.php
- index.php, single.php, page.php, archive.php
- assets/ (contains CSS, JS, images from your uploaded site)
- screenshot.png

How to install:
1. Download the zip 'schoolthema.zip' from the link provided below.
2. In your WordPress admin, go to Appearance -> Themes -> Add New -> Upload Theme and upload the zip.
3. Activate the theme.
4. Go to Appearance -> Menus and assign a menu to the 'Primary Menu' theme location.
5. Go to Appearance -> Widgets and add widgets to the 'Primary Sidebar'.
6. Create posts (Posts -> Add New) and they will appear on the homepage (the loop is in index.php).
7. If the layout doesn't match exactly, copy any remaining CSS files from the original site into the theme's assets/ folder and update style.css import line if necessary.

Notes & tweaks to get an exact match:
- The theme imports the first CSS file found from the uploaded site into assets/. If your original CSS references images or fonts with relative paths, ensure those files are present in assets/ with the same filenames.
- If the original site used specific HTML structure that differs from the WP loop, adjust the theme's template files (header.php, index.php, single.php) to match that structure and class names.
- For custom fonts, copy font files into assets/ and update the @font-face rules in the CSS.
- For pixel-perfect results, you may need to copy over the original HTML header markup into header.php (I included a basic header already) and ensure any JavaScript files are enqueued (assets/main.js if present).

Files included from your uploaded site (first 120 entries):
[
  "HTML Website/assets/css/fontawesome-all.min.css",
  "HTML Website/assets/js/breakpoints.min.js",
  "HTML Website/assets/js/browser.min.js",
  "HTML Website/assets/js/jquery.min.js",
  "HTML Website/assets/js/main.js",
  "HTML Website/assets/js/util.js",
  "HTML Website/assets/sass/base/_page.scss",
  "HTML Website/assets/sass/base/_reset.scss",
  "HTML Website/assets/sass/base/_typography.scss",
  "HTML Website/assets/sass/components/_actions.scss",
  "HTML Website/assets/sass/components/_author.scss",
  "HTML Website/assets/sass/components/_blurb.scss",
  "HTML Website/assets/sass/components/_box.scss",
  "HTML Website/assets/sass/components/_button.scss",
  "HTML Website/assets/sass/components/_form.scss",
  "HTML Website/assets/sass/components/_icon.scss",
  "HTML Website/assets/sass/components/_icons.scss",
  "HTML Website/assets/sass/components/_image.scss",
  "HTML Website/assets/sass/components/_list.scss",
  "HTML Website/assets/sass/components/_mini-post.scss",
  "HTML Website/assets/sass/components/_post.scss",
  "HTML Website/assets/sass/components/_posts.scss",
  "HTML Website/assets/sass/components/_row.scss",
  "HTML Website/assets/sass/components/_section.scss",
  "HTML Website/assets/sass/components/_table.scss",
  "HTML Website/assets/sass/layout/_footer.scss",
  "HTML Website/assets/sass/layout/_header.scss",
  "HTML Website/assets/sass/layout/_intro.scss",
  "HTML Website/assets/sass/layout/_main.scss",
  "HTML Website/assets/sass/layout/_menu.scss",
  "HTML Website/assets/sass/layout/_sidebar.scss",
  "HTML Website/assets/sass/layout/_wrapper.scss",
  "HTML Website/assets/sass/libs/_breakpoints.scss",
  "HTML Website/assets/sass/libs/_functions.scss",
  "HTML Website/assets/sass/libs/_html-grid.scss",
  "HTML Website/assets/sass/libs/_mixins.scss",
  "HTML Website/assets/sass/libs/_vars.scss",
  "HTML Website/assets/sass/libs/_vendor.scss",
  "HTML Website/assets/sass/main.css",
  "HTML Website/assets/sass/main.css.map",
  "HTML Website/assets/sass/main.scss",
  "HTML Website/assets/webfonts/fa-brands-400.eot",
  "HTML Website/assets/webfonts/fa-brands-400.svg",
  "HTML Website/assets/webfonts/fa-brands-400.ttf",
  "HTML Website/assets/webfonts/fa-brands-400.woff",
  "HTML Website/assets/webfonts/fa-brands-400.woff2",
  "HTML Website/assets/webfonts/fa-regular-400.eot",
  "HTML Website/assets/webfonts/fa-regular-400.svg",
  "HTML Website/assets/webfonts/fa-regular-400.ttf",
  "HTML Website/assets/webfonts/fa-regular-400.woff",
  "HTML Website/assets/webfonts/fa-regular-400.woff2",
  "HTML Website/assets/webfonts/fa-solid-900.eot",
  "HTML Website/assets/webfonts/fa-solid-900.svg",
  "HTML Website/assets/webfonts/fa-solid-900.ttf",
  "HTML Website/assets/webfonts/fa-solid-900.woff",
  "HTML Website/assets/webfonts/fa-solid-900.woff2",
  "HTML Website/images/avatar.jpg",
  "HTML Website/images/logo.jpg",
  "HTML Website/images/logo.svg",
  "HTML Website/images/pic01.jpg",
  "HTML Website/images/pic02.jpg",
  "HTML Website/images/pic03.jpg",
  "HTML Website/images/pic04.jpg",
  "HTML Website/images/pic05.jpg",
  "HTML Website/images/pic06.jpg",
  "HTML Website/images/pic07.jpg",
  "HTML Website/images/pic08.jpg",
  "HTML Website/images/pic09.jpg",
  "HTML Website/images/pic10.jpg",
  "HTML Website/images/pic11.jpg",
  "HTML Website/images/pic12.jpg",
  "HTML Website/index.html",
  "HTML Website/single.html"
]

