<?php

if ( session_status() !== PHP_SESSION_ACTIVE ) {
    session_start();
}

include_once 'env.php';
include_once 'add_inputs.php';



// System configeration
$notification_icons = array(
    'To-Dos' => 'fas fa-boxes',
    'To-Dos1' => 'fas fa-user-md'
);
$notification_icons_json = json_encode( $notification_icons );
// to javascript

$admin_list_page_element = array(
    'heading' => 'Admin List',
    'new' => 'admin',
    'table' => array(
        'th' => array(
            'User Name',
            'e-mail',
            'Mobile number',
            'Join Date',
            'Action'
        ),
    ),
    'tbl' => 'admins',
    'redirect' => 'admin_list',
    't1' => 'Admin User',
    't2' => 'list',
);

$admin_page_element = array(
    'heading' => 'Document',
    'tabs' => array(
        'tab1' => array(
            'heading' => 'Profile',
            'form_action' => 'data/register_admin.php',
            'inputs' => array(
                'id' => array(
                    'type' => 'h',
                    'value' => '',
                ),
                'action' => array(
                    'type' => 'h',
                    'value' => 'update',
                ),

                'f1' => array(
                    'type' => 'h',
                    'value' => '',
                ),

                'f6' => array(
                    'label' => 'Name',
                    'type' => 'text',
                    'required' => 'required',
                    'class' => 'form-control',
                    'value' => '',
                    'items' => array(),
                    'skip' => false,
                    'div_class' => 'col-lg-12 col-md-12 form-group',
                ),
                'f8' => array(
                    'label' => 'Mobile number',
                    'type' => 'text',
                    'required' => 'required',
                    'class' => 'form-control',
                    'value' => '',
                    'items' => array(),
                    'skip' => false,
                    'div_class' => 'col-lg-12 col-md-12 form-group',
                ),

                'f9' => array(
                    'label' => 'E-mail',
                    'type' => 'email',
                    'required' => 'required',
                    'class' => 'form-control',
                    'value' => '',
                    'items' => array(),
                    'skip' => false,
                    'div_class' => 'col-lg-12 col-md-12 form-group',
                ),

                'f10' => array(
                    'label' => 'Address',
                    'type' => 'text',
                    'required' => 'required',
                    'class' => 'form-control',
                    'value' => '',
                    'items' => array(),
                    'skip' => false,
                    'div_class' => 'col-lg-12 col-md-12 form-group',
                ),

                'f10' => array(
                    'label' => 'National Insurance number',
                    'type' => 'text',
                    'required' => 'required',
                    'class' => 'form-control',
                    'value' => '',
                    'items' => array(),
                    'skip' => false,
                    'div_class' => 'col-lg-12 col-md-12 form-group',
                ),
            )
        ),

        'tab2' => array(
            'heading' => 'Profile',
            'form_action' => 'data/register_admin.php',
            'inputs' => array(
                'id' => array(
                    'type' => 'h',
                    'value' => '',
                ),
                'action' => array(
                    'type' => 'h',
                    'value' => 'reset_pwd',
                ),
                'f1' => array(
                    'type' => 'h',
                    'value' => '',
                ),
                'pwd' => array(
                    'label' => 'Password',
                    'type' => 'password',
                    'required' => 'required',
                    'class' => 'form-control',
                    'value' => '',
                    'items' => array(),
                    'skip' => false,
                    'div_class' => 'col-lg-12 col-md-12 form-group',
                ),

                'pwd_conf' => array(
                    'label' => 'Confirm Password',
                    'type' => 'password',
                    'required' => 'required',
                    'class' => 'form-control',
                    'value' => '',
                    'items' => array(),
                    'skip' => false,
                    'div_class' => 'col-lg-12 col-md-12 form-group',
                ),

            )

        ),

    )

);

