/*
@author nicolaas[at]sunnysideup.co.nz
also see:
http://code.google.com/apis/youtube/player_parameters.html
http://code.google.com/apis/youtube/js_api_reference.html
*/

var YouTube = {

	elementID: "YouTubber",
		setElementID: function(v){YouTube.elementID = v;},

	params: { allowScriptAccess: "always", wmode: "transparent", controls: 1  },

	player: null,

	loadVideo: function(videoID, width, height) {
		swfobject.embedSWF("http://www.youtube.com/v/" + videoID +
                           "?version=3&enablejsapi=1&playerapiid=player1",
                           YouTube.elementID, width, height, "9", null, null, YouTube.params, { id: YouTube.elementID})
	},

	play: function() {
		YouTube.player.playVideo();
	},

	loadNew: function(videoID) {
		YouTube.player.loadVideoById(videoID);
		//player.playVideo();
		return false;
	},

	resize: function(width, height) {
		width = parseInt(width);
		height: parseInt(height);
		YouTube.getPlayer().setSize(width, height);
	},


	loadFullScreenVideo: function(videoID) {
		var x = 0;
		if (self.innerHeight) {
			x = self.innerWidth;
		}
		else if (document.documentElement && document.documentElement.clientHeight){
			x = document.documentElement.clientWidth;
		}
		else if (document.body) {
			x = document.body.clientWidth;
		}
		var y = 0;
		if (self.innerHeight){
			y = self.innerHeight;
		}
		else if (document.documentElement && document.documentElement.clientHeight){
			y = document.documentElement.clientHeight;
		}
		else if (document.body){
			y = document.body.clientHeight;
		}
		return YouTube.loadVideo(videoID, x, y);
	},

	onPlayerError: function(errorCode) {
		alert("An error occured of type:" + errorCode);
	}


}


// This function is automatically called by the player once it loads
function onYouTubePlayerReady(playerId) {
	var ytplayer = document.getElementById(playerId);
	YouTube.player = ytplayer;
	YouTube.player.addEventListener("onError", YouTube.onPlayerError);
}


