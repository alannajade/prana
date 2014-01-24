<p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<p>
    <label for="<?php echo $this->get_field_id( 'category' ); ?>"><?php _e( 'Category:' ); ?></label>
	<select id="<?php echo $this->get_field_id( 'category' ); ?>"	name="<?php echo $this->get_field_name( 'category' ); ?>">
		<option value="0" <?php echo ($category==0)?'selected':''?>><?php _e( 'All categories' ); ?></option>
		<?php 
		$category_list = get_categories(array('hide_empty' => 0, 'name' => 'category', 'hierarchical' => true));
		foreach ($category_list as $category_item) {	?>
			<option value="<?php echo $category_item->term_id?>" <?php echo ($category==$category_item->term_id)?'selected':''?>><?php echo $category_item->name; ?></option>
		<?php } ?>
	</select>	
</p>
<p>
    <label for="<?php echo $this->get_field_id( 'order_field' ); ?>"><?php _e( 'Order:' ); ?></label>
	<select id="<?php echo $this->get_field_id('order_field'); ?>"	name="<?php echo $this->get_field_name('order_field'); ?>">
		<option value="date" <?php echo ($order_field=='date')?'selected':''?>><?php _e( 'Date' ); ?></option>
		<option value="title" <?php echo ($order_field=='title')?'selected':''?>><?php _e( 'Title' ); ?></option>
		<option value="modified" <?php echo ($order_field=='modified')?'selected':''?>><?php _e( 'Modified Date' ); ?></option>
		<option value="ID" <?php echo ($order_field=='ID')?'selected':''?>><?php _e( 'ID' ); ?></option>
		<option value="author" <?php echo ($order_field=='author')?'selected':''?>><?php _e( 'Author' ); ?></option>
		<option value="comment_count" <?php echo ($order_field=='comment_count')?'selected':''?>><?php _e( 'Comment Count' ); ?></option>
		<option value="rand" <?php echo ($order_field=='rand')?'selected':''?>><?php _e( 'Random' ); ?></option>
	</select>	
	<select id="<?php echo $this->get_field_id('order_type'); ?>"	name="<?php echo $this->get_field_name('order_type'); ?>">
		<option value="DESC" <?php echo ($order_type=='DESC')?'selected':''?>><?php _e( 'Desc' ); ?></option>
		<option value="ASC" <?php echo ($order_type=='ASC')?'selected':''?>><?php _e( 'Asc' ); ?></option>
	</select>		
</p>
<p>
    <label for="<?php echo $this->get_field_id( 'post_count' ); ?>"><?php _e( 'Posts to display:' ); ?></label>
    <input class="small-text" id="<?php echo $this->get_field_id( 'post_count' ); ?>" name="<?php echo $this->get_field_name( 'post_count' ); ?>" type="text" value="<?php echo esc_attr( $post_count ); ?>" />
</p>
<p>
    <label for="<?php echo $this->get_field_id( 'post_offset' ); ?>"><?php _e( 'Posts offset:' ); ?></label>
    <input class="small-text" id="<?php echo $this->get_field_id( 'post_offset' ); ?>" name="<?php echo $this->get_field_name( 'post_offset' ); ?>" type="text" value="<?php echo esc_attr( $post_offset ); ?>" />
</p>
<p>
    <input id="<?php echo $this->get_field_id( 'show_post_title' ); ?>" name="<?php echo $this->get_field_name( 'show_post_title' ); ?>" type="checkbox" <?php checked($show_post_title); ?> />
    <label for="<?php echo $this->get_field_id( 'show_post_title' ); ?>"><?php _e( 'Show post title' ); ?></label>
</p>
<p>
    <input id="<?php echo $this->get_field_id( 'show_post_date' ); ?>" name="<?php echo $this->get_field_name( 'show_post_date' ); ?>" type="checkbox" <?php checked($show_post_date); ?> />
    <label for="<?php echo $this->get_field_id( 'show_post_date' ); ?>"><?php _e( 'Show post time/date' ); ?></label>
	<br />
	<small><label for="<?php echo $this->get_field_id( 'post_date_format' ); ?>"><?php _e( 'Date Format' ); ?></label> <a href="http://circlewaves.com/products/plugins/extensive-recent-posts-widget/" target="_blank" class="tips-link">[?]</a></small> 
	<input size="12" id="<?php echo $this->get_field_id( 'post_date_format' ); ?>" name="<?php echo $this->get_field_name( 'post_date_format' ); ?>" type="text" value="<?php echo esc_attr( $post_date_format ); ?>" />	
