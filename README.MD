<p><code>git-blog-theme</code></p>

[![GitHub release](https://img.shields.io/github/release/matoni109/git-blog-theme?include_prereleases=&sort=semver)](https://github.com/matoni109/git-blog-theme/releases/)
[![License](https://img.shields.io/badge/License-MIT-blue)](#license)
[![issues - tailpress](https://img.shields.io/github/issues/matoni109/git-blog-theme)](https://github.com/matoni109/git-blog-theme/issues)

# Introduction

Firstly all rights and credit to [Jeffrey van Rossum](https://github.com/jeffreyvr) & [TailPress website](https://tailpress.io). I got into Wordpress following the you-tube [screencasts](https://www.youtube.com/playlist?list=PL6GBdOp044SHIOSCZejodwr1HcYsC43wG) series when I was between jobs in mid 2023, 90% of this theme was done back then, I only recently found time to finish the last 10% & felt it maybe helpful to others just starting out.

I was a Ruby developer so please excuse the `php` that you find around the place, and I may have layed things out in a non Wordpress way.

`git-blog-theme` is a minimal boilerplate theme for WordPress using [Tailwind CSS](https://tailwindcss.com/).

## Getting started

My setup includes developing Wordpress using [Local](https://localwp.com/help-docs/getting-started/installing-local/) on top of Ubuntu 23.10 Linux. I've just been using Local in isolation and not connecting to any of their services.

### View the Theme

Currently hosted at [git-blog-theme](git-blog-theme.enceladus.digital)

### Clone Theme & Install

* Clone repo `git clone https://github.com/matoni109/git-blog-theme.git && cd git-blog-theme`
* Run `npm install`
* Run `npm run watch` to start developing
* I use `npm run watch-sync` which uses browser-sync - check `package.json` for proxy setup info using Local

### General

You will find the editable CSS and Javascript files within the `/resources` folder.

`template-parts/components` & `cards` contain the main features that I've added along the way, others include:

* Pagination
* Search
* Gravatar
* Wordpress template page identifier - "on/off" in `functions.php` ~ line050

Before you use your theme in production, make sure you run `npm run production`.

## NPM Scripts

There are several NPM scripts available. You'll find the full list in the `package.json` file under "scripts". A script is executed through the terminal by running `npm run script-name`.

| Script     | Description                                                                    |
|------------|--------------------------------------------------------------------------------|
| production | Creates a production (minified) build of app.js, app.css and editor-style.css. |
| dev        | Creates a development build of app.js, app.css and editor-style.css.           |
| watch      | Runs several watch scripts concurrently.                                       |
| production-zip | Runs production and then creates a zip for theme export.                   |


### Define theme colors and font sizes

Several colors and font sizes are defined from the beginning. You can modify them in `theme.json`.

## Links

* [TailPress website](https://tailpress.io)
* [Screencasts](https://www.youtube.com/playlist?list=PL6GBdOp044SHIOSCZejodwr1HcYsC43wG)
* [Tailwind CSS Documentation](https://tailwindcss.com/docs)
* [Esbuild Documentation](https://esbuild.github.io)

## Contributors

* [Jeffrey van Rossum](https://github.com/jeffreyvr)
* [All contributors](https://github.com/matoni109/git-blog-theme/graphs/contributors)

## License

MIT. Please see the [License File](/LICENSE) for more information.
