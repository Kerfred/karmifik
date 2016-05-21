=== Simple QR Code Generator Widget ===
Contributors: nemezis
Tags: simple qr code , qr, code, bar code generator, simple bar code generator
Requires at least: 2.0.2
Tested up to: 4.3.1
Stable tag: trunk


Simple QR Code Generator

== Description ==

Very Simple and intuitive QR Code Generator that allows you to place a QR Code widget on your sidebar.

You can set custom QR code image size as well as create QR code for specific urls or content. 

Tool is based on Google Chart Tools.

== Installation ==

1. Upload `qrCode.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place qrCode in widget area

== Frequently Asked Questions ==

This is a fist version so feel free extend it as you wish.

Any questions?


== Screenshots ==

1. The widget settings
2. Widget on the front end

== Changelog ==

= 1.0 =
* Basic functionality

= 1.1 =
* Links update

= 1.2 = 
* Removing deprecated functions

= 1.3 =
* Wordpress version 3.9.1 support
* Renamed widget from widget_qrCode to widget_qr_code. This update will enforce css class update to '.widget_qrCode'

= 1.4 = 
* Wordpress version 4.3.1 support
* Renamed functions for cosistency
* Code formatting
* added sprintf function 
* added support for https sadly Google API is not availible on https ;)

= 1.5 =
* Remove closing tag from end of the plugin to prevent 'Warning: session_start()' error


<?php code(); // goes in backticks ?>`
