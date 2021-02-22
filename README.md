# wp-webpack-sass-theme

A starter for building WordPress themes with a SASS and JS compiler

Extract ZIP into your `wp-content/themes/` folder in your local development environment. I suggest using MAMP and developing locally.

In terminal, type:

`cd wp-content/themes/yourtheme` then `npm install`

It will take some time for the node-modules directory to be added to you theme with all of the necessary npm packages.

When it is done,

in scss/_base.scss add:

`body {background:green}`

in scss/_another-sass-partial.scss add:

`body {color:white}`

in test.js add:

`console.log('Webpack is working')`

In terminal: `npm run watch`

You will find all of your SASS files compiled to `dist/css/style.css` and is being included in your main theme `style.css`

You will find all of the js files in your `src/js/` folder have compiled into `main.js`

Your `functions.php` file is enqueuing both `main.js` and your theme’s main `style.css` file

It should be hot and watch all of your changes.
