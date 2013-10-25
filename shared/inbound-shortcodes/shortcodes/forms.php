<?php
/**
*   Inbound Forms Shortcode Options
*   Forms code found in /shared/classes/form.class.php
*/
	$shortcodes_config['forms'] = array(
		'no_preview' => false,
		'options' => array(
			'insert_default' => array(
						'name' => __('Choose Starting Template', INBOUND_LABEL),
						'desc' => __('Start Building Your Form from premade templates', INBOUND_LABEL),
						'type' => 'select',
						'options' => array(
							"none" => "None (Build Your Own)",
							"default_form_3" => "Simple Email Form", 
							"default_form_1" => "First, Last, Email Form",
							"default_form_2" => "Standard Company Form",
							// Add in other forms made here
							),
						'std' => 'none',
						'class' => 'main-form-settings',
			),	
			'form_name' => array(
				'name' => __('Form Name<span class="small-required-text">*</span>', INBOUND_LABEL),
				'desc' => __('This is not shown to visitors', INBOUND_LABEL),
				'type' => 'text',
				'placeholder' => "Example: XYZ Whitepaper Download",
				'std' => '',
				'class' => 'main-form-settings',
			),
			/*'confirmation' => array(
						'name' => __('Form Layout', INBOUND_LABEL),
						'desc' => __('Choose Your Form Layout', INBOUND_LABEL),
						'type' => 'select',
						'options' => array(
							"redirect" => "Redirect After Form Completion", 
							"text" => "Display Text on Same Page",
							),
						'std' => 'redirect'
			),*/
			'redirect' => array(
				'name' => __('Redirect URL<span class="small-required-text">*</span>', INBOUND_LABEL),
				'desc' => __('Where do you want to send people after they fill out the form?', INBOUND_LABEL),
				'type' => 'text',
				'placeholder' => "http://www.yoursite.com/thank-you",
				'std' => '',
				'reveal_on' => 'redirect',
				'class' => 'main-form-settings',
			),
			/*'thank_you_text' => array(
					'name' => __('Field Description <span class="small-optional-text">(optional)</span>',  INBOUND_LABEL),
					'desc' => __('Put field description here.',  INBOUND_LABEL),
					'type' => 'textarea',
					'std' => '',
					'class' => 'advanced',
					'reveal_on' => 'text' 
			), */
			'notify' => array(
				'name' => __('Notify on Form Completions<span class="small-required-text">*</span>', INBOUND_LABEL),
				'desc' => __('Who should get admin notifications on this form?', INBOUND_LABEL),
				'type' => 'text',
				'placeholder' => "youremail@email.com",
				'std' => '',
				'class' => 'main-form-settings',
			),
			'heading_design' => array(
					'name' => __('Name Name Name',  INBOUND_LABEL),
					'desc' => __('Layout Options',  INBOUND_LABEL),
					'type' => 'helper-block',
					'std' => '',
					'class' => 'main-design-settings',
			),
			'layout' => array(
						'name' => __('Form Layout', INBOUND_LABEL),
						'desc' => __('Choose Your Form Layout', INBOUND_LABEL),
						'type' => 'select',
						'options' => array(
							"vertical" => "Vertical", 
							"horizontal" => "Horizontal",
							),
						'std' => 'inline',
						'class' => 'main-design-settings',
			),		
			'labels' => array(
						'name' => __('Label Alignment', INBOUND_LABEL),
						'desc' => __('Choose Label Layout', INBOUND_LABEL),
						'type' => 'select',
						'options' => array(
							"top" => "Labels on Top", 
							"bottom" => "Labels on Bottom",
							"inline" => "Inline",
							"placeholder" => "Use HTML5 Placeholder text only"
							),
						'std' => 'top',
						'class' => 'main-design-settings',
					),
			'submit' => array(
				'name' => __('Submit Button Text', INBOUND_LABEL),
				'desc' => __('Enter the text you want to show on the submit button. (or a link to a custom submit button image)', INBOUND_LABEL),
				'type' => 'text',
				'std' => 'Submit',
				'class' => 'main-design-settings',
			),
			'width' => array(
				'name' => __('Custom Width', INBOUND_LABEL),
				'desc' => __('Enter in pixel width or % width. Example: 400 <u>or</u> 100%', INBOUND_LABEL),
				'type' => 'text',
				'std' => '',
				'class' => 'main-design-settings',
			),
		),
		'child' => array(
			'options' => array(
				'label' => array(
					'name' => __('Field Label',  INBOUND_LABEL),
					'desc' => '',
					'type' => 'text',
					'std' => '',
					'placeholder' => "Enter the Form Field Label. Example: First Name"
				),
				'field_type' => array(
					'name' => __('Field Type', INBOUND_LABEL),
					'desc' => __('Select an form field type', INBOUND_LABEL),
					'type' => 'select',
					'options' => array(
						"text" => "Single Line Text", 
						"textarea" => "Paragraph Text",
						'dropdown' => "Dropdown Options",
						"radio" => "Radio Select",
						"number" => "Number",
						"checkbox" => "Checkbox",
						//"html-block" => "HTML Block",
						"date" => "Date Field",
						"time" => "Time Field",
						'hidden' => "Hidden Field",
						//'file_upload' => "File Upload",
						//'editor' => "HTML Editor"
						//"multi-select" => "multi-select"
						),
					'std' => ''
				),

				'dropdown_options' => array(
					'name' => __('Dropdown choices',  INBOUND_LABEL),
					'desc' => __('Enter Your Dropdown Options. Separate by commas.',  INBOUND_LABEL),
					'type' => 'text',
					'std' => '',
					'placeholder' => 'Choice 1, Choice 2, Choice 3',
					'reveal_on' => 'dropdown' // on select choice show this
				),
				'radio_options' => array(
					'name' => __('Radio Choices',  INBOUND_LABEL),
					'desc' => __('Enter Your Radio Options. Separate by commas.',  INBOUND_LABEL),
					'type' => 'text',
					'std' => '',
					'placeholder' => 'Choice 1, Choice 2',
					'reveal_on' => 'radio' // on select choice show this
				),
				'html_block_options' => array(
					'name' => __('HTML Block',  INBOUND_LABEL),
					'desc' => __('This is a raw HTML block in the form. Insert text/HTML',  INBOUND_LABEL),
					'type' => 'textarea',
					'std' => '',
					'reveal_on' => 'html-block' // on select choice show this
				),
				'helper' => array(
					'name' => __('Field Description <span class="small-optional-text">(optional)</span>',  INBOUND_LABEL),
					'desc' => __('<span class="show-advanced-fields">Show advanced fields</span>',  INBOUND_LABEL),
					'type' => 'helper-block',
					'std' => '',
					'class' => '',
				),
				'required' => array(
					'name' => __('Required Field? <span class="small-optional-text">(optional)</span>', INBOUND_LABEL),
					'checkbox_text' => __('Check to make field required', INBOUND_LABEL),
					'desc' => '',
					'type' => 'checkbox',
					'std' => '0',
					'class' => 'advanced',
				),
				'placeholder' => array(
					'name' => __('Field Placeholder <span class="small-optional-text">(optional)</span>',  INBOUND_LABEL),
					'desc' => __('Put field placeholder text here. Only works for normal text inputs',  INBOUND_LABEL),
					'type' => 'text',
					'std' => '',
					'class' => 'advanced',
				),
				'description' => array(
					'name' => __('Field Description <span class="small-optional-text">(optional)</span>',  INBOUND_LABEL),
					'desc' => __('Put field description here.',  INBOUND_LABEL),
					'type' => 'textarea',
					'std' => '',
					'class' => 'advanced',
				),
				
				'hidden_input_options' => array(
					'name' => __('Dynamic Field Filling',  INBOUND_LABEL),
					'desc' => __('Enter Your Dynamic URL parameter',  INBOUND_LABEL),
					'type' => 'text',
					'std' => '',
					'placeholder' => 'enter dynamic url parameter example: utm_campaign ',
					'class' => 'advanced',
					//'reveal_on' => 'hidden' // on select choice show this
				),
			),
			'shortcode' => '[inbound_field label="{{label}}" type="{{field_type}}" description="{{description}}" required="{{required}}" dropdown="{{dropdown_options}}" radio="{{radio_options}}" placeholder="{{placeholder}}" html="{{html_block_options}}" dynamic="{{hidden_input_options}}"]',
			'clone' => __('Add Another Field',  INBOUND_LABEL )
		),
		'shortcode' => '[inbound_form name="{{form_name}}" redirect="{{redirect}}" layout="{{layout}}" labels="{{labels}}" submit="{{submit}}" width="{{width}}"]{{child}}[/inbound_form]',
		'popup_title' => __('Insert Inbound Form Shortcode',  INBOUND_LABEL)
	);

