function getNumVideos(){
  return parseInt(my_videos.length);
}

function getQuestionId(){
  var questionNum = parseInt($('#iframe_working').val()) + 1;
  return questionNum;
}