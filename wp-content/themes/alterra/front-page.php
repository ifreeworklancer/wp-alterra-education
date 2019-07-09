<?php

get_header();

$sections = ['intro', 'reasons' , 'packages' , 'themes' , 'advantages' , 'trainer' , 'about'];

foreach ($sections as $section) {
	include(__DIR__ . '/includes/template-parts/' . $section . '.php');
}

get_footer();