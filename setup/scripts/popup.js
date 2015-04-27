function selectVideos() {
  //var selectedVideo = top.window.opener.getVideoId();
  //alert(selectedVideo);
  var counter = top.window.opener.getNumVideos();
  //document.getElementById("videos_popup").style.display = "none";
  
  for (var i=0; i < counter; i++) {
     var videoNum = i+1;
    // var newRow;
   
    // if (videoNum == selectedVideo){
      //preselect the checkbox associated with the selected video
      // newRow = "<tr><td><input type='checkbox' value='video"+videoNum+"' checked></td>"        
    // }
    // else {
		
    var newRow = "<tr><td><input type='checkbox' name'video_checkboxes' value='video"+videoNum+"'></td><td><label>Video "+videoNum+"</label></td></tr>";
    $("#videos_popup tbody").append(newRow);
   }
   
}

$( document ).ready(function() {
	selectVideos();
$('input:radio[name="coding_task"]').change(function(){
    if($(this).val() === 'category'){
       document.getElementById("category_options").style.display = "table-row";	
	   document.getElementById("likert_options").style.display = "none";
    }
	else if ($(this).val() === 'binary'){
		document.getElementById("category_options").style.display = "none";
		document.getElementById("likert_options").style.display = "none";
	}
	else {
		document.getElementById("likert_options").style.display = "table-row";
		document.getElementById("category_options").style.display = "none";
	}
});


$('select[name="video_selection"]').change(function(){
    //alert('all selected');
    if ($(this).val() == "all") {
		
	$(':checkbox').each(function() {
          this.checked = true;
      });
	}
	else if ($(this).val() == "none") {
	$(':checkbox').each(function() {
          this.checked = false;
      });
	}
    
});
}); //end document ready


function increment_choices(type) {
  var table_name = '#variations_' + type;
  var element = "#choices_" + type;
  var num_variations = parseInt($(element).text()); 
  //alert(num_variations);
   
  num_variations += 1;
  newRow = "<tr id='variation"+type+num_variations+"_row'>" +
  "<td>" +
  "<input type='radio' name='category_variation' value='variation"+type+num_variations+"_selector'>Variation "+num_variations+" :" +
  "</td>" +
  
 "<td colspan='3'>" +
 "<input placeholder='Description' class='form-control' id='variation"+type+num_variations+"_description' type='text' />" +
 "</td>" +
  "</tr>";
 
 $(table_name).append(newRow)
 $(element).text(num_variations);
}

function decrement_choices(type, minimum) {
  
  var element = "#choices_" + type;
  var num_variations = parseInt($(element).text()); 
  //alert(num_variations);
   
  if(num_variations > minimum){
	  var row_name = "#variation"+type+num_variations+"_row";
	 
	 $(row_name).remove();
	  num_variations -= 1;
	 $(element).text(num_variations);
  }
}

function setupAdvanced(){
   top.window.opener.addBar();
   self.close();
}


function saveSetup() {
  //alert("called function");
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
         
   top.window.opener.addBar();
   self.close();
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
