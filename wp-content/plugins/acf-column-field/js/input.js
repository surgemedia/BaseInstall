(function($){
	
	
	/*
	*  acf/setup_fields
	*
	*  This event is triggered when ACF adds any new elements to the DOM. 
	*
	*  @type	function
	*  @since	1.1.0
	*  @date	08/29/14
	*
	*  @param	event		e: an event object. This can be ignored
	*  @param	Element		postbox: An element which contains the new HTML
	*
	*  @return	N/A
	*/

	acf.add_action('show_field', function( $field, context ){
		$field.removeClass('conditional-hidden');		
	});
	
	acf.add_action('ready append', function( $el ){
	 	
		var count = 'first';
		
		// search $el for fields of type 'column'
		acf.get_fields({ type : 'column'}, $el).each(function(e, postbox) {

			var columns = $(postbox).find('.acf-column').data('column'),
				orig_key = $(postbox).find('.acf-column').data('id'),
				key = "acf-" + orig_key.replace("_", "-"),
				colClass = '',
				is_collapse_field = '';

			$(postbox).find('.acf-column').each(function() {
				var root = $(this).parents('.acf-field-column');
				if ( columns == '1_1' ) {
					$(postbox).replaceWith('<div class="acf-field acf-field-columngroup column-end-layout"></div>');
					count = 'first';
				} else {
					var acf_fields = $(root).nextUntil('.acf-field-column');

					acf_fields.each(function() {
						if ( $(this).hasClass('-collapsed-target') ) {
							is_collapse_field = ' -collapsed-target';
							return is_collapse_field;
						}
					});

					if ( $(postbox).hasClass('hidden-by-tab') ) {
						colClass = 'acf-field acf-field-columngroup ' + key + ' column-layout-' + columns + ' ' + count + ' hidden-by-tab';
					} else {
						colClass = 'acf-field acf-field-columngroup ' + key + ' column-layout-' + columns + ' ' + count;
					}					

					if ( $(postbox).hasClass('hidden-by-conditional-logic') ) {
						colClass = colClass + ' conditional-hidden';
					}

					$(root)	.nextUntil('.acf-field-column')
							.removeClass('hidden-by-tab')
							.wrapAll('<div class="' + colClass + is_collapse_field + '" data-key="' + orig_key + '"></div>');
					$(postbox).remove();
					count = '';
				}
			});
		});
		
		// Fix for initiating TinyMCE when using in Flexible Content Field
		// Thanks to dsamson (https://github.com/dsamson/)

		if (typeof tinyMCE !== 'undefined') {
		  if ( tinyMCE ) {
				acf.get_fields({ type : 'wysiwyg'}, $el).each(function(e, postbox){
					$("textarea.wp-editor-area", postbox).each(function(){
						edit = tinyMCE.EditorManager.get(this.id);
						if ( edit !== null ) {
							settings = edit.settings;
							edit.remove();
						} else {
							settings = {};
						};						
						tinyMCE.EditorManager.init(settings);
					});
				});
			}
		}
	});

})(jQuery);
