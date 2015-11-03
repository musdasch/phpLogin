/**
 * main.js
 * -------
 * Handels the formular data transfer and the validation on the client site.
 */
( function( $, window, undefined ) {

	'use strict';

	var data = $( '#formular' ).serialize();
	var emailReg = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
	var emailAddressVal = $( '.email' ).val();
	var hasError;

	$( '#send' ).click( function( event ) {

		$( '#formular .required' ).each(function(index) {

			console.log( $( this ).val() );

			if ( $( this ).is('#password') ) {
				if( $( this ).val() != $( '#rpassword' ).val() ){
					$( this ).css( 'border', '1px solid #EB340A');
					$( '#rpassword' ).css( 'border', '1px solid #EB340A');
					hasError = true;
				} else {
					$( this ).css( 'border', '1px solid #07f301' );
					$( '#rpassword' ).css( 'border', '1px solid #07f301' );
				}

			}

			if ( $( this ).hasClass( 'mail' ) ) {

				if ( !emailReg.test( emailAddressVal ) || !$( this ).val() ) {
					$( this ).css( 'border', '1px solid #EB340A');
					hasError = true;
				} else {
					$( this ).css( 'border', '1px solid #07f301' );
				}
				hasError = false;

			}

		});
		
		if (!hasError) {
			$( '#send' ).hide();
			$.ajax({
				type: 'POST',
				url: 'in.php',
				data: data,
				success: function( reqCode ) {
					if (reqCode == 1) {
						$( '#message' ).show();
						$( '#formular' ).slideUp();
						$( '.panel.success' ).slideDown();
					} else {
						$( '.button.submit' ).show();
						$( '#formular' ).slideUp();
						$( '.panel.error' ).slideDown();
					}
				}
			});

		}

	});

})( $, window );