// profile page elements
$user_page_element = array(
    'heading' => 'Profile',
    'form_action' => 'data/register_user.php',
    'inputs' => array(
        'id' => array(
            'type' => 'h',
            'value' => '',
        ),

        'f1' => array(
            'label' => 'Email',
            'label-class' => 'col-md-2 control-label',
            'type' => 'email',
            'input-div-class' => 'col-sm-10',
            'required' => '',
            'class' => 'form-control',
            'placeholder' => 'Email',
            'items' => array(),
            'skip' => false,
            'div_class' => 'form-group row',
        ),

        'f2' => array(
            'label' => 'Name',
            'label-class' => 'col-md-2 control-label',
            'type' => 'text',
            'input-div-class' => 'col-sm-10',
            'required' => '',
            'class' => 'form-control',
            'placeholder' => 'Name',
            'items' => array(),
            'skip' => false,
            'div_class' => 'form-group row',
        ),
        'f3' => array(
            'label' => 'Date of Birth',
            'label-class' => 'col-md-2 control-label',
            'type' => 'date',
            'input-div-class' => 'col-sm-10',
            'required' => '',
            'class' => 'form-control',
            'items' => array(),
            'skip' => false,
            'div_class' => 'form-group row',
        ),
        'f4' => array(
            'label' => 'Gender',
            'type' => 'text',
            'required' => '',
            'class' => 'form-control',
            'value' => '',
            'skip' => false,
            'div_class' => 'col-lg-6 col-md-6 col-sm-12 form-group',
        ),
        'f5' => array(
            'label' => 'Mobile number',
            'type' => 'text',
            'required' => '',
            'class' => 'form-control',
            'value' => '',
            'skip' => false,
            'div_class' => ' col-lg-6 col-md-6 col-sm-12 form-group row',
        ),
        'f6' => array(
            'label' => 'NHS number',
            'type' => 'text',
            'required' => '',
            'class' => 'form-control',
            'value' => '',
            'skip' => false,
            'div_class' => ' col-lg-4 col-md-6 col-sm-12 form-group',
        ),
        'f7' => array(
            'label' => 'National Insurance number',
            'type' => 'text',
            'required' => '',
            'class' => 'form-control',
            'value' => '',
            'skip' => false,
            'div_class' => 'col-lg-4 col-md-6 col-sm-12  form-group',
        ),
        'f8' => array(
            'label' => 'Marital status',
            'type' => 'text',
            'required' => '',
            'class' => 'form-control',
            'value' => '',
            'skip' => false,
            'div_class' => 'col-lg-4 col-md-6 col-sm-12 form-group',
        ),

        'f9' => array(
            'label' => 'Address Line 1',
            'type' => 'text',
            'required' => '',
            'class' => 'form-control',
            'value' => '',
            'skip' => false,
            'div_class' => 'col-lg-4 col-md-6 col-sm-12 form-group ',
        ),
        'f10' => array(
            'label' => 'Address Line 2',
            'type' => 'text',
            'required' => '',
            'class' => 'form-control',
            'value' => '',
            'skip' => false,
            'div_class' => 'col-lg-4 col-md-6 col-sm-12 form-group ',
        ),
        'f11' => array(
            'label' => 'City/Town',
            'type' => 'text',
            'required' => '',
            'class' => 'form-control',
            'value' => '',
            'skip' => false,
            'div_class' => 'col-lg-4 col-md-6 col-sm-12 form-group ',
        ),
        'f12' => array(
            'label' => 'County',
            'type' => 'text',
            'required' => '',
            'class' => 'form-control',
            'skip' => false,
            'div_class' => 'col-lg-4 col-md-6 col-sm-12 form-group ',
        ),
        'f13' => array(
            'label' => 'Ethnicity',
            'type' => 'text',
            'required' => '',
            'class' => 'form-control',
            'value' => '',
            'skip' => false,
            'div_class' => 'col-lg-4 col-md-6 col-sm-12  form-group ',
        ),
        'f14' => array(
            'label' => 'Birthplace',
            'type' => 'text',
            'required' => '',
            'class' => 'form-control',
            'value' => '',
            'skip' => false,
            'div_class' => ' col-lg-4 col-md-6 col-sm-12 form-group ',
        ),
        'f15' => array(
            'label' => 'Religion',
            'type' => 'text',
            'required' => '',
            'class' => 'form-control',
            'value' => '',
            'skip' => false,
            'div_class' => 'col-lg-4 col-md-6 col-sm-12 form-group ',
        ),
        'f16' => array(
            'label' => 'Religious / Spiritual Needs',
            'type' => 'text',
            'required' => '',
            'class' => 'form-control',
            'value' => '',
            'skip' => false,
            'div_class' => 'col-lg-4 col-md-6 col-sm-12 form-group ',
        ),

        'f17' => array(
            'label' => 'Next Of Kin',
            'type' => 'text',
            'required' => '',
            'class' => 'form-control',
            'value' => '',
            'skip' => false,
            'div_class' => 'col-lg-4 col-md-6 col-sm-12 form-group',
        ),

        'f18' => array(
            'label' => 'Guardian Name',
            'type' => 'text',
            'required' => '',
            'class' => 'form-control',
            'value' => '',
            'skip' => false,
            'div_class' => ' col-lg-4 col-md-6 col-sm-12 form-group',
        ),
        'f19' => array(
            'label' => 'Guardian Relationship',
            'type' => 'text',
            'required' => '',
            'class' => 'form-control',
            'value' => '',
            'skip' => false,
            'div_class' => ' col-lg-4 col-md-6 col-sm-12 form-group',
        ),
        'f20' => array(
            'label' => 'Guardian - contact number',
            'type' => 'text',
            'required' => '',
            'class' => 'form-control',
            'value' => '',
            'skip' => false,
            'div_class' => 'col-lg-4 col-md-6 col-sm-12 form-group row',
        ),
        'f21' => array(
            'label' => 'Guardian Address Line 1',
            'type' => 'text',
            'required' => '',
            'class' => 'form-control',
            'value' => '',
            'skip' => false,
            'div_class' => 'col-lg-4 col-md-6 col-sm-12 form-group ',
        ),
        'f22' => array(
            'label' => 'Guardian Address Line 2',
            'type' => 'text',
            'required' => '',
            'class' => 'form-control',
            'value' => '',
            'skip' => false,
            'div_class' => 'col-lg-4 col-md-6 col-sm-12 form-group ',
        ),
        'f23' => array(
            'label' => 'Guardian City/Town',
            'type' => 'text',
            'required' => '',
            'class' => 'form-control',
            'value' => '',
            'skip' => false,
            'div_class' => 'col-lg-4 col-md-6 col-sm-12 form-group ',
        ),
        'f24' => array(
            'label' => 'Guardian County',
            'type' => 'text',
            'required' => '',
            'class' => 'form-control',
            'skip' => false,
            'div_class' => 'col-lg-4 col-md-6 col-sm-12 form-group ',
        ),

        'f25' => array(
            'label' => '<h5 class="text-divider"> MySelf</span></h5>',
            'type' => 'textarea',
            'class' => 'form-control  summernote',
            'value' => '',
            'items' => array(),
            'skip' => false,
            'rows'  => 10,
            'div_class' => 'col-lg-12 form-group',
        ),
    ),
);

