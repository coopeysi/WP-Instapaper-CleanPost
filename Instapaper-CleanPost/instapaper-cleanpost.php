<?php
/*
Plugin Name: Instapaper CleanPost
Plugin URI: http://www.simoncoopey.net/wordpress/plugins/instapaper-formatter/
Description: Formats blog posts so that they appear correctly in Instapaper
Version: 0.3.0
Author: Simon Coopey
Author URI: http://www.simoncoopey.com/
License: GPL3.0 | http://www.gnu.org/licenses/gpl-3.0.html
*/

//instapaper_title function from v0.1 removed. It should take $wp_title as title by default

//Adding an extra <div> with a class seems to work more consistently. v2.0 will use this function instead.
function instapaper_ce($content = ''){
  if(is_single()){ //Inserts the class "instapaper_body" around content - works on single post pages
    $content = '<div class="instapaper_body">' . "\n" . $content;
    $content .= "</div><!-- instapaper_body -->\n";
  }
  return $content;
}

add_filter('the_content', 'instapaper_ce');

?>
