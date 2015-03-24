<!doctype html>

<html lang="en">
<head>
<meta charset="utf-8" />
<title>End-User Setup</title>
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
<div class="page-center-container">
  <div>
<table style="width:100%">
  <tr>
    <td><strong>Question:</strong>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
    <td colspan="2"><input placeholder="Description" class="question_text_width" align="center" id="popup_question_text" type="text" /></td>
    <td  width="20%" height="50" align="right">
    <input type="button" onclick="load_question()" class="btn btn-primary" value="Load" id="load_" />
    </td>
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
  <td><strong>Type:</strong></td>
  <td height="50" align="right"><select class="form-control" style="width: 135px">
  <option selected="selected" disabled>Select a type</option>
  <option value="binary">Binary</option>
  <option value="category">Category</option>
  <option value="likert">Likert</option>
  <option value="scalar">Scalar</option>
</select></td>
  </tr>
  <tr>
  <td><strong>Example:</strong></td>
  <td height="50"><input type="checkbox" name="example" value="example"><br></td>
  </tr>
  <tr>
  <td colspan="3" width="20%" height="50" align="right">
    <input type="button" onclick="setup_save()" class="btn btn-primary" value="Save" id="save" />
    </td>
  <td width="20%" height="50" align="right">
    <input type="button" onclick="setup_advanced()" class="btn btn-link" value="Show Advanced Options" id="adv_" />
  </td>
  </tr>
</table>
  </div>
</body>
</html>