$signals_page_element = array(
    'heading' => 'Signals',
    'form_action' => 'data/register_signal.php',
    'inputs' => array(
        'id' => array(
            'type' => 'h',
            'value' => '',
        ),

        'f1' => array(
            'label' => 'Period',
            'type' => 'text',
            'required' => 'required',
            'class' => 'form-control',
            'value' => '',
            'skip' => false,
            'div_class' => 'col-lg-12 col-md-12 form-group',
        ),
        'f2' => array(
            'label' => 'Pips Gained',
            'type' => 'text',
            'required' => 'required',
            'class' => 'form-control',
            'value' => '',
            'skip' => false,
            'div_class' => 'col-lg-12 col-md-12 form-group',
        ),
        'f3' => array(
            'label' => 'Green Trades',
            'type' => 'text',
            'required' => 'required',
            'class' => 'form-control',
            'value' => '',
            'skip' => false,
            'div_class' => 'col-lg-12 col-md-12 form-group',
        ),

        'f4' => array(
            'label' => 'Red Trades',
            'type' => 'text',
            'required' => 'required',
            'class' => 'form-control',
            'value' => '',
            'skip' => false,
            'div_class' => 'col-lg-12 col-md-12 form-group',
        ),

    ),
);



//sample

$sample_page_elements = array(
    'heading' => 'Category',
    'inputs' => array(
        'f1' => array(
            'label' => 'Icon',
            'type' => 'image',
            'skip' => true,
        ),
        'f2' => array(
            'label' => 'Category Name',
            'type' => 'text',
            'pattern' => '[A-Z0-9]*',
            'required' => 'required',
            'class' => 'form-control',
            'value' => '',
            'items' => array(),
            'skip' => false,
        ),
        'f3' => array(
            'label' => 'Description',
            'type' => 'textarea',
            'pattern' => '',
            'required' => 'required',
            'class' => 'form-control',
            'value' => '',
            'items' => array(),
            'skip' => false,
            'rows'  => 5,
        ),
        'f4' => array(
            'label' => 'Agree to Terms',
            'type' => 'checkbox',
            'required' => 'required',
            'class' => 'form-check-input',
            'checked' => true,
            'items' => array(),
            'skip' => false,
        ),
        'f5' => array(
            'label' => 'Select Option',
            'type' => 'combobox',
            'required' => 'required',
            'class' => 'form-control',
            'value' => '',
            'items' => array(
                array( 'value' => '1', 'label' => 'Option 1' ),
                array( 'value' => '2', 'label' => 'Option 2' ),
                array( 'value' => '3', 'label' => 'Option 3' ),
            ),
            'skip' => false,
        )
    ),
);



