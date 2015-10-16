<?php
/**
 * Template part for displaying My Post
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sample_Theme
 */

?>

<div class ="myPostContainer" id="id<?php the_ID(); ?>" >

<div class="myPostTitle">
 	<?php the_title('itWorks!!');?>
 	<?php the_content();?>
 	<?php the_date(); ?>

</div>