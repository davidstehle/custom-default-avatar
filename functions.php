<?php
// ---------- CUSTOM DEFAULT AVATAR ----------
add_filter( 'avatar_defaults', 'new_default_avatar' );

function new_default_avatar ( $avatar_defaults ) {
		//Set the URL where the image file for your avatar is located
		$new_avatar_url = get_bloginfo( 'template_directory' ) . '/images/new_default_avatar.png';
		//Set the text that will appear to the right of your avatar in Settings>>Discussion
		$avatar_defaults[$new_avatar_url] = 'Your New Default Avatar';
		return $avatar_defaults;
}
?>
