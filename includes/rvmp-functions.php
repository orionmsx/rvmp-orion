<?php

function rvmp_sc_init(){

	function rvmp_orion_print($atts) {

		$atrib = shortcode_atts( array(
		 'contenedor' => 'rvmpcont',
		 'ancho' => '400',
		 'huesped' => 'cpc6128',
    	 'origen' => 'dsk',
		 'medio' => 'disco.dsk',
		 'programa' => 'juego',
		 'warpsegs' => '20',
		 'pause' => 'true',
		 'video' => 'true',
		 'videomode' => 'hd',
		 ), $atts );

		$output = '<div class="'.esc_attr( $atrib['contenedor'] ).'" style="width: '.esc_attr( $atrib['ancho'] ).'px; height: '.esc_attr( $atrib['ancho']*0.75 ).'px;"></div>'.PHP_EOL;
		$output.= '<script>'.PHP_EOL;
		$output.= '  const c'.esc_attr( $atrib['contenedor'] ).'=document.querySelector(".'.esc_attr( $atrib['contenedor'] ).'")'.PHP_EOL;
		$output.= '  rvmPlayer_'.esc_attr( $atrib['huesped'] ).'(c'.esc_attr( $atrib['contenedor'] ).',{'.PHP_EOL;
		$output.= '    disk: {'.PHP_EOL;
		$output.= '      type: \''.esc_attr( $atrib['origen'] ).'\','.PHP_EOL;
		$output.= '      url: \''.esc_attr( $atrib['medio'] ).'\','.PHP_EOL;
		$output.= '    },'.PHP_EOL;
		$output.= '    command: \'run"'.esc_attr( $atrib['programa'] ).'\n\','.PHP_EOL;
		$output.= '    pause: '.esc_attr( $atrib['pause'] ).','.PHP_EOL;
		$output.= '    video: '.esc_attr( $atrib['video'] ).','.PHP_EOL;
		$output.= '    videoMode: \''.esc_attr( $atrib['videomode'] ).'\','.PHP_EOL;
		$output.= '    warpFrames: '.esc_attr( $atrib['warpsegs'] ).'*50'.PHP_EOL;
		$output.= '})'.PHP_EOL;
		$output.= '</script>'.PHP_EOL;
		
		return $output;
	}

	function rvmp_edit_upload_types($existing_mimes = array()) {
	    
	    $existing_mimes['dsk'] = 'application/octet-stream';
	    $existing_mimes['hfe'] = 'application/octet-stream';
	 
	    return $existing_mimes;
	}

	function rvmp_send_media_to_editor($html, $send_id, $attachment) {
        
        $post = get_post( $attachment['id'] );
        $extension = substr($attachment['url'],-3);
        $extensiones = array("dsk","hfe");

        if (('application/octet-stream' === $post->post_mime_type) && (in_array($extension, $extensiones))) {
        	$output = "[rvmp_orion contenedor=\"nombrecontenedor\" ancho=\"500\" origen=\"".$extension."\" ";
        	$output.= "huesped=\"\" medio=\"".$attachment['url']."\" programa=\"\"]";
            return $output;
        }
        else {
            return $html;
        }	
    }

    add_shortcode( 'rvmp_orion', 'rvmp_orion_print' );
	add_filter('upload_mimes', 'rvmp_edit_upload_types');
	add_filter('media_send_to_editor', 'rvmp_send_media_to_editor', 10, 3);

}

add_action('init', 'rvmp_sc_init');
