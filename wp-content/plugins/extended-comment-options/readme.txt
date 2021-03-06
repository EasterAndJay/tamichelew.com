=== Plugin Name ===
Contributors: maerk, fullthrottledevelopment, blepoxp
Tags: comments, spam, batch
Requires at least: 2.7
Tested up to: 3.3.1
Stable tag: trunk

Extended Comment Options allows you to close or open comments on batches of posts. You can schedule this automatically, too.

== Description ==

WordPress allows you to close comments or pings on individual posts, but if you want to close comments and/or pings on more than 10 posts, you're in for a long ride! Extended Comment Options allows you to close comments or pings (or both) on all your posts at once, if you want. You can also choose batches of posts based on criteria you specify:

1. Posts made before or after a specific date.
1. The last X posts (where X is a number you choose) or posts made in the last X days, weeks, months or years.
1. Posts with a certain amount of comments. For example, you can close comments on posts once 10 comments have been left.

The last two options can be set to update automatically. So you can close comments on the last 5 posts, and keep them closed as you make new posts. Or you can set it so that comments are closed on a post after the 10th one has been left.

Extended Comment Options also allows you to exclude certain posts. So, for example, if you want to close posts older than 5 days, but you have a popular post that draw a lot of comments, you can opt to leave it alone. You can choose as many posts as you'd like.

This plugin was originally developed and maintained by Mark Kenny. FullThrottle Development took over with version 2.6
Mark Kenny: http://beingmrkenny.co.uk/

== Installation ==

1. Extract the files. Upload `extended-comment-options` folder to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. That's it! Once the plugin is activated there is a new item in the comments menu titled Batch Status which contains all the options.

== Frequently Asked Questions ==

= Does Extended Comment Options hide existing comments? =

No, but the theme you're using may hide comments on posts if comments are closed. If you're comfortable with PHP you can change the theme yourself in the `single.php` file in your theme folder. If you're not, you can contact the author of your theme or try the support forums if you need help.

== Upgrade Notice ==
Updated several deprecated functions and error notices to make the plugin run more smoothly with newer versions of WordPress. More updates coming.

== Screenshots ==

1. The admin panel has been redesigned to make it much easier to use.
