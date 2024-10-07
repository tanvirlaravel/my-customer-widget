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
}