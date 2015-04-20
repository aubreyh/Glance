var videos = new Array();
//videos[0]=[""]; //initialize the video map

function setup_question(){
  var w = screen.width * .75;
  var h = screen.height * .75;
  var left = Number((screen.width/2)-(w/2));
  //var above = Number((screen.height/2)-(h/2));
  popup_window = window.open("popup.html","popup","width="+w+",height="+h+", top=0, left="+left+",scrollbars=yes");
  }
  
  function getVideoId(){
  return parseInt($("input:radio[name='videoSelection']:checked").val());
}

function getQuestionId(){
  var questionNum = parseInt($('#iframe_working').val()) + 1;
  return questionNum;
}

function getNumVideos(){
  return parseInt(videos.length);
}


function add_video(){
   document.getElementById("hidden_row").style.display = "table-row";	
}
	
function add_playlist_entry(url) {
  document.getElementById("hidden_row").style.display = "none";
  var counter = videos.length + 1;
  
  //if(counter <= 5) {
  
  newRow = "<tr>" +
  "<form id='loadVideo' method='post'>" +
  "<td style='height:60px'><img src='images/image.png' alt='Video Thumbnail' height='50' width='50'></td>" +
  "<td>"+
  "<span class='name'>"+url+"</span><br/>" +
  "<span class='subtext'>Description</span>" +
  "</td>"
  "</form>" +
  "</tr>";

  $('#video_panel > tbody > tr').eq(counter-1).before(newRow);
  videos.push("");
  // }
  // else{
    // alert("Maximum number of videos reached.");
  // }
}