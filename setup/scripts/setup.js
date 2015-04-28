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

function add_playlist_entry(url) {
  document.getElementById("hidden_row").style.display = "none";
  var counter = my_videos.length + 1;
  
  //if(counter <= 5) {
  
  
  newRow = "<tr class='entry'>" +
  "<td><a href="+url+"></a></td>" +
  "<td style='height:60px'><img src='images/image.png' alt='Video Thumbnail' height='50' width='50'></td>" +
  "<td>"+
  "<span class='name'>"+url+"</span><br/>" +
  "<span class='subtext'>Description</span>" +
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