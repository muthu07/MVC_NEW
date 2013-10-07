$(function() {

	// Remove js class
	$('html').removeClass('no-js').addClass('js');

	// Responsive nav
	var $pull = $('#pull'),
		$nav = $('nav[role="navigation"]');

	$pull.click(function(e) {
		e.preventDefault();
		$nav.slideToggle(250);
	});

	var navCheck = (function() {
		if (WEE.browserSize() === 1) {
			$nav.hide();
			$pull.show();
		} else {
			$nav.show();
			$pull.hide();
		}
	});

	navCheck();

	$(window).resize(function() {
		navCheck();
	});

	// Placeholder fallback
	if (!('placeholder' in document.createElement('input'))) {
		$(':input[placeholder]').each(function() {
			var val = $(this).attr('placeholder');
			if (this.value == '') {
				this.value = val;
			}
			$(this).focus(function() {
				if (this.value == val) {
					this.value = '';
				}
			}).blur(function() {
				if ($.trim(this.value) == '') {
					this.value = val;
				}
			})
		});

		// Clear default placeholder values on form submit
		$('form').submit(function() {
			$(this).find(':input[placeholder]').each(function() {
				if (this.value == $(this).attr('placeholder')) {
					this.value = '';
				}
			});
		});
	}
});

var WEE = WEE || {};

WEE.browserSize = function() {
	var size = (window.getComputedStyle) ? window.getComputedStyle(document.documentElement, null).getPropertyValue('font-family') :
		(document.documentElement.currentStyle) ? document.documentElement.currentStyle['fontFamily'] : null;
	return parseInt(size.replace(/\D/g, ''), 10);
};