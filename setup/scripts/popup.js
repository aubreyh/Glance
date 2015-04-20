function selectVideos() {
  // var selectedVideo = top.window.opener.getVideoId();
  
  // var counter = top.window.opener.getNumVideos();
    
  // for (var i=0; i < counter; i++) {
    // var videoNum = i+1;
    // var newRow;
   
    // if (videoNum == selectedVideo){
      //preselect the checkbox associated with the selected video
      // newRow = "<tr><td><input type='checkbox' value='video"+videoNum+"' checked></td>"        
    // }
    // else {
        // newRow = "<tr><td><input type='checkbox' value='video"+videoNum+"'></td>"
    // }
    // newRow += "<td><label>Video "+videoNum+"</label></td></tr>";
    // $("#videos_popup tbody").append(newRow);
    // }
}

function setupAdvanced(){
   top.window.opener.addBar();
   self.close();
}


function saveSetup() {
  alert("called function");
  //questionNum = top.window.opener.getQuestionId();
  //alert(top.window.opener.getVideoId());
  //alert(top.window.opener.getQuestionId())
  //write info to db

// video_ids  (array of ints) -- which videos the question applies to
// question_id (int)
// segment(text)
// type(text)
// example (boolean)
// example_type (text) -- image or video 

    // $.ajax({
        // type: "POST",
        // async: false,
        // url: "php/addQuestionDb.php",
        // data: {action: $('#action_label').val(), description: $('#action_description').val()},
        // success: function() {
          // alert("added initial row to db");
        // },
        // fail: function(){
          // alert("Failed to add row to db");
        // }
    // });
         
   //top.window.opener.addBar();
   //self.close();
}

function show_hide(id, elements) {
  formElement = document.getElementById(id);
  numElements = elements.length;
  
  for (var i = 0; i < numElements; i++) 
  {
    if (formElement.checked == true) 
    {
      //show content
      document.getElementById(elements[i]).style.display = "block";
    }
    else if(formElement.checked == false)
    {
    //hide content
    document.getElementById(elements[i]).style.display = "none";
    }
  }
}
