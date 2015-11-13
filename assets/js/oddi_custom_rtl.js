/**
 * Handles toggling the sidebar menu for small screens.
 */
jQuery(document).ready(function ($) {
	function setRTL() {
		if (typeof tinyMCE !== 'undefined' && tinyMCE.activeEditor != null) {
			jQuery('iframe').contents().find('body').attr('dir','rtl');
		} else {
			setTimeout(setRTL,100)
		}	
	}
	setRTL();
});