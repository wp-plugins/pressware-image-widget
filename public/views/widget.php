<?php
/**
 * The Image Widget
 *
 * This represents the frontend of the widget.
 *
 * @package   Pressware_Image_Widget/admin/views
 * @author    Pressware, LLC
 * @license   GPL-2.0+
 * @link      http://shop.pressware.co/image-widget/
 * @copyright 2014 Pressware, LLC
 */
?>
<div class="pressware-image-container">
	<img src="<?php echo $instance['pressware-image-url']; ?>" alt="<?php echo $instance['pressware-image-alt']; ?>" id="<?php echo $instance['pressware-image-id']; ?>" height="<?php echo $instance['pressware-image-height']; ?>" width="<?php echo $instance['pressware-image-width']; ?>" />
</div><!-- .pressware-image-container -->