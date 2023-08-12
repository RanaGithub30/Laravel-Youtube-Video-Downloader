function youtubeVideo(){
    let url = document.getElementById('youtube_link').value;

    if(url != ""){
    /**
     * fetch youtube video id
    */

    var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
    var match = url.match(regExp);
    let videoId;
    
    if(match&&match[7].length==11){ 
        videoId = match[7];
    }else{
        videoId = "";
    }

    /**
     * fetch video information
    */

    // Create a new YouTube player
    var player = new YT.Player('youtube-player', {
        height: '360',
        width: '640',
        videoId: videoId,
        playerVars: {
          autoplay: 1, // Set to 1 for autoplay
        },
        events: {
          onReady: onPlayerReady,
        },
      });
  
      // Function to be called when the player is ready
      function onPlayerReady(event) {
        event.target.playVideo();
      }

      document.getElementById('download_video').style.display = "block";
      // document.getElementById('youtube_link').value = "";
    }

}

/**
 * Download
*/

function downloadFile(){
  let url = document.getElementById('youtube_link').value;
  
  if(url != ""){
    $('.download-video').html('<iframe style="width:100%;height:60px;border:0;overflow:hidden;" scrolling="no" src="https://loader.to/api/button/?url='+url+'"></iframe>');
  }
}