</p>
<p>
    <input id="<?php echo $this->get_field_id( 'show_post_thumbnail' ); ?>" name="<?php echo $this->get_field_name( 'show_post_thumbnail' ); ?>" type="checkbox" <?php checked($show_post_thumbnail); ?> />
    <label for="<?php echo $this->get_field_id( 'show_post_thumbnail' ); ?>"><?php _e( 'Show post thumbnail' ); ?></label>
	<br />
	<small>
	<?php _e( 'Thumbnail Size (px)' ); ?><br /></small> 
	<small><label for="<?php echo $this->get_field_id( 'post_thumbnail_width' ); ?>"><?php _e( 'Width:' ); ?></label></small> 
	<input class="small-text" id="<?php echo $this->get_field_id( 'post_thumbnail_width' ); ?>" name="<?php echo $this->get_field_name( 'post_thumbnail_width' ); ?>" type="text" value="<?php echo esc_attr( $post_thumbnail_width ); ?>" />	
	<small><label for="<?php echo $this->get_field_id( 'post_thumbnail_height' ); ?>"><?php _e( 'Height:' ); ?></label></small> 
	<input class="small-text" id="<?php echo $this->get_field_id( 'post_thumbnail_height' ); ?>" name="<?php echo $this->get_field_name( 'post_thumbnail_height' ); ?>" type="text" value="<?php echo esc_attr( $post_thumbnail_height ); ?>" />		
</p>
<p>
    <input id="<?php echo $this->get_field_id( 'show_post_author' ); ?>" name="<?php echo $this->get_field_name( 'show_post_author' ); ?>" type="checkbox" <?php checked($show_post_author); ?> />
    <label for="<?php echo $this->get_field_id( 'show_post_author' ); ?>"><?php _e( 'Show post author' ); ?></label>
</p>
<p>
    <input id="<?php echo $this->get_field_id( 'show_post_excerpt' ); ?>" name="<?php echo $this->get_field_name( 'show_post_excerpt' ); ?>" type="checkbox" <?php checked($show_post_excerpt); ?> />
    <label for="<?php echo $this->get_field_id( 'show_post_excerpt' ); ?>"><?php _e( 'Show post excerpt' ); ?></label>
	<br />
	<small><label for="<?php echo $this->get_field_id( 'post_excerpt_size' ); ?>"><?php _e( 'Excerpt size (words):' ); ?></label></small> 
	<input size="3" id="<?php echo $this->get_field_id( 'post_excerpt_size' ); ?>" name="<?php echo $this->get_field_name( 'post_excerpt_size' ); ?>" type="text" value="<?php echo esc_attr( $post_excerpt_size ); ?>" />	
	<br />
	<small><label for="<?php echo $this->get_field_id( 'post_excerpt_link' ); ?>"><?php _e( "'Read More' Text:" ); ?></label></small> 
	<input id="<?php echo $this->get_field_id( 'post_excerpt_link' ); ?>" name="<?php echo $this->get_field_name( 'post_excerpt_link' ); ?>" type="text" value="<?php echo esc_attr( $post_excerpt_link ); ?>" />		
</p>
<p>
    <input id="<?php echo $this->get_field_id( 'show_post_comments_count' ); ?>" name="<?php echo $this->get_field_name( 'show_post_comments_count' ); ?>" type="checkbox" <?php checked($show_post_comments_count); ?> />
    <label for="<?php echo $this->get_field_id( 'show_post_comments_count' ); ?>"><?php _e( 'Show post comments count' ); ?></label>
</p>
<p>
    <input id="<?php echo $this->get_field_id( 'show_post_tags' ); ?>" name="<?php echo $this->get_field_name( 'show_post_tags' ); ?>" type="checkbox" <?php checked($show_post_tags); ?> />
    <label for="<?php echo $this->get_field_id( 'show_post_tags' ); ?>"><?php _e( 'Show post tags' ); ?></label>
</p>
<p>
    <label for="<?php echo $this->get_field_id( 'post_layout' ); ?>"><?php _e( 'Layout:' ); ?></label> <small><a href="http://circlewaves.com/products/plugins/extensive-recent-posts-widget/" target="_blank" class="tips-link">[?]</a></small> 
	<br />
	<textarea class="widefat" style="resize:none;height:85px" id="<?php echo $this->get_field_id('post_layout'); ?>"	name="<?php echo $this->get_field_name('post_layout'); ?>"><?php echo esc_attr( $post_layout ); ?></textarea>	
	<br />
	<small>
	Available tags: <br />
	[TITLE] [DATE] [AUTHOR] [EXCERPT] [COMMENT-COUNT] [TAGS]
	</small>

</p>
<p>
<small>Developed by <a href="http://circlewaves.com" target="_blank" title="circlewaves.com">circlewaves.com</a> | <a href="http://circlewaves.com/products/plugins/extensive-recent-posts-widget/" target="_blank" title="FAQ">FAQ</a></small>
</p>
