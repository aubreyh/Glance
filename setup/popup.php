<!doctype html>

<html lang="en">
<head>
<meta charset="utf-8" />
<title>Setup</title>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" href="css/setup.css" />
<link rel="stylesheet" href="css/bar.css" />
<script src="scripts/popup.js"></script>
<link rel="stylesheet" href="css/pure-min.css">
<link rel="stylesheet" href="../bootstrap-3.3.4-dist/css/bootstrap.css">
<script src="../bootstrap-3.3.4-dist/js/bootstrap.js"></script>
<script src="../bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
<script src="../bootstrap-3.3.4-dist/js/npm.js"></script>
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
<div class="page">
<h3 align="center">Setup</h3>
<div class="page-center-container">
  <div>

<table style="margin-right:10px">
  <tr>
    <td height="50" width="15%"><strong>Action:</strong>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
    <td width="10%" align="center">
    <input placeholder="Label" class="form-control" align="center" id="action_label" type="text" />
    </td>
    <td align="right" colspan="2"><input placeholder="Description" class="form-control" style="width: 225px" id="action_description" type="text" /></td>   
  </tr>
  <tr>
    <td><strong>Segment:</strong></td>
    <td height="50">
      <select class="form-control" style="width: 155px">
        <option selected="selected" disabled>How to segment</option>
        <option value="partition">Partition</option>
        <option value="exist">Exist</option>
        <option value="segmented">Segmented</option>
      </select>
    </td>
  <td align="right">&nbsp&nbsp&nbsp&nbsp&nbsp<strong>Type:</strong>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
  <td height="50" align="right">
  <div>
  <select class="form-control" style="width: 135px">
  <option selected="selected" disabled>Select a type</option>
  <option value="binary">Binary</option>
  <option value="category">Category</option>
  <option value="likert">Likert</option>
  <option value="scalar">Scalar</option>
</select>
</div>
</td>
  </tr>
  
  <tr>


  <div style="float: left; width: 50px;">
  <td height="50"><strong>Example:</strong>
  </div>
  <div style="float: right; width: 0px;">
  <input type="checkbox" name="example" value="example"><br></td>
  </div>
  <td>
  <div align="right">
  <form>
  <input type="radio" name="example" value="image" checked>Image
  <br>
  <input type="radio" name="example" value="video">Video&nbsp&nbsp
  </form> 
  </div>
  </td>
  <td colspan="2" align="right">
   <img src="images/smile.png" alt="Smiley face" height="100" width="180"> 
  </td>
  </tr>
  <tr>
    <td colspan="2">
      <strong>Apply to:</strong>
      <br>
      <br>
  <div>
  <form>
  <input type="radio" name="videos" value="current" checked>Current&nbspVideo
  <br>
  <input type="radio" name="videos" value="all">All&nbspVideos
  <br>
  <input type="radio" name="videos" value="custom">Custom
  </form> 
  </div>
  </td>
  </tr>
  <tr>
<td></td>
  <td>
  <div class="checkbox">
  <label>
    <input type="checkbox" value="video1">
    Video 1
  </label>
</div>
</td>
<td>
<img src="images/smile.png" alt="Smiley face" height="75%" width="100%"> 
</td>
  </tr>
    <tr>
  <td colspan="2" width="20%" height="50" align="right">
    <input type="button" onclick="setup_save()" class="btn btn-primary" value="Save" id="save" />
    </td>
  <td colspan="2" height="50" align="right">
    <input type="button" onclick="setup_advanced()" class="btn btn-link" value="Show Advanced Options" id="adv_" />
  </td>
  </tr>
</table>
  </div>
</body>
</html>
