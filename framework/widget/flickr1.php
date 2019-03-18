<?php class My_THEME_Flickr_Widget extends WP_Widget {
function My_THEME_Flickr_Widget() {
//Constructor
parent::WP_Widget(false, $name = 'builder' . ' | Flickr', array(
'description' => __('Displays your latest Flickr feed.', 'builder')
));
}
function widget($args, $instance) {
// outputs the content of the widget
extract($args); // Make before_widget, etc available.

$fli_name = empty($instance['title']) ? __('Flickr', 'builder') : apply_filters('widget_title', $instance['title']);
$fli_type = $instance['type'];
$fli_id = $instance['id'];
$fli_number = $instance['number'];
$unique_id = $args['widget_id'];

echo $before_widget;
echo $before_title . $fli_name . $after_title; ?>
<ul id="row pro-filter flicker">

<?php if($fli_type == 'user'): ?>
<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=<?php echo $fli_number; ?>&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=<?php echo $fli_id; ?>"></script>
<?php else: ?>
<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=<?php echo $fli_number; ?>&amp;display=latest&amp;size=s&amp;layout=x&amp;source=group&amp;group=<?php echo $fli_id; ?>"></script>
<?php endif; ?>

<!--<li class="flickrmore"><small><a style="font-weight: normal; letter-spacing: normal; font-size: 11px;" href="http://www.flickr.com/photos/<?php //echo "$fli_id"; ?>"><?php // _e("More in Flickr &raquo;", 'builder'); ?></a></small></li>-->
</ul>

<?php echo $after_widget; ?>
<?php }


function update($new_instance, $old_instance) {
//update and save the widget
return $new_instance;
}
function form($instance) {
// Get the options into variables, escaping html characters on the way
$fli_name = $instance['title'];
$fli_type = $instance['type'];
$fli_id = $instance['id'];
$fli_number = $instance['number'];
?>

<p>
<label for="<?php echo $this->get_field_id('title'); ?>"><?php  _e('Flickr Name','builder'); ?>:
<input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" class="widefat" value="<?php echo $fli_name; ?>" /></label></p>

<p>
<label for="<?php echo $this->get_field_id('type'); ?>"><?php _e('Flickr Type:', 'builder'); ?></label>
<select id="<?php echo $this->get_field_id('type'); ?>" name="<?php echo $this->get_field_name('type'); ?>">
<option<?php if($fli_type == 'user') { echo " selected='selected'"; } ?> name="<?php echo $this->get_field_name('type'); ?>" value="user"><?php _e('user', 'builder'); ?></option>
<option<?php if($fli_type == 'group') { echo " selected='selected'"; } ?> name="<?php echo $this->get_field_name('type'); ?>" value="group"><?php _e('group', 'builder'); ?></option>
</select>
</p>


<p>
<label for="<?php echo $this->get_field_id('id'); ?>"><?php  _e('Flickr ID','builder'); ?>(<a target="_blank" href="http://www.idgettr.com">idGettr</a> ex: 52617155@N08):
<input id="<?php echo $this->get_field_id('id'); ?>" name="<?php echo $this->get_field_name('id'); ?>" type="text" class="widefat" value="<?php echo $fli_id; ?>" /></label></p>


<p>
<label for="<?php echo $this->get_field_id('number'); ?>"><?php _e('Number of photos:','builder'); ?>
<input id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" class="widefat" value="<?php echo $fli_number; ?>" /></label></p>

<?php
}
}
register_widget('My_THEME_Flickr_Widget');