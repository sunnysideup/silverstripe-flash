###############################################
Flash Module
Pre 0.1 proof of concept
###############################################

Developer
-----------------------------------------------
Nicolaas Francken [at] sunnysideup.co.nz

Requirements
-----------------------------------------------
SilverStripe 2.3.0 or greater.

Documentation
-----------------------------------------------
This module allows you to add flashObjects the "correct" way.
You can either use a DataObjectDecorator OR just use pre-configured
data for your flashobjects


 @source http://code.google.com/p/swfobject/wiki/documentation
 @see http://www.swffix.org/swfobject/generator/

Allows insertion of Flash Files the "proper" way.


/*
How can you use HTML to configure your Flash content?

You can add the following often-used optional attributes [ http://www.w3schools.com/tags/tag_object.asp ] to the object element:

    * id
    * name
    * class
    * align

You can use the following optional Flash specific param elements [ http://www.adobe.com/cfusion/knowledgebase/index.cfm?id=tn_12701 ]:

    * play
    * loop
    * menu
    * quality
    * scale
    * salign
    * wmode
    * bgcolor
    * base
    * swliveconnect
    * flashvars
    * devicefont [ http://www.adobe.com/cfusion/knowledgebase/index.cfm?id=tn_13331 ]
    * allowscriptaccess [ http://www.adobe.com/cfusion/knowledgebase/index.cfm?id=tn_16494 ] and [ http://www.adobe.com/go/kb402975 ]
    * seamlesstabbing [ http://www.adobe.com/support/documentation/en/flashplayer/7/releasenotes.html ]
    * allowfullscreen [ http://www.adobe.com/devnet/flashplayer/articles/full_screen_mode.html ]
    * allownetworking [ http://livedocs.adobe.com/flash/9.0/main/00001079.html ]
*/

Quick implementation of a youtube video
-----------------------------------------------


1. add the following to your controller class:

		function FlashObjectData() {
			$obj = new FlashObject()
			return $obj->CreateYouTubeVideo("Test Video", "v_A2flQJa20");
		}

2. in your template, add

<% include FlashObject %>

DONE
NB: there is no need to add the FlashObjectDecorator in your config file.

** ALSO SEE:
http://code.google.com/apis/youtube/player_parameters.html
http://code.google.com/apis/youtube/js_api_reference.html


Installation Instructions
-----------------------------------------------
1. Find out how to add modules to SS and add module as per usual.
2. copy configurations from this module's _config.php file
into mysite/_config.php file and edit settings as required.
NB. the idea is not to edit the module at all, but instead customise
it from your mysite folder, so that you can upgrade the module without redoing the settings.




