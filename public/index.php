<html>
<head>
<title>Directorio</title>
<link rel="stylesheet" type="text/css" href="https://redapoyomutuopr.com/ramprpress/wp-content/cache/et/44/et-core-unified-15080080458492.min.css"/>
<link rel="stylesheet" type="text/css" href="https://redapoyomutuopr.com/ramprpress/wp-content/themes/Divi/style.css?ver=4.8.2"/>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,latin-ext"/>
</head>
<body class="home page-template-default page page-id-44 custom-background et_color_scheme_green et_pb_button_helper_class et_fixed_nav et_show_nav et_cover_background et_pb_gutter osx et_pb_gutters3 et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_pb_footer_columns1 et_header_style_left et_pb_pagebuilder_layout et_right_sidebar et_divi_theme safari et_minified_js et_minified_css">
<?php
require '../vendor/autoload.php';
use \TANIOS\Airtable\Airtable;
require '../config.php';
$airtable = new Airtable($airtable_config);

echo "<div id='page-container'>";
$request = $airtable->getContent( 'PR Organizations' );
do {
    $response = $request->getResponse();
    foreach( $response[ 'records' ] as $r){
        //var_dump($r->fields);
	$name = $r->fields->{"Org/Group Name"};
        $desc = $r->fields->{"Description (1 sentence)"};
	$web = $r->fields->{"Website"};
	$addr = $r->fields->{"PR Address:
STEET, TOWN PR ZIPCODE"};

	echo "<div class='org'><h2>$name</h2><p>$desc</p><p>$web</p><p>$addr</p></div>";
    }
}
while( $request = $response->next() );
echo "</div></body></html>";
