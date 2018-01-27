=== wpDataTables Lite ===
Contributors: wpDataTables
Author URI: http://tms-plugins.com/
Plugin URI: http://wpdatatables.com/
Tags: tables, wpdatatables, tables from excel, tables from CSV, datatables
Requires at least: 4.0
Tested up to: 4.9.1
Requires PHP: 5.4
Stable tag: 2.0.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin allows you to quickly create interactive sortable tables on your WordPress site based on a number of input sources - Excel, CSV, XML, JSON, PHP array. Modern Material-based design, polished UX and vast functionalities make table creation process quick and efficient.

== Description ==

wpDataTables Lite is a basic version of a popular best-selling premium table creator plugin. While some of premium features are reduced, wpDataTables Lite is still quite a handy tool which would allow you to quickly create tables in WordPress from different sources:

* Excel - [Text and video documentation](https://wpdatatables.com/documentation/creating-wpdatatables/creating-wpdatatables-from-excel/)
* CSV - [Text and video documentation](https://wpdatatables.com/documentation/creating-wpdatatables/creating-wpdatatables-from-csv/)
* JSON - [Text and video documentation](https://wpdatatables.com/documentation/creating-wpdatatables/creating-wpdatatables-from-json-input/)
* XML - [Text and video documentation](https://wpdatatables.com/documentation/creating-wpdatatables/creating-wpdatatables-from-xml/)
* Serialized PHP array - [Text and video documentation](https://wpdatatables.com/documentation/creating-wpdatatables/creating-wpdatatables-from-serialized-php-array/)

Tables are created in 3-4 very basic steps:

1. Prepare the data source (for example the CSV file)
2. Create a new wpDataTable in the WP-admin panel and upload your file
3. Optional step - configure the columns of the table (rename, reorder, add CSS classes, hide, change colors)
4. Paste the generated shortcode in your post or page (you can also use the TinyMCE button in the standard WordPress post editor that the plugin adds)

All tables will become sortable, and will have pagination by default.
Additionally, each table can have a search bar, and can have "Copy to Clipboard", "Export to CSV", "Export to PDF", "Export to XLS" functions. All these functionalities are configurable and it is you decision whether to toggle these on or off.

Following column data types are supported (most column types, except the images, have its own sorting rules):

* String -  [Text and video documentation](https://wpdatatables.com/documentation/column-features/string-columns/)
* Integer - [Text and video documentation](https://wpdatatables.com/documentation/column-features/integer-columns/)
* Float -   [Text and video documentation](https://wpdatatables.com/documentation/column-features/float-columns/)
* Date -    [Text and video documentation](https://wpdatatables.com/documentation/column-features/date-columns/)
* DateTime - [Text and video documentation](https://wpdatatables.com/documentation/column-features/datetime-columns/)
* Time -    [Text and video documentation](https://wpdatatables.com/documentation/column-features/time-columns/)
* Image -   [Text and video documentation](https://wpdatatables.com/documentation/column-features/image-columns/)
* URL link - [Text and video documentation](https://wpdatatables.com/documentation/column-features/url-link-columns/)
* E-mail link - [Text and video documentation](https://wpdatatables.com/documentation/column-features/e-mail-link-columns/)

Please note some limitations of the Lite version:

1. Plugin will allow only tables up to 150 rows.
2. MySQL-query based tables supprt is not included.
3. Server-side processing for large tables is not included.
4. Responsive mode for the tables is not included.
5. Front-end editing is not included.
6. Excel-like editing is not included
7. Google Charts and HighCharts are not included.
8. Table Constructor Wizard (step-by-step table generator) is not included.
9. Access to our premium support system is not included.

You can get all of these features by purchasing the full version on the plugin's site.

Please note that wpDataTables requires PHP 5.4 or newer!

== Installation ==

Installation of the plugin is really simple.

1. Install using one of these options:
    * Install directly from WordPress Admin panel: go to Plugins -> Add New -> Search for "wpDataTables", and click the Install button.
    * Download the ZIP manually from WordPress' plugins repository, and upload it through WordPress Admin panel: go to Plugins -> Add New -> Upload Plugin, browse to the downloaded Zip and upload it.
    * Download the ZIP, extract it and manually upload the extracted folder through FTP to the `/wp-content/plugins/` directory of your WordPress installation.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. That's it!

== Frequently Asked Questions ==

= I added a table but see no sorting, filtering or pagination =

Usually this happens when PHP version is older than 5.4 is installed. Please first check this, and upgrade to PHP 5.4 or more, if that’s the issue.

= How to hide “Showing X of X entries” in pagination? = 

Go to display tab of the table settings block and disable the “Info block” setting.

= How to disable/enable opening links in a popup? =

You can configure how the links will be opened by toggling the “URL target attribute” switch
In the Data tab of the Column Settings popup. It is up to you to define for each URL column if you prefer the link to open in a new or in the same tab.

= How to hide “Show X entries” block from pagination? =

Go to display tab of the table settings block and disable the “Rows per page” setting.

= How to add symbols or text before/after cell values without affecting sorting (currency, percents, etc.) =

For every table column in the column settings modal you can find text fields “Cell content prefix” and “Cell content suffix” in Display tab.
Values from those text fields will be appear before or/and after every cell content in a column.
This feature uses CSS for displaying the entered text, therefore sorting of the columns will not be affected.

= How to change the format of dates? =

Date format can be changed in wpDataTables Settings page using the “Date format” drop-down menu.

= How to change thousand and decimal separators for number columns? =

This can be changed from the “Number format” drop-down menu in the wpDataTables Settings page.


== Screenshots ==

1. Front-end table preview.
2. Back-end table editor preview.
3. Table preview from the back-end
4. Table browser example
5. General settings
6. Column settings
7. Plugin settings

== Changelog ==

= 2.0.2 =
* The plugin’s design was re-worked from scratch to a more intuitive, smooth and user friendly interface following Material Design guidelines;
* New skin and new UI elements – a new Material-style skin for tables front-end, new UI elements;
* Feature: Checkbox for including Bootstrap on the front-end added on the Settings page;
* Feature: New settings for URL link columns – now it is possible e.g. to make them display as buttons, configure if the links should open in a new tab, or change the default text;
* Fix: removed “All” when table displays all of the entries, and if you have less entries than selected displayed length;
* Under-the-hood improvements
* Security and stability improvements;
* A number of other minor bugfixes;
* Compatibility with WordPress 4.9.1 approved.


= 1.2.3 =
* Security issues fixed for deleting and loading wpDataTable.

= 1.2.2 =
* Security issues fixed for all save actions.

= 1.2.1 =
* Compatibility with WP 4.7 approved
* Problem with PHPExcel components resolved

= 1.2 =
* DateTime column type added
* Time column type added
* Extended multisite support
* Improved Settings page
* Compatibility with WP 4.6.1 approved
* Numerous bugfixes

= 1.1 =
* Migrated Table Tools to use HTML5 instead of Adobe Flash
* Advanced settings for configuring Table Tools (individually per button)
* Wide tables can be configured to be horizontally scrollable 
* Upgraded used libraries
* Compatibility with WP 4.5.2 approved
* Numerous bugfixes

= 1.0 =
* Launch of the Lite version