/* CPT Lead Lists */
add_action('init', 'inbound_forms_cpt',11);
function inbound_forms_cpt() {
	//echo $slug;exit;
    $labels = array(
        'name' => _x('Forms', 'post type general name'),
        'singular_name' => _x('Form', 'post type singular name'),
        'add_new' => _x('Add New', 'Form'),
        'add_new_item' => __('Create New Form'),
        'edit_item' => __('Edit Form'),
        'new_item' => __('New Form'),
        'view_item' => __('View Lists'),
        'search_items' => __('Search Lists'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => false,
        'publicly_queryable' => false,
        'show_ui' => true,
        'query_var' => true,
       	'show_in_menu'  => 'edit.php?post_type=wp-lead',
        'menu_icon' => WPL_URL . '/images/lists.png',
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','custom-fields')
      );

    register_post_type( 'inbound-forms' , $args );
	//flush_rewrite_rules( false );

	/*
	add_action('admin_menu', 'remove_list_cat_menu');
	function remove_list_cat_menu() {
		global $submenu;
		unset($submenu['edit.php?post_type=wp-lead'][15]);
		//print_r($submenu); exit;
	} */
}

/* 	Shortcode moved to shared form class */
add_action('wp_ajax_inbound_form_save', 'inbound_form_save');
add_action('wp_ajax_nopriv_inbound_form_save', 'inbound_form_save');

function inbound_form_save() 
{
    // Grab form values
    $title = $_POST['name'];
    $content =  $_POST['rule_type'];
    // $wp_lead_uid = $_POST['wp_lead_uid'];

    (isset( $_POST['name'] )) ? $first_name = $_POST['name'] : $first_name = "";
    (isset( $_POST['rule_type'] )) ? $rule_type = $_POST['rule_type'] : $rule_type = "";
    (isset( $_POST['selector'] )) ? $selector = $_POST['selector'] : $selector = "";
    (isset( $_POST['css_selector'] )) ? $css_selector = $_POST['css_selector'] : $css_selector = null;
    (isset( $_POST['page_id'] )) ? $page_id = $_POST['page_id'] : $page_id = "";

    if (isset( $_POST['selector'])&&!empty( $_POST['selector']))
    {
        //echo 'here';
        global $user_ID, $wpdb;
        $query = $wpdb->prepare(
            'SELECT ID FROM ' . $wpdb->posts . '
            WHERE post_content = %s
            AND post_type = \'inbound-forms\'',
            $_POST['selector']
        );
        $wpdb->query( $query );

        if ( $wpdb->num_rows ) {
            // If lead exists add data/append data to it
            $post_ID = $wpdb->get_var( $query );

            $event_data = get_post_meta( $post_ID, 'event_data', TRUE );
            
            if ($event_data)
            {
                
                $event_data = json_decode($event_data,true);
                $event_data[1]['id'] = $post_ID;
                $event_data[1]['status'] = 'on';
                $event_data[1]['event_type'] = 'clicked-element';
                $event_data[1]['selector'] = $selector;
                $event_data[1]['css_selector'] = $css_selector;
                $event_data[1]['location'] = 'global';
                $event_data = json_encode($event_data);
            }
            
            update_post_meta( $post_ID, 'event_data', $event_data );
            update_post_meta( $post_ID, 'event_click_type', $rule_type );
            update_post_meta( $post_ID, 'jquery_selector', $selector );
            update_post_meta( $post_ID, 'page_id', $page_id );
            update_post_meta( $post_ID, 'wp_event_type', 'clicked-element' );
            
        
        } else { 
            // If event doesn't exist create it
            $post = array(
                'post_title'        => $title, 
                'post_content'      => $selector,
                'post_status'       => 'publish',
                'post_type'     => 'inbound-forms',
                'post_author'       => 1
            );
            
            $post_ID = wp_insert_post($post);
            update_post_meta( $post_ID, 'jquery_selector', $selector );
            $event_data[1]['id'] = $post_ID;
            $event_data[1]['status'] = 'on';
            $event_data[1]['event_type'] = 'clicked-element';
            $event_data[1]['selector'] = $selector;
            $event_data[1]['css_selector'] = $css_selector;
            $event_data[1]['location'] = 'single';
            $event_data = json_encode($event_data);
            update_post_meta( $post_ID, 'event_data', $event_data );
            update_post_meta( $post_ID, 'event_click_type', $rule_type );
            update_post_meta( $post_ID, 'wp_event_type', 'clicked-element' );
        }

    echo json_encode($post_ID);
    }
}