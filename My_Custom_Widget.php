<?php 

class My_Custom_Widget extends WP_Widget {
    public function __construct()
    {
        parent::__construct(
            "my_custom_widget",
            "My Custom Widget",
            array(
                "description" => "Display recent post and static message.",
            ),
        );
    }

    //Display widget To admin page
    // We overwright the form method wich first defined in WP_Widget class
    public function form( $instance ) {
		?>
        <div class="widget-content">
        <p>
            <label for="<?php echo $this->get_field_id('wcw_title'); ?>"> Title</label>
            <input type="text" name="<?php echo $this->get_field_name('wcw_title'); ?>" id="<?php echo $this->get_field_id('wcw_title') ?>" class="widefat" value="" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('mcw_display_option'); ?>"> Display Type</label>
            <select name="<?php echo $this->get_field_name('mcw_display_option'); ?>" id="<?php echo $this->get_field_id('mcw_display_option') ?>" class="mcw_dd_options widefat">           
            <option selected value="recent_posts">Recent Posts</option>
            <option value="static_message">Static Message</option>
            </select>
        </p>

        <p id="mcw_display_recent_posts" class="display_type_options">
            <label for="<?php echo $this->get_field_id('mcw_number_of_posts'); ?>">Number Of Posts</label>
            <input type="number" name="<?php echo $this->get_field_name('mcw_number_of_posts'); ?>" id="<?php echo $this->get_field_id('mcw_number_of_posts') ?>" class="widefat " value="" />
        </p>

        <p id="mcw_display_static_message" class="display_type_options hide_element">
            <label for="<?php echo $this->get_field_id('mcw_your_message'); ?>">Your Message</label>
            <input type="text" name="<?php echo $this->get_field_name('mcw_your_message'); ?>" id="<?php echo $this->get_field_id('mcw_your_message') ?>" class="widefat " value="" />
        </p>   
        </div>
        <?php
	}

    // Save widget settings to wordpress
    public function update( $new_instance, $old_instance ) {
		
	}

    // Display widget to front-end
    public function widget( $args, $instance ) {
		
	}
}