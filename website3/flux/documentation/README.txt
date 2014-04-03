----------------------------
CONTENT OF THIS FILE
----------------------------

 * Theme Info
 * Pages Provided
 * Key Features
 * Customisation
 * Upgrading 
 * Credits
 * Issues & bug reporting
 * Stay up-to-date


----------------------------
THEME INFO
----------------------------

Name: AppStrap
Version 2.0
Created: Jan 2013
Creator: http://themelize.me
Bootstrap version: 3.0


----------------------------
PAGES PROVIDED (17)
----------------------------
* Index (index.htm)
* Features (features.htm)
* Pricing (pricing.htm)
* Customers (customers.htm)
* About (about.htm)
* Team (team.htm)
* Contact (contact.htm)
* Blog (blog.htm)
* Blog left sidebar (blog-leftbar.htm)
* Blog post (blog-post.htm)
* Login (login.htm)
* Signup (signup.htm)
* Starter (starter.htm)
* Index static slideshow (index-static.htm)
* Colours (colours.htm)
* Elements (elements.htm)
* Bootstrap Mobile Menu (bs-mobile-menu.htm)


--------------------------
KEY FEATURES
--------------------------

* Built on Bootstrap 3.0
* Font Awesome icons 3.2.1
* Retina ready
* Bootstrap JavaScript implemented: dropdowns, tabs, modals
* Mobile first & fully responsiv  (wide, normal, narrow, mobile)
* Modal login & signup boxes
* 2 Mobile menu options
* Easy to customise
* Start template snippets (starter.htm & elements.htm)
* jQuery clingify plugin
* jQuery jPanel Menu plugin for mobile menus
* jQuery Quicksand plugin
* jQuery Flexslider plugin with animate.css integration
* Simple & clean design
* Valid HTML5
* 3 preset colour skins
* Slideout hidden header region
* Mega menu


--------------------------
CUSTOMISATION
--------------------------

1. Overriding Colour Skin
--------------------------
The theme offers 2 additional colour schemes (3 in total including the default green):
Green (default): #55A79A
Blue: #00ADBB
Red: #BE3E1D


Each additional one has a separate .css file within the /css directory:
1. colour-red.css
2. colour-blue.css

These files can be used as an example of how to implement your own colour schemes.

Example - Add the following to your <head> tags below the "<!--Your custom colour override-->": 
<link href="css/colour-blue.css" id="colour-scheme" rel="stylesheet">

NOTE: 
You will need to do this on all pages to implement site wide.
The "colour-scheme" ID tag is only required if you want the jQuery colour switcher to be functionality.
Quickest way to hide the colour switcher is to add .colour-switcher { display: none; } to your CSS.


2. Overriding Other Styles
--------------------------
Similarly to colour overriding the theme also offers and automatically loads a skeleton file called "custom-style.css" which can be used to override the theme structure & media queries.
This file is found within the /css directory and is well commented to provide instruction.


3. Adding New Pages
--------------------------
The theme comes with 2 useful templates of snippets (starter.htm & elements.htm) which can be copy & pasted to start new pages.
We also recommend using http://bootsnipp.com.


4. Retina Images
----------------------------------------------------
AppStrap is retina (High Definition) ready (as of version 2.0) and all images provided with the theme are also offered with a retina version.
To make your own images retina ready you just need to think double sized & appended @2x to the filename.

Here's an example:
* Standard definition size:     310px wide X 410px high
* High definition size:         620px wide X 820px high
* Standard definition filename: my-image.jpg
* High definition filename:     my-image@2x.jpg

Place both images in the same directory and the Retina.js plugin (http://retinajs.com/) will automatically swap in the high definition version on device which support retina display.
NOTE: This is totally optional, if the plugin does not find a retina version of any images, the standard definition image is left.


5. Mobile Menu Options
----------------------------------------------------
AppStrap (since version 2.0) supports both Bootstraps default mobile menu and the jPanel Menu jQuery plugin (http://jpanelmenu.com/) combined with jRespond plugin.

jPanel Menu is implemented as default, to switch to the default Bootstrap mobile menu you just need to replace the line:
<a class="navbar-btn" data-toggle="jpanel-menu" data-target=".navbar-collapse">
with:
<a class="navbar-btn" data-toggle="collapse" data-target=".navbar-collapse">

See the bs-mobile-menu.htm file for an example.


6. Sticky Navbar
----------------------------------------------------
By default (since version 2.0) the Clingify jQuery plugin (http://theroux.github.io/clingify/) is set to invoke a sticky nav bar on scroll.
This is done by adding data-toggle="clingify" to the navbar container. To disable this simply remove the data-toggle="clingify" code from all pages.
Bootstrap .navbar-fixed-top can be used if clingify and jPanel Menu are disabled first.


7. Slideshow Animations
----------------------------------------------------
AppStrap (since version 2.0) supports intro animations on slideshows thanks to the amazing animate.css plugin.
The animation is CSS based so not supported by older browsers.

Animations:
All the animations provided by animate.css can be added to elements within the slideshow slides using the data-animate-in attribute to animate them, some examples:
data-animate-in="bounceInLeft"
data-animate-in="fadeInUp"

Animation durations:
You can control the duration of animations using the data-animate-duration attribute, options are:
data-animate-duration="dur-fast"   = 0.5 seconds
data-animate-duration="dur-slow"   = 2 seconds
data-animate-duration="dur-x-slow" = 3 seconds

Animation delays:
You can delay animations using the data-animate-delay attribute, options are:
data-animate-delay="de-02" = 0.2 seconds
data-animate-delay="de-04" = 0.4 seconds
data-animate-delay="de-06" = 0.6 seconds
data-animate-delay="de-08" = 0.8 seconds
data-animate-delay="de-1"  = 1 seconds
data-animate-delay="de-12" = 1.2 seconds
data-animate-delay="de-14" = 1.4 seconds
data-animate-delay="de-16" = 1.6 seconds
data-animate-delay="de-18" = 1.8 seconds
data-animate-delay="de-2"  = 2 seconds

Full example:
<h2 data-animate-in="bounceInRight" data-animate-delay="de-06" data-animate-duration="dur-x-slow">AppStrap Bootstrap Theme</h2>


--------------------------
UPGRADING
--------------------------
See the /documentation/upgrade folder which contains pdfs contain the upgrade path between versions.


--------------------------
CREDITS
--------------------------

* Slideshow graphics: http://medialoot.com & http://www.premiumpixels.com/
* Team photos: http://www.flickr.com/photos/vectorportal/sets/72157622868867274/
* Blog photos: http://www.flickr.com/photos/xjrlokix/ (Ben Fredericson)
* Patterns: http://subtlepatterns.com/


--------------------------
ISSUES & BUG REPORTING
--------------------------

If you run into issues or find a bug which is not related to Bootstrap itself then please report the bug to us at info@themelize.me


--------------------------
STAY UP-TO-DATE
--------------------------
Join our mailing list at http://themelize.me to stay up-to-date with all our product launches & updates.