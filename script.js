// jQuery(window).on('load', function () {
//     // Hide all elements with the class 'display_type_options' on window load
//     jQuery('.display_type_options').hide();
// });

// jQuery(document).ready(function () {
//     jQuery('.mcw_dd_options').on('change', function () {
//         var selectedOption = jQuery(this).val(); // Get the value of the selected option
//         var allDisplayElements = jQuery('.display_type_options');

//         console.log('Selected option:', selectedOption);

//         // Hide all display elements initially
//         allDisplayElements.hide();

//         // Iterate over all display elements
//         allDisplayElements.each(function () {
//             const el = jQuery(this);
//             console.log('Checking element:', el);

//             // Check the selected option and show the relevant elements
//             if (selectedOption === 'static_message') {
//                 if (el.is('#mcw_display_static_message')) {
//                     console.log('Showing static_message');
//                     el.show(); // Show static message element
//                 }
//             } else if (selectedOption === 'recent_posts') {
//                 if (el.is('#mcw_display_recent_posts')) {
//                     console.log('Showing recent_posts');
//                     el.show(); // Show recent posts element
//                 }
//             }
//         });
//     });
// });

jQuery(document).ready(function () {
  jQuery('.mcw_dd_options').on('change', function () {
    let mcw_option_value = jQuery(this).val();

    if (mcw_option_value == 'recent_posts') {
        console.log('heiere 1')
      jQuery('p#display_type_options').removeClass('hide_element');
      jQuery('p#mcw_display_static_message').addClass('hide_element');
    } else if (mcw_option_value == 'static_message') {
        console.log('here 2')
      jQuery('p#display_type_options').addClass('hide_element');
      jQuery('p#mcw_display_static_message').removeClass('hide_element');
    }
  });
});
