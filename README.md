# cmb2-post-format-show_on-filter
CMB2 add filter to show_on , display metabox based on post format

Example usage syntax (@ `'show_on'`): 
```
$cmb = new_cmb2_box( array(
    'id'           => 'test_metabox',
    'title'        => __('Article video', 'sage'),
    'object_types' => array( 'post', ), // Post type
    'context'      => 'normal',
    'priority'     => 'high',
    'show_on'      => array( 'key' => 'post_format', 'value' => 'video' )`,
    'show_names'   => true, // Show field names on the left
) );
```
