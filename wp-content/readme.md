# Fictiv WordPress Website template
This repo comprises of `wp-content` folder for Fictiv website. Specifically, `mu-plugins` folder and `fictiv-theme` folder for the custom theme

## The Layout

```
├── wp-content #
│   ├── mu-plugins # Custom plugins/helper functions used across site
│   ├── themes
│        └── fictiv-theme # Custom theme for website
```

## Getting started with local dev

Merge this repo into local `wp-content` folder

in terminal, cd into `/fictiv-theme` and run `npm install` to pull down all packages, dependencies, and libraries.


## Build Tools

* Webpack
* PostCSS
* Babel
* PurgeCSS
* BrowserSync


## Libraries and dependencies

* [TailwindCSS](https://tailwindcss.com/): Utility first CSS library. 

> Reference tailwind config file for theme specific design system `flat-theme/webpack/tailwind/config.js`

* [Micromodal](https://micromodal.now.sh/): Modal JS library
* [Siema](https://pawelgrzybek.github.io/siema/): Carousel JS library
* [Vanilla Lazyload](https://github.com/verlok/vanilla-lazyload): Lazyload JS library

## Development

cd into `fictiv-theme` folder and `npm run dev` to begin development and launch browsersync.

> Reference `/fictiv-theme/webpack/dev.js` for browserysync and development script configuration

> `fictiv-theme/assets` for editing CSS, JS, and theme graphics


## Build

in terminal, cd into `fictiv-theme` folder and `npm run build` to build CSS and JS files into `/dist` folder once development phase is complete. 

> Reference `fictiv-theme/webpack/build.js` for build script configuration

`/dist` folder is output for all production assets (CSS, JS, and fonts)

> Be sure to update CSS and JS versions in theme `functions.php` to clear browser cache after build


## Production environment

* [fictiv.com](https://www.fictiv.com/)
* [Production WP login](https://www.fictiv.com/wp-admin/)


## Staging environment

* [fictiv.staging.wpengine.com](https://fictiv.staging.wpengine.com/)
* [Staging WP login](https://fictiv.staging.wpengine.com/wp-admin/)


## Host (WPEngine)

* [Setup git push](https://wpengine.com/support/set-git-push-user-portal/)
* [Setting redirects](https://wpengine.com/support/redirect/)
* [Create SFTP user](https://my.wpengine.com/installs/fictiv/sftp_users)
* [Create Backups or Restore](https://my.wpengine.com/installs/fictiv/sftp_users)

> Production backups are created daily and automatically by WPEngine