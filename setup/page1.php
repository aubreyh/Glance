<!doctype html>

<html lang="en"><head>
<meta charset="utf-8" />
<title>End-User Setup</title>


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script src="scripts/jquery1.9.js"></script>
<script src="scripts/jquery_ui.js"></script>
<script src="../utils/gup.js"></script>
<script type="text/javascript" src="scripts/shared.js"></script>
<script src="scripts/setup.js"></script>
<script src="scripts/addLabel.js"></script>
<script src="scripts/bar.js"></script>
<script src="scripts/displaySegments.js"></script>
<script src="scripts/postClips.js"></script>
<script src="scripts/debug.js"></script>
<script src="scripts/range-bar.js"></script>
<script src="scripts/youtube.js"></script>
<!-- <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> -->

<!--
  <script src="vis_tools/scripts/segvis.js"></script>
  <link rel="stylesheet" href="vis_tools/css/vis.css" />
  <link rel="stylesheet" href="vis_tools/css/style.css" /> -->

</head>
<?php
	function get_url(){

		if(isset($_POST['videourl'])){
			$videourl = $_POST['videourl'];
			return $videourl;
		}
	}
?>

<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Glance</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="page1.html">Videos <br/>&nbsp;&nbsp;&nbsp;&nbsp;1</a></li>
        <li><a href="page2.html">Task Design <br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2</a></li>
        <li><a href="page3.html">Dashboard<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3</a></li>
      </ul>
    </div>
  </div>
</nav>


<div id="main" >
<div id="upper" >
      
<div class="form-group" style="width: 50%; margin-bottom:50px; margin-left:20px">
<label for="Project">Project Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name="Project" id="project_label" type="text" />
</div>

     <div id="secondCol" class="col-sm-6 col-md-6">
     <div class="thumbnail">

     <!--     <form id="loadVideo" method="post">
  <ul>
    <li id="loadVideoButton">Click me</li>
  </ul>
     <input id="videoURL" name="videourl" class="form-control" placeholder="Video URL">
    
     </form>
     -->
  
 
     <table id="video_panel" width="100%">
     <tbody id="video_playlist">

    </tbody>
    </table>


    
    <table id="video_buttons" width="100%">
     <tbody>
     <tr>
       <td colspan="3" height="75" align="center">
    <input type="button" onclick="add_video()" class="btn btn-info" value="Add Video" id="add_video" />
    </td>

     </tr>
     
     </tbody>
     </table>
     <table width="100%">
     <tr id="hidden_row" style="display: none;">
     <td><input placeholder="Video URL" class="form-control" id="videoURL" width="60%" name="videourl" type="text" /></td> 
<td class="cell_button" align="right"><input type="submit" value="Load" id="loadVideoButton" class="btn btn-primary"></td>
</tr>
     </table>
     </div> 
     </div> <!--end second column -->
    
     <div id="firstCol" class="col-sm-6 col-md-6">
      <div class="thumbnail">
        <div id="videoPlayer">
          <div id="player"></div>
        </div>
      </div>
    </div> <!--end first column -->


</div> <!--end upper row -->



</div> <!--end main -->

</div>
<div style="width: 98%";>
<div style="float:right">
<input type="button" onclick="add_video()" class="btn btn-danger" value="Next" id="page1_2" />
<script type="text/javascript">
    document.getElementById("page1_2").onclick = function () {
        location.href = "page2.html";
    };
</script>
</div>
</body>
</html>


