<?php

$post = $wp_query->post;

if ( in_category('articles') ) {

include(TEMPLATEPATH . '/single-article.php'); } 

elseif ( in_category('prints') ) {

include(TEMPLATEPATH . '/single-print.php'); } 

?>