$sys = array();

$sys['APP_NAME']              = 'New Beginnings Bristol Limited';
$sys['APP_F_NAME']            = 'NEW BEGINNINGS';
$sys['APP_L_NAME']            = 'BRISTOL LIMITED';
$sys['System Name']           = 'New Beginnigns Admin';
$sys['System Section']        = 'Care Home Management System Admin';
$sys['SYSTEM']                = 'ADMINISTRATION PLATFORM';
$sys['LOGIN']                 = 'LOGIN';
$sys['LOGOUT']                = 'Log Out';
$sys['Admin User']            = 'Admin User';
$sys['List']                  = 'List';
$sys['telegram']              = 'https://t.me/TenXAnalytix';
$sys['facebook']              = 'https://www.facebook.com/10XAnalytix/';
$sys['instagram']             = 'https://www.instagram.com/10xanalytix/';
$sys['phone']                 = '+44 (0) 20 8798 9297';
$sys['mobile']                = '+44 (0) 7707 013746';
$sys['email']                 = 'allan@skyinsideuk.com';
$sys['address1']              = '180 Park Road';

// user settings --------------------------------------------------------------------

$sys['user-tab-1']            = 'Profile';
$sys['user-tab-2']            = 'Referal';
$sys['user-tab-3']            = 'Wallet';
$sys['user-tab-4']            = 'Invoices';
$sys['user-tab-5']            = '';
$sys['user-tab-6']            = '';

$sys['user-f1']               = 'Email';
$sys['user-f2']               = 'Name';
$sys['user-f3']               = 'Date of Birth';
$sys['user-f4']               = 'Mobile number';
$sys['user-f5']               = 'Address';
$sys['user-f6']               = 'Region';
$sys['user-f7']               = 'Referal';

$sys['SM3']                   = 'User';

// admin settings --------------------------------------------------------------------

$sys['admin-tab-1']           = 'Profile';
$sys['admin-tab-2']           = 'Reset Password';
$sys['admin-tab-3']           = 'My Clients';
$sys['admin-tab-4']           = 'Documents';
$sys['admin-tab-5']           = 'Medication';

