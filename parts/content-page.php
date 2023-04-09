<?php 
    if ( is_home() & have_posts()){
        
        the_title();
        the_content();
    }
?>