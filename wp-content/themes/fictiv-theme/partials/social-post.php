<?php 
include( get_template_directory() . '/inc/post-taxonomies.php');
?>
<div class="w-1/2 lg:w-1/3">
	<div class="flex justify-between items-center">
		<a title="Share <?php the_title()?> on Twitter" rel="noopener noreferrer" target="_blank" class="js-share-twitter-link" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php echo urlencode( get_the_permalink() ); ?>&hashtags=<?php echo $topic_name; ?>&via=fictiv">
		<?php 
			echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/twitter.svg');
		?>
			
		</a>
			<a title="Share <?php the_title()?> on Facebook" rel="noopener noreferrer" target="_blank" class="js-share-facebook-link" href="https://www.facebook.com/dialog/share?app_id=1688841191297210&display=popup&href=<?php echo urlencode( get_the_permalink() ); ?>&redirect_uri=<?php echo urlencode( get_the_permalink() ); ?>">
				<?php 
				echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/facebook.svg');
			?>
	
		</a>
		<a title="Share <?php the_title()?> on LinkedIn" rel="noopener noreferrer" target="_blank" class="js-share-linkedin-link" href="https://www.linkedin.com/shareArticle/?mini=true&url=<?php echo urlencode( get_the_permalink() ); ?>&title=<?php the_title(); ?>"><?php 
			echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/linkedin.svg');
		?></a>
	</div>
</div>