<?php 

	$graphics_folder = $vars["url"] . "mod/user_support/_graphics/";

?>
/* User support button */
#user_support_button {
	background: transparent url(<?php echo $graphics_folder; ?>button_bg.png) top right repeat-y;
	border-color: #B6B6B6;
	border-style: solid;
	border-width: 1px 1px 1px 0px;
	
	-moz-border-radius-topright:8px;
	-moz-border-radius-bottomright:8px;
	-webkit-border-top-right-radius:8px;
	-webkit-border-bottom-right-radius:8px;
	
	font-size: 16px;
    font-weight: bold;
    left: 0;
    position: fixed;
    padding: 4px 0 4px 4px;
    line-height: 18px;
    text-align: left;
    top: 150px;
    width: 18px;
    z-index: 10000;
}

#user_support_button a {
	color: #FFFFFF;
	text-decoration: none;    
}

#user_support_button img {
    margin-left: -1px;
    padding-top: 10px;
}

#user_support_button a:hover {
	color: #000;
}

/* Help Center */
#user_support_help_center {
	width: 650px;
}

#user_support_help_center_logo {
	background: transparent url(<?php echo $graphics_folder; ?>help_center/helpcenter64.png) top left no-repeat;
	width: 64px;
	height: 64px;
	float: right;
}

#user_support_help_center_search {
	background: url("<?php echo $vars["url"]; ?>_graphics/elgg_sprites.png") no-repeat scroll right -918px transparent;
	border: 1px solid #CCCCCC;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	display: inline-block;
	margin: 5px 0 0;
    padding: 0 15px 0 5px;
    width: 250px;
}

#user_support_help_center_search input[name='q']{
	border: none;
	background: none;
	padding: 0px;
	width: 100%;
}

#user_support_help_center_actions .elgg-button {
	margin-right: 5px;
}

#user_support_help_center_help {
	max-height: 250px;
	overflow-x: hidden;
}
