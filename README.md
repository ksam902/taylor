#Taylor

###Overview
Taylor is a bootstrapping tool for WordPress to help aleviate some of the pains and monotony of starting a new custom WordPress theme from scratch. Taylor takes a few command line arguments (or a manifest file) and streamlines processes such as creating a new theme with skeleton files (`functions.php`, `style.css`, headers and footers, etc.), creating custom post types, creating index pages for those post types, and creating templates for post types and index pages. There is a lot more planned in Taylor's immediate future, including custom fields support, but for now, in this pre-alpha phase, we're sticking to the basics.

###Usage
Drop Taylor into your themes directory (wp-content/themes). Follow the command line or manifest usage (below) by passing commands and arguments to the `src/taylor.php` script via the php cli.

###Required Plugins
Taylor doesn't require any WordPress plugins to run, though the theme is creates makes a few assumptions. The theme generated requires the Smarty For WordPress plugin. As development continues other plugins will become required, including Advanced Custom Fields. For now the required WordPress plugins are as follows.
* [Smarty for WordPress - version 3.1.21](https://wordpress.org/plugins/smarty-for-wordpress/)

###Command Line Usage

###Mainfest Usage

###Road Map

* Advanced Custom Field integration
* Define assests (js/css) with location (header/footer) in manifest
* Compress to Phar for portability
* Install & activate plugins via manifest
* Set various configuration options via manifest
* Expand customization in manifest file, allow users to specify more options such as posts per page
* Though a default set of includes will be included in the Phar, allow users to specify their own includes directory in the manifest, this would allow users to use any template system they want and customize their boilerplate with things like custom JavaScript and CSS libraries.