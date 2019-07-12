
# Craft 3 Boilerplate with Foundation 6, JS and SASS Compiler, Templates and More

## What’s in it?

* Craft CMS 3
* Foundation 6
* Redactor
* SASS and JS compiler and minifier (using gulp)
* MAMP helper for database exports
* Basic macros:
	* Create a linked entry
	* Create a button
	* Display an image (with fallback)
	* Create an excerpt
	* Add an active class to navigation
* Some template files:
	* Index
	* Blog entry
	* Blog list  
	* 404 
	* HTML and OpenGraph metadata

## Installation
1. Clone the repo `git clone https://github.com/brycekirk/craft_3_foundation_6_boilerplate `
2. Install the packages (from within your new project directory):
	* `npm install`
	* `bower install`
	* `composer install`
3. Create a local database
4.  Get a security key `./craft setup/security-key` and create `.env`
5. Setup Craft `./craft setup` and fill in the prompts
6. Point your server to `PROJECT_FOLDER/web` and get at it!

## Start developing

* Run `gulp watch` from your project directory to watch for changes to `assets/js/src/scripts.js` and `assets/scss/styles.scss`

##  More info
* `config/project.yaml` will generate some initial fields: `body`, `image`, `defaultMetaDescription` and `defaultSocialImage`, a homepage entry and an images asset volume located at `assets/uploads/img`
* If you want to stop using a project config file, delete `project.yaml` and the `'useProjectConfigFile' => true,` line from `config/general`
* By default, all of foundation.js is included. You can change this by removing the `'bower_components/foundation-sites/dist/js/foundation.min.js',` line from `gulpfile.js` and manually adding the paths to specific Javascript plugins from `bower_components/foundation-sites/dist/js/plugins/PLUGIN_NAME.js`