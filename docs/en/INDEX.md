Flash Module
================================================================================

Developer
-----------------------------------------------
Nicolaas Francken [at] sunnysideup.co.nz

Requirements
-----------------------------------------------
see composer.json

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
2. Review configs and add entries to mysite/_config/config.yml
(or similar) as necessary.
In the _config/ folder of this module
you can usually find some examples of config options (if any).




