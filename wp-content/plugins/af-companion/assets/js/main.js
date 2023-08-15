jQuery( function ( $ ) {
	'use strict';

	/**
	 * ---------------------------------------
	 * ------------- Events ------------------
	 * ---------------------------------------
	 */

	/**
	 * No or Single predefined demo import button click.
	 */
	$( '.js-aftc-import-data' ).on( 'click', function () {


		// Reset response div content.
		$( '.js-aftc-ajax-response' ).empty();

		// Prepare data for the AJAX call
		var data = new FormData();
		data.append( 'action', 'AFTC_import_demo_data' );
		data.append( 'security', aftc.ajax_nonce );
		data.append( 'selected', $( '#aftc__demo-import-files' ).val() );
		if ( $('#aftc__content-file-upload').length ) {
			data.append( 'content_file', $('#aftc__content-file-upload')[0].files[0] );
		}
		if ( $('#aftc__widget-file-upload').length ) {
			data.append( 'widget_file', $('#aftc__widget-file-upload')[0].files[0] );
		}
		if ( $('#aftc__customizer-file-upload').length ) {
			data.append( 'customizer_file', $('#aftc__customizer-file-upload')[0].files[0] );
		}
		if ( $('#aftc__redux-file-upload').length ) {
			data.append( 'redux_file', $('#aftc__redux-file-upload')[0].files[0] );
			data.append( 'redux_option_name', $('#aftc__redux-option-name').val() );
		}

		// AJAX call to import everything (content, widgets, before/after setup)
		ajaxCall( data );

	});


	/**
	 * Grid Layout import button click.
	 */
	$( '.js-aftc-gl-import-data' ).on( 'click', function () {
		var selectedImportID = $( this ).val();
		var $itemContainer   = $( this ).closest( '.js-aftc-gl-item' );
		$('.aftc_modal').hide();
		$('.aftc_btn_import').hide();
		

			gridLayoutImport( selectedImportID, $itemContainer );

	});


	/**
	 * Grid Layout categories navigation.
	 */
	(function () {
		// Cache selector to all items
		var $items = $( '.js-aftc-gl-item-container' ).find( '.js-aftc-gl-item' ),
			fadeoutClass = 'aftc-is-fadeout',
			fadeinClass = 'aftc-is-fadein',
			animationDuration = 200;

		// Hide all items.
		var fadeOut = function () {
			var dfd = jQuery.Deferred();

			$items
				.addClass( fadeoutClass );

			setTimeout( function() {
				$items
					.removeClass( fadeoutClass )
					.hide();

				dfd.resolve();
			}, animationDuration );

			return dfd.promise();
		};

		var fadeIn = function ( category, dfd ) {
			var filter = category ? '[data-categories*="' + category + '"]' : 'div';

			if ( 'all' === category ) {
				filter = 'div';
			}

			$items
				.filter( filter )
				.show()
				.addClass( 'aftc-is-fadein' );

			setTimeout( function() {
				$items
					.removeClass( fadeinClass );

				dfd.resolve();
			}, animationDuration );
		};

		var animate = function ( category ) {
			var dfd = jQuery.Deferred();

			var promise = fadeOut();

			promise.done( function () {
				fadeIn( category, dfd );
			} );

			return dfd;
		};

		$( '.js-aftc-nav-link' ).on( 'click', function( event ) {
			event.preventDefault();

			// Remove 'active' class from the previous nav list items.
			$( this ).parent().siblings().removeClass( 'active' );

			// Add the 'active' class to this nav list item.
			$( this ).parent().addClass( 'active' );

			var category = this.hash.slice(1);

			// show/hide the right items, based on category selected
			var $container = $( '.js-aftc-gl-item-container' );
			$container.css( 'min-width', $container.outerHeight() );

			var promise = animate( category );

			promise.done( function () {
				$container.removeAttr( 'style' );
			} );
		} );
	}());


	/**
	 * Grid Layout search functionality.
	 */
	$( '.js-aftc-gl-search' ).on( 'keyup', function( event ) {
		if ( 0 < $(this).val().length ) {
			// Hide all items.
			$( '.js-aftc-gl-item-container' ).find( '.js-aftc-gl-item' ).hide();

			// Show just the ones that have a match on the import name.
			$( '.js-aftc-gl-item-container' ).find( '.js-aftc-gl-item[data-name*="' + $(this).val().toLowerCase() + '"]' ).show();
		}
		else {
			$( '.js-aftc-gl-item-container' ).find( '.js-aftc-gl-item' ).show();
		}
	} );

	/**
	 * ---------------------------------------
	 * --------Helper functions --------------
	 * ---------------------------------------
	 */

	/**
	 * Prepare grid layout import data and execute the AJAX call.
	 *
	 * @param int selectedImportID The selected import ID.
	 * @param obj $itemContainer The jQuery selected item container object.
	 */
	function gridLayoutImport( selectedImportID, $itemContainer ) {
		// Reset response div content.
		$( '.js-aftc-ajax-response' ).empty();

		// Hide all other import items.
		$itemContainer.siblings( '.js-aftc-gl-item' ).fadeOut( 500 );
		$itemContainer.parent().addClass('js-aftc-gl-item-selected');

		$itemContainer.animate({
			opacity: 0
		}, 500, 'swing', function () {
			$itemContainer.animate({
				opacity: 1
			}, 500 )
		});

		// Hide the header with category navigation and search box.
		$itemContainer.closest( '.js-aftc-gl' ).find( '.js-aftc-gl-header' ).fadeOut( 500 );

		// Append a title for the selected demo import.
		$itemContainer.parent().prepend( '<h3>' + aftc.texts.selected_import_title + '</h3>' );

		// Remove the import button of the selected item.
		$itemContainer.find( '.js-aftc-gl-import-data' ).remove();

		// Prepare data for the AJAX call
		var data = new FormData();
		data.append( 'action', 'AFTC_import_demo_data' );
		data.append( 'security', aftc.ajax_nonce );
		data.append( 'selected', selectedImportID );

		// AJAX call to import everything (content, widgets, before/after setup)
		ajaxCall( data );
	}


	/**
	 * The main AJAX call, which executes the import process.
	 *
	 * @param FormData data The data to be passed to the AJAX call.
	 */
	function ajaxCall( data ) {
		$.ajax({
			method:      'POST',
			url:         aftc.ajax_url,
			data:        data,
			contentType: false,
			processData: false,
			beforeSend:  function() {
				$( '.js-aftc-ajax-loader' ).show();
				$('.aftc__intro-text .aftc__import-mode-switch').hide();
			}
		})
			.done( function( response ) {
				if ( 'undefined' !== typeof response.status && 'newAJAX' === response.status ) {
					ajaxCall( data );
				}
				else if ( 'undefined' !== typeof response.message ) {
					$( '.js-aftc-ajax-response' ).append( '<p>' + response.message + '</p>' );
					$( '.js-aftc-ajax-loader' ).hide();
					$('.aftc__intro-text .aftc__import-mode-switch').show();
					$('.aftc__intro-text .reload-importer').show();

					// Trigger custom event, when $demo_json_url import is complete.
					//$( document ).trigger( 'aftcImportComplete' );
				}
				else {
					$( '.js-aftc-ajax-response' ).append( '<div class="notice  notice-error  is-dismissible"><p>' + response + '</p></div>' );
					$( '.js-aftc-ajax-loader' ).hide();
					$('.aftc__intro-text .aftc__import-mode-switch').show();
					$('.aftc__intro-text .reload-importer').show();
				}
			})
			.fail( function( error ) {
				$( '.js-aftc-ajax-response' ).append( '<div class="notice  notice-error  is-dismissible"><p>Error: ' + error.statusText + ' (' + error.status + ')' + '</p></div>' );
				$( '.js-aftc-ajax-loader' ).hide();
				$('.aftc__intro-text .aftc__import-mode-switch').show();
				$('.aftc__intro-text .reload-importer').show();
			});
		}

		


	/**
	 * Submenus open in new tab.
	 */

// .toplevel_page_af-companion
} );
