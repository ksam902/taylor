<?php
/*
 * Template Name: Homepage
 */

global $post;

$smarty = wp_smarty();
$smarty->assign('title', $post->post_title);
$smarty->assign('content', apply_filters('the_content', $post->post_content));

get_header();

$smarty->display('pages/page-home.tpl');

get_footer();
