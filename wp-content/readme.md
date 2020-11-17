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

cd into fictiv-theme and run 'npm install' to pull down all packages


## Build Tools
* Webpack
* PostCSS
* Babel
* PurgeCSS

## Libraries and dependencies
* [TailwindCSS](https://tailwindcss.com/): Utility first CSS library. Reference tailwind config file for theme specific design system `flat-theme/webpack/tailwind/config.js`
* [Micromodal](https://micromodal.now.sh/): Modal JS library
* [Siema](https://pawelgrzybek.github.io/siema/): Carousel JS library
* [Vanilla Lazyload](https://github.com/verlok/vanilla-lazyload): Lazyload JS library

## Development

cd into `fictiv-theme` folder and `npm run dev` to begin development
reference `fictiv-theme/webpack/dev.js` for development script details

## Build

cd into `fictiv-theme` folder and `npm run build` to build css and JS files into `/dist` folder once development phase is complete. 
reference `fictiv-theme/webpack/build.js` for build script details
`/dist` folder comprises of all production assets
Be sure to update CSS and JS versions in theme `functions.php` to clear browser cache after build

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
* [Create Backups or Restore](https://my.wpengine.com/installs/fictiv/sftp_users): Production backups are created daily