===  Advanced Queries ===
Contributors: shabti
Tags: elementor, queries, posts, advanced query, dynamic query, advanced queries, dynamic queries
Requires at least: 4.6
Tested up to: 6.1.1
Stable tag: 1.1.0
Donate link: https://paypal.me/KaplanWebDev
Requires PHP: 5.2.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

An Elementor extension that allows you to easily dynamically query your posts, portfolio, and loop grid widget results without custom query IDs.

== Description ==

Only works with Elementor PRO (for now....)

An Elementor PRO extension that allows you to easily dynamically query your posts and portfolio widget results without custom query IDs.

This plugin is built on Elementor's posts, portfolio, and loop grid widgets so Elementor Pro must be installed and activated. You can use this plugin to query your posts based on a dynamic author field or date field. If you have any special requests, just message us on our website or FB page and we will try to add it to the plugin right away. 

This is compatible with ACF and Jetengine too. This works for the Elementor Pro posts, portfolio, loop grid, and loop carousel widgets as well as Elementor Extras post extras widget. (If you want this to be compatible with another widget, we can check if it's possible).

So far you can query your posts in the following ways:

= Users =
1. Author is Current User. The logged in user will only see posts that he/she is the author of.
2. Author is Current Author. Show other posts by the current author.
3. Custom Field is Current User. The logged in user will only see posts where the custom field equals his/her ID, email, or username, based on whichever key you choose.

= Dates =
1. Pre Expired Posts. Choose a custom date field ( in "Ymd" format ) that returns an expiration date. Only non-expired posts will show.
2. Expired Posts. Choose a custom date field ( in "Ymd" format ) that returns an expiration date. Only expired posts will show.
3. Start and end dates. Choose 2 custom date fields ( in "Ymd" format ) that return a start and end date. Only posts within between these 2 dates will show.
4. Query by the time.

= Related Posts =
1. Dynamic Related Posts. Show posts that are dynamically hand picked by a relationship or post object field.
2. Dynamic Related Terms. Show posts that are dynamically hand picked by a taxonomy field.
3. Custom Field is Current Post ID. Show posts that contain a custom field that is equal to the current post.

= Similar Field Values =
1. Custom Field is Value. Show posts that contain a custom field with a similar value.
2. Custom Field Contains Value. Show posts that contain a custom field with one of many values.

= Order By =
1. Dynamic OrderBy. Dynamically order the posts by a custom field.
2. OrderBy Last Modified. Order posts by last modified date.


== Useful Links ==
Appreciate what we're doing? Please give us a like on our facebook page: 
[Kaplan Web Development Facebook page](https://www.facebook.com/kaplanwebdev/)

Check out our other plugin, which lets you give your clients the ability to update their posts from the frontend: 
[ACF Frontend for Elementor](https://wordpress.org/plugins/acf-frontend-form-element/)
[ACF Frontend Pro for Elementor](https://www.frontendform.com/)

Check out Elementor Pro. We highly recommend pro for anyone who is looking to get more out of WordPress and Elementor:
[Elementor Pro](https://elementor.com/pricing/)

== Installation ==

1. Make sure both Elementor and Elementor Pro are installed and activated. This plugin will not do anything without both of them. 
2. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
3. Activate the plugin through the 'Plugins' screen in WordPress
4. Jump into the Elementor editor and start quering your posts dynamically 




== Changelog ==
= 1.1.1 =
* Release Date - April 17, 2023*
* Added support for the new loop carousel widget from Elementor

= 1.1.0 =
* Release Date - November 21, 2022*
* Added support for the new loop grid widget from Elementor

= 1.0.16 =
* Release Date - September 15, 2022*
* Fixed Post is in Current Post Custom Field option not working properly

= 1.0.15 =
* Release Date - June 24, 2020*
* Fixed error for in last update

= 1.0.14 =
* Release Date - June 22, 2020*
* Added option to query by posts that share the same terms

= 1.0.12 =
*Release Date - May 26, 2020*

* Fixed the Custom Field Value options

= 1.0.10 =
*Release Date - May 03, 2020*

* Fixed "Post author is Archive author" query

= 1.0.9 =
*Release Date - March 13, 2020*

* Fixed - Fixed Start and End Date options. IMPORTANT! For simplicity's sake, we seperated the start and end dates option into two. So if you had a dynamic date range using this option, select "start date" and "end date" after updating.
* New - Added order by comment count option
* Tweak - Added better support for integration with custom query ids
* Coming soon: User list widget

= 1.0.8 =
*Release Date - March 12, 2020*

* New - Added an option to include or exclude current date/time from dynamic date range
* New - Added extra support for multi valued field. Unfortunately, chackboxes are still not supported
* Tweak - Fixed the labels a bit so that the query options are more clear

= 1.0.7 =
*Release Date - February 16, 2020*

* Fix - Fixed the related posts option to show no posts when this option is selcted and no field name or posts have been selected yet.

= 1.0.6 =
*Release Date - February 12, 2020*

* New - Added an option to query by the time.
* New - Added an option to query posts if a custom field equals current user's email or username.
* New - Added support for Elementor Extras posts extra widget.


== Upgrade Notice ==





