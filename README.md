Dummy
=====

Basic Wordpress theme powered by Bootstrap and LESS.

Purpose
-------

1. This theme is a starting point for everyone that has fallen in love with Wordpress, Bootstrap and LESS. It will be kept lean but powerful enough to develop custom websites with ease.
1. This theme gives me the chance to learn and improve my skills as a webdesigner and I hope it will do the same for you.

Usage
------

Use Dummy in wichever way you like. Have a lot of fun and create something beautiful!

First Steps
------

1. Clone this repository into your themes directory.
1. Rename the directory's name to your own project name.
1. Open `style.css` and edit the text to fit your own project.
1. Change the screenshot.png to your own projects screenshot.
1. Replace the images in `assets/img/` with your own.

Setup Development Environment
------

### LESS

Dummy uses LESS for styling your website. All LESS files can be found in `assets/src/less`.
You need to setup a LESS compiler to compile `assets/src/less/styles.less` to `assets/css/styles.css`.

If you are using Codekit just add the `assets` directory to it. This directory includes a `codekit-config.json` file, which tells Codekit how to handle the LESS files.

### JS

For better web performance we want to include as few JS files in our website as possible.
By default Dummy only includes the Wordpress jquery and `main.js` in the final website.

To achieve this, `main.js` is the concatenated and minified version of all other JS files needed.

All JS files are found in `assets/src/js` and `assets/src/vendor/bootstrap/js` and should be concatenated and minified to `assets/js/main.js`.

If you want to add custom JS, please do so by including it to `assets/src/js/custom.js`.

If you are using Codekit just add the `assets` directory to it. This directory includes a `codekit-config.json` file, which tells Codekit how to handle the JS files.
