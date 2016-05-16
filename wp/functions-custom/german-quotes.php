<?php 

      function deutscheanfuehrungen($content) {
          $content = str_replace (' &#8220;', ' &#8222;', $content);
          $content = str_replace ('&#8221;', '&#8220;', $content);
          $content = str_replace (' &#quot;', ' &#8222;', $content);
          $content = str_replace ('&#quot;', '&#8220;', $content);
          $content = str_replace (' &#34;', ' &#8222;', $content);
          $content = str_replace ('&#34;', '&#8220;', $content);
          $content = str_replace (' &#8216;', ' &#8218;', $content);
          $content = str_replace ('&#8217;', '&#8216;', $content);
           
          return $content;
      }
        add_filter('the_content', 'deutscheanfuehrungen');
        add_filter('get_the_content', 'deutscheanfuehrungen');
        add_filter('the_title', 'deutscheanfuehrungen');
        add_filter('get_the_title', 'deutscheanfuehrungen');
        add_filter('the_excerpt', 'deutscheanfuehrungen');
        add_filter('get_the_excerpt', 'deutscheanfuehrungen'); 

 ?>