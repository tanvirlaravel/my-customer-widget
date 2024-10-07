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
        <p>
            <label for="title"> Title</label>
            <input type="text" name="title" id="" class="" value="" />
        </p>

        <p>
            <label for=""> Display Type</label>
            <select name="" id="">
                <option value="">Recent Post</option>
                <option value="">Static Post</option>
            </select>
        </p>

        <p id="mcw_display_recent_posts">
            <label for="title">Number Of Posts</label>
            <input type="number" name="" id="" class="" value="" />
        </p>

        <p id="mcw_display_static_message">
            <label for="">Your Message</label>
            <input type="text" name="" id="" class="" value="" />
        </p>   
        <?php
	}
}