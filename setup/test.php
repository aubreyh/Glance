<!DOCTYPE html 
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Retrieving video details</title>
    <style>
    img {
      padding: 2px; 
      margin-bottom: 15px;
      border: solid 1px silver; 
    }
    td {
      vertical-align: top;
    }
    </style>
  </head>
  <body>
    <?php
	
	$vid = 'bDuLeXx2Gv0';
    
    // set video data feed URL
    $feedURL = 'http://gdata.youtube.com/feeds/api/videos/' . $vid;

    // read feed into SimpleXML object
    $entry = simplexml_load_file($feedURL);
  
    // parse video entry
    $video = parseVideoEntry($entry);
	
    // function to parse a video <entry>
    function parseVideoEntry($entry) {      
      $obj= new stdClass;
      
      // get nodes in media: namespace for media information
      $media = $entry->children('http://search.yahoo.com/mrss/');
      $obj->title = $media->group->title;
      $obj->description = $media->group->description;
      
      // get video player URL
      $attrs = $media->group->player->attributes();
      $obj->watchURL = $attrs['url']; 
      
      // get video thumbnail
      $attrs = $media->group->thumbnail[0]->attributes();
      $obj->thumbnailURL = $attrs['url']; 
            
      // get <yt:duration> node for video length
      $yt = $media->children('http://gdata.youtube.com/schemas/2007');
      $attrs = $yt->duration->attributes();
      $obj->length = $attrs['seconds']; 
      
      // get <yt:stats> node for viewer statistics
      $yt = $entry->children('http://gdata.youtube.com/schemas/2007');
      $attrs = $yt->statistics->attributes();
      $obj->viewCount = $attrs['viewCount']; 
      
      // get <gd:rating> node for video ratings
      $gd = $entry->children('http://schemas.google.com/g/2005'); 
      if ($gd->rating) { 
        $attrs = $gd->rating->attributes();
        $obj->rating = $attrs['average']; 
      } else {
        $obj->rating = 0;         
      }
        
      // get <gd:comments> node for video comments
      $gd = $entry->children('http://schemas.google.com/g/2005');
      if ($gd->comments->feedLink) { 
        $attrs = $gd->comments->feedLink->attributes();
        $obj->commentsURL = $attrs['href']; 
        $obj->commentsCount = $attrs['countHint']; 
      }
      
      // get feed URL for video responses
      $entry->registerXPathNamespace('feed', 'http://www.w3.org/2005/Atom');
      $nodeset = $entry->xpath("feed:link[@rel='http://gdata.youtube.com/schemas/
      2007#video.responses']"); 
      if (count($nodeset) > 0) {
        $obj->responsesURL = $nodeset[0]['href'];      
      }
         
      // get feed URL for related videos
      $entry->registerXPathNamespace('feed', 'http://www.w3.org/2005/Atom');
      $nodeset = $entry->xpath("feed:link[@rel='http://gdata.youtube.com/schemas/
      2007#video.related']"); 
      if (count($nodeset) > 0) {
        $obj->relatedURL = $nodeset[0]['href'];      
      }
    
      // return object to caller  
      return $obj;      
    }   
       
    // display main video record
	
	echo "<table>\n";
    echo "<tr>\n";
    echo "<td><a href=\"{$video->watchURL}\">
    <img src=\"$video->thumbnailURL\"/></a></td>\n";
    echo "<td><a href=\"{$video->watchURL}\">{$video->title}</a>
    <br/>\n";
    echo $video->description . "</td>\n";
    echo "</tr>\n";
    echo "</table>\n";    
    ?>
    
    <script type="text/javascript">
    var videoTitle = "<?php Print($video->title); ?>";
    alert(videoTitle);
    </script>
  </body>
</html>