$sys['admin-f1']              = 'Role';
$sys['admin-f2']              = 'User Name';
$sys['admin-f3']              = 'Password';
$sys['admin-f4']              = 'Staff Id';
$sys['admin-f5']              = 'pin';
$sys['admin-f6']              = 'Name';
$sys['admin-f7']              = 'Gender';
$sys['admin-f8']              = 'Mobile number';
$sys['admin-f9']              = 'e-mail';
$sys['admin-f10']             = 'Address';
$sys['admin-f11']             = 'National Insurance number';
$sys['admin-f12']             = '';
$sys['admin-f13']             = '';
$sys['admin-f14']             = '';
$sys['admin-f15']             = '';
$sys['admin-f16']             = '';

//---------- User ----------------------------------------------------------------

$user_field = array();

$user_field['f1']             = 'E Mail';
$user_field['f2']             = 'Name';
$user_field['f3']             = 'Mobile Number';
$user_field['f4']             = 'DOB';
$user_field['f5']             = 'Region';
$user_field['f6']             = 'Address';
$user_field['f7']             = 'Referal';

//---------- Blog ----------------------------------------------------------------

$sys['blog-f1']               = 'Title';
$sys['blog-f2']               = 'Sub Title';
$sys['blog-f3']               = 'image';
$sys['blog-f4']               = 'icon';
$sys['blog-f5']               = 'Content';
$sys['SM5']                   = 'Blog';

//---------- News ----------------------------------------------------------------

$sys['news-f1']               = 'Title';
$sys['news-f2']               = 'Sub Title';
$sys['news-f3']               = 'image';
$sys['news-f4']               = 'icon';
$sys['news-f5']               = 'Content';
$sys['SM9']                   = 'News';

//---------- Case ----------------------------------------------------------------

$sys['case-f1']               = 'Title';
$sys['case-f2']               = 'Sub Title';
$sys['case-f3']               = 'image';
$sys['case-f4']               = 'icon';
$sys['case-f5']               = 'Content';
$sys['SM5']                   = 'Case';

//---------- Testimonial ----------------------------------------------------------------

$sys['testimonial-f1']               = 'Title';
$sys['testimonial-f2']               = 'Sub Title';
$sys['testimonial-f3']               = 'image';
$sys['testimonial-f4']               = 'icon';
$sys['testimonial-f5']               = 'Content';
$sys['SM7']                   = 'Testimonial';

//------- Logs ----------------------------------------------------------------

$sys['log-f1']                = 'Title';
$sys['log-f2']                = 'Note';
$sys['log-user']              = 'Client';
$sys['log-staff']             = 'Staff';

//------- Signals ----------------------------------------------------------------

$sys['sig-f1']                = 'Period';
$sys['sig-f2']                = 'Pips Gained';
$sys['sig-f3']                = 'Green Trades';
$sys['sig-f4']                = 'Red Trades';
$sys['SM4']                   = 'Signals';


//slider ----------------------------------------------------------------

$sys['slider-t1']             = 'BRING THE SKY INSIDE';
$sys['slider-t2']             = 'Enhance dark and windowless rooms with realistic digital windows that harness the healing power of nature.';
$sys['slider-f3']             = 'Image';
$sys['slider-f4']             = 'Link';
$sys['SM6']                   = 'Slider';

//---------- Project ----------------------------------------------------------------

$sys['proj-f1']               = 'Title';
$sys['proj-f2']               = 'Sub Title';
$sys['proj-f3']               = 'image';
$sys['proj-f4']               = 'icon';
$sys['proj-f5']               = 'Content';

//---------- Product ----------------------------------------------------------------

$sys['prod-f1']               = 'Title';
$sys['prod-f2']               = 'Sub Title';
$sys['prod-f3']               = 'image';
$sys['prod-f4']               = 'icon';
$sys['prod-f5']               = 'Content';

//---------- Vedios ----------------------------------------------------------------

$sys['video-f1']               = 'Title';
$sys['video-f2']               = 'vedio';




