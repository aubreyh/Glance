var my_videos = new Array();
//videos[0]=[""]; //initialize the video map

$( document ).ready(function() {
	$("#video_playlist").on("click", "tr.entry", function(){
		var href = $(this).find("a").attr("href");
		///alert(href);
        var url = href.split("=");
		loadVideo(url[1]);   
	});
	
});

function setup_question(){
  var w = screen.width * .75;
  var h = screen.height;
  var left = Number((screen.width/2)-(w/2));
  //var above = Number((screen.height/2)-(h/2));
 // popup_window = window.open("popup.html","popup","width="+w+",height="+h+", top=0, left="+left+",scrollbars=yes");
  //selectVideos();
    popup = window.open("popup.html","popup","width="+w+",height="+h+", top=0, left="+left+",scrollbars=yes");
    popup.focus();
	
  }
  
//function getVideoId(){
//  return parseInt($("input:radio[name='videoSelection']:checked").val());
//}

function add_video(){
   document.getElementById("hidden_row").style.display = "table-row";	
}

function add_playlist(){
   alert('add playlist');
}

function add_playlist_entry(url, videoId) {
  document.getElementById("hidden_row").style.display = "none";
  var counter = my_videos.length + 1;
  
  //if(counter <= 5) {
  var result = getYoutube(videoId);
  var title = result[0];
  var thumbnail = result[1];
  newRow = "<tr class='entry'>" +
  "<td><a href="+url+"></a></td>" +
  "<td style='height:60px'><img src='"+thumbnail+"' alt='Video Thumbnail' height='50' width='50'></td>" +
  "<td>"+
  "<span class='name'>"+title+"</span><br/>" +
  "<span class='subtext'>"+url+"</span>" +
  "</td>" +
  "</tr>";

  //$('#playlist > tbody > tr').eq(counter-1).before(newRow);
  $("#video_playlist").append(newRow)
  my_videos.push(url);
  // }
  // else{
    // alert("Maximum number of videos reached.");
  // }
}

function getYoutube(id) {
	var result = new Array();
	//alert(getResponse(id));
	var responseTextObject = jQuery.parseJSON(getResponse(id));
	var videoTitle = responseTextObject.items[0].snippet.title;
	result.push(videoTitle);
	var thumbnail = responseTextObject.items[0].snippet.thumbnails.default.url;
	result.push(thumbnail);
	return result;
}
function getResponse(id) {
    return $.ajax({
        type: "GET",
        url: 'https://www.googleapis.com/youtube/v3/videos?part=snippet&id='+id+'&key=AIzaSyB-jycGVjnFwDvlUxQpoRE4fOZrmGYUBpg',
        async: false,
    }).responseText;
}