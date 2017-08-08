<?php
require_once(get_template_directory() . "/titan-framework/titan-framework-embedder.php");
add_action('tf_create_options','bornadp_theme_options');
function bornadp_theme_options()
{
    $titan = TitanFramework::getInstance( 'bornadp' );
    $basePanel=$titan->createAdminPanel(
        array(
            'name'=>'تنظیمات قالب',
            'title'=>'تنظیمات قالب',
            'desc'=>'<b>این تنظیمات قالب برای سادگی کارکرد وب سایت ساخته شده است.</b>',
            'id'=>'bornadp_base_option',
            //'parent'=>'themes.php',
            //https://codex.wordpress.org/Roles_and_Capabilities
            //'capability'=>'manage_options',
            //https://developer.wordpress.org/resource/dashicons
            'icon'=>'dashicons-admin-network',
            //https://developer.wordpress.org/reference/functions/add_menu_page/
            'position'=>61,
            //'use_form'=>true,
        )
    );
    $helpPanel=$basePanel->createAdminPanel(
        array(
            'name'=>'راهنما',
        )

    );


    $generalTab = $basePanel->createTab( array(
        'name' => 'تنظیمات کلی',
        'desc' => 'در این قسمت تنظیمات کلی تم قرار گرفته است',
        'id' => 'general-tab',
    ) );


    $generalTab->createOption( array(
        'name' => 'Enable Feature X',
        'id' => 'is_enabled',
        'type' => 'enable',
        'default' => true,
        'desc' => 'Enable or disable our X feature',
        'enabled' => 'فعال',
        'disabled' => 'غیر فعال',
    ) );

    $generalTab->createOption( array(
        'name' => 'My Color Picker Option',
        'id' => 'background_color',
        'type' => 'color',
        'desc' => 'Pick a color',
        'default' => '#555555',
        'alpha' => true, //Defaults to false.
    ) );

    $generalTab->createOption( array(
        'name' => 'مباحث آموزشی',
        'type' => 'heading',
        'desc' => 'در ادامه با سایت آموزشی وی لرن آشنا خواهید شد',
    ) );



    $generalTab->createOption( array(
        'name' => 'نام سایت',
        'id' => 'site_name',
        'type' => 'text',
        'desc' => 'نام سایت خود را وارد کنید',
        'default' => 'سایت من',
        'placeholder' => 'نام سایت در اینجا',
        //'is_password' => true,
        // 'unit' => '%',
    ) );


    $generalTab->createOption( array(
        'name' => 'My Textarea Option',
        'id' => 'my_textarea_option',
        'type' => 'textarea',
        'desc' => 'This is our option',
        'default' => 'This is our option',
        'placeholder' => 'This is our option',
        'is_code' => false,
    ) );
    $generalTab->createOption( array(
        //'name' => 'reminer',
        'type' => 'note',
        'desc' => 'A note or an important reminder',

    ) );
    $generalTab->createOption( array(
        'name' => 'My Number Option',
        'id' => 'my_number_option',
        'type' => 'number',
        'desc' => 'This is our option',
        'default' => '20',
        'max' => '100',
        'min' => '10',
    ) );

    $generalTab->createOption( array(
        'type' => 'iframe',
        'name' => 'iframe',
        'url' => 'http://bornadp.ir',
        'height' => '300',//Defaults to 400 pixels.
    ) );

    $generalTab->createOption( array(
        'type' => 'save',
        'save' => 'ذخیره',
        'reset' => 'پیشفرض',
        // 'use_reset' => false,
    ) );




    $checkboxTab = $basePanel->createTab( array(
        'name' => 'چک باکس',
        'desc' => 'در این قسمت تنظیمات کلی تم قرار گرفته است',
        'id' => 'checkboxTab-tab',
    ) );

    $checkboxTab->createOption( array(
        'name' => 'My Checkbox Option',
        'id' => 'my_checkbox_option_simple_check',
        'type' => 'checkbox',
        'desc' => 'This is our option',
        'default' => false,
    ) );
    $checkboxTab->createOption( array(
        'name' => 'My Multicheck Option',
        'id' => 'my_multicheck_option',
        'type' => 'multicheck',
        'desc' => 'Check whichever applies',
        'options' => array(
            '1' => 'Option one',
            '2' => 'Option two',
            '3' => 'Option three',
        ),
        'default' => array( '2', '3' ),
    ) );
    $checkboxTab->createOption( array(
        'name' => 'My Post Categories',
        'id' => 'my_multicheck_option_categories',
        'type' => 'multicheck-categories',
        'desc' => 'Check a category',
        'taxonomy' => 'category', //default is category
        //'default' => array( '5', '1' ),
        'orderby' => 'id', //default is name
        'order' => 'asc', //default is asc
        'hide_empty' => false, //default is false
        'show_count' => false, //default is false
    ) );

    $checkboxTab->createOption( array(
        'name' => 'My Pages',
        'id' => 'my_multicheck_option_Pages',
        'type' => 'multicheck-pages',
        'desc' => 'Check a page',
        'default' => array( '1' ), // array containing checked page IDs
    ) );
    $checkboxTab->createOption( array(
        'name' => 'My Posts',
        'id' => 'my_multicheck_option_Posts',
        'type' => 'multicheck-posts',
        'desc' => 'Check a post',
        'post_type' => 'post', //default is post  example: portfolio_post
        'default' => array( '1' ), // array containing checked post IDs
        'num' => 5, // Defaults to -1 (all posts)
        //http://codex.wordpress.org/Class_Reference/WP_Query#Status_Parameters
        'post_status' => 'publish', // Default is : any
        'orderby' => 'id', //default is post_date
        'order' => 'asc', //default is desc
    ) );

    $checkboxTab->createOption( array(
        'type' => 'save',
        'save' => 'ذخیره',
        'reset' => 'پیشفرض',
        // 'use_reset' => false,
    ) );





    $selectTab = $basePanel->createTab( array(
        'name' => 'سلکت',
        'desc' => 'در این قسمت تنظیمات کلی تم قرار گرفته است',
        'id' => 'select-tab',
    ) );

    $selectTab->createOption( array(
        'name' => 'My Select Option',
        'id' => 'my_select_option_simple',
        'type' => 'select',
        'desc' => 'This is our option',
        'options' => array(
            '1' => 'Option one',
            '2' => 'Option two',
            '3' => 'Option three',
        ),
        'default' => '2',
        'multiple' => false,
    ) );

    $selectTab->createOption( array(
        'name' => 'My Select Option',
        'id' => 'my_select_option',
        'type' => 'select',
        'desc' => 'This is our option',
        'options' => array(
            'Group 1' => array(
                '1' => 'Option one',
                '2' => 'Option two',
            ),
            'Group 2' => array(
                '3' => 'Option three',
            ),
        ),
        'default' => '2',
        'multiple' => true,
    ) );

    $selectTab->createOption( array(
        'name' => 'Post Categories',
        'id' => 'my_categories_option',
        'type' => 'select-categories',
        'desc' => 'This is an option',
        'taxonomy' => 'category', //Defaults to category.
        'orderby' => 'name',//Defaults to name
        'order' => 'desc', //Defaults to asc
        'hide_empty' =>false,//Defaults to false.
        'show_count' => true, //Defaults to false

    ) );
    $selectTab->createOption( array(
        'name' => 'My Select Page Option',
        'id' => 'my_selectpage_option',
        'type' => 'select-pages',
        'desc' => 'Select a page',
        'default' => 27 //the id of page
    ) );
    $selectTab->createOption( array(
        'name' => 'Select a post',
        'id' => 'my_post_option',
        'type' => 'select-posts',
        'desc' => 'This is an option',
        'post_type' => 'post', //Defaults to post
        'num' => -1, //Defaults to -1 (all posts)
        'default' => 0 , //Defaults to 0, nothing selected.
        'post_status' => 'any', //Defaults to any.
        'orderby' => 'id', //Defaults to post_date
        'order' => 'asc', //Defaults to desc
    ) );
    $selectTab->createOption( array(
        'type' => 'save',
        'save' => 'ذخیره',
        'reset' => 'پیشفرض',
        // 'use_reset' => false,
    ) );





    $radioTab = $basePanel->createTab( array(
        'name' => 'رادیو سلکت',
        'desc' => 'در این قسمت تنظیمات کلی تم قرار گرفته است',
        'id' => 'radioTab-tab',
    ) );

    $radioTab->createOption( array(
        'name' => 'My Radio Option',
        'id' => 'my_radio_option',
        'options' => array(
            '1' => 'Option one',
            '2' => 'Option two',
            '3' => 'Option three',
        ),
        'type' => 'radio',
        'desc' => 'Select one',
        'default' => '2',
    ) );
    $radioTab->createOption( array(
        'name' => 'عکس میشه گذاشت واسه رادیو',
        'id' => 'my_layoutcountry',
        'type' => 'radio-image',
        'options' => array(
            'iran' => get_template_directory_uri() . '/images/Iran.png',
            'Turkey' => get_template_directory_uri() . '/images/Turkey.png',
            'Saudi-Arabia' => get_template_directory_uri() . '/images/Saudi-Arabia.png',
        ),
        'default' => 'iran',
    ) );

    $radioTab->createOption( array(
        'name' => 'هر کدوم رو کد رنگش رو یه آرایه میگیره',
        'id' => 'my_palette_option',
        'type' => 'radio-palette',
        'desc' => 'Choose a style',
        'options' => array(
            array(
                "#69D2E7",
                "#A7DBD8",
                "#E0E4CC",
                "#F38630",
                "#FA6900",
                "#69D2E7",
                "#A7DBD8",
                "#E0E4CC",
                "#F38630",
                "#FA6900",
            ),
            array(
                "#D9CEB2",
                "#948C75",
                "#D5DED9",
                "#7A6A53",
                "#99B2B7",
            ),
            array(
                "#3FB8AF",
                "#7FC7AF",
                "#DAD8A7",
                "#FF9E9D",
                "#FF3D7F",
            ),
            array(
                "#D1E751",
                "#FFFFFF",
                "#000000",
                "#4DBCE9",
                "#26ADE4",
            )
        ),
        'default' => 1,
    ) );


    $radioTab->createOption( array(
        'type' => 'save',
        'save' => 'ذخیره',
        'reset' => 'پیشفرض',
        // 'use_reset' => false,
    ) );







    $editorTab = $basePanel->createTab( array(
        'name' => 'ادیتور',
        'desc' => 'در این قسمت تنظیمات کلی تم قرار گرفته است',
        'id' => 'editor-tab',
    ) );

    $editorTab->createOption( array(
        'name' => 'My Editor Option',
        'id' => 'my_editor_option',
        'type' => 'editor',
        'desc' => 'Put your footer content here',
        'default' => 'your default text',
        'media_buttons' => true, //default is true
        'rows' => 10, //default is 10
        'editor_settings' => array('drag_drop_upload'=>true), //the 3rd argument to the wp_editor() function used to create the editor
        //https://codex.wordpress.org/Function_Reference/wp_editor

    ) );

    $editorTab->createOption( array(
        'name' => 'Custom CSS',
        'id' => 'custom_css',
        'type' => 'code',
        'desc' => 'Put your custom CSS rules here',
        'lang' => 'css',
    ) );
    $editorTab->createOption( array(
        'name' => 'Custom javascript',
        'id' => 'custom_javascript',
        'type' => 'code',
        'desc' => 'Put your custom javascript rules here',
        'lang' => 'javascript',
    ) );

    $editorTab->createOption( array(
        'type' => 'save',
        'save' => 'ذخیره',
        'reset' => 'پیشفرض',
        // 'use_reset' => false,
    ) );






    $codeTab = $basePanel->createTab( array(
        'name' => 'آپلود',
        'desc' => 'در این قسمت تنظیمات کلی تم قرار گرفته است',
        'id' => 'code-tab',
    ) );


    $codeTab->createOption( array(
        'name' => 'My Upload Option',
        'id' => 'my_upload_option',
        'type' => 'upload',
        'desc' => 'Upload your image',
        'placeholder' => '...'
    ) );


    $codeTab->createOption( array(
        'name' => 'بنر 468x60',
        'id' => '468x60_upload_option',
        'type' => 'upload',
        'desc' => 'Upload your image',
        'placeholder' => '...'
    ) );
$image_attributes = wp_get_attachment_image_src( $attachment_id = 1 );
if ( $image_attributes ) : ?>
    <img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" />
<?php endif;

    $codeTab->createOption( array(
        'type' => 'save',
        'save' => 'ذخیره',
        'reset' => 'پیشفرض',
        // 'use_reset' => false,
    ) );
}