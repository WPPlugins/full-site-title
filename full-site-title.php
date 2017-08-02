<?php
/*
Plugin Name: Full Site Title
Version: 0.1
Plugin URI: http://uplift.ru/projects/
Description: Displays the uncut title of your site on the admin screens.
Author: Sergey Biryukov
Author URI: http://sergeybiryukov.ru/
*/

function fst_replace_title() {
?>
<script type="text/javascript">
jQuery(document).ready( function() {
	jQuery('#site-title').html('<?php bloginfo('name'); ?>');
});
</script>
<?php
}
add_action('admin_head', 'fst_replace_title');
?>