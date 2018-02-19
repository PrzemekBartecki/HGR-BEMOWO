jQuery(document).ready(function() {



	jQuery("#menu-item-239").click(function() {
			jQuery(this).find("a").first().attr("href", "http://www.hgr-bemowo.net/#aktualnosci");
			});

		jQuery("#menu-item-241").click(function() {
			jQuery(this).find("a").first().attr("href", "http://www.hgr-bemowo.net/#onas")
		});

		jQuery("#menu-item-242").click(function() {
			jQuery(this).find("a").first().attr("href", "http://www.hgr-bemowo.net/#oferta")
		});

		jQuery("#menu-item-243").click(function() {
			jQuery(this).find("a").first().attr("href", "http://www.hgr-bemowo.net/#galeria")
		});

		jQuery("#menu-item-244").click(function() {
			jQuery(this).find("a").first().attr("href", "http://localhost/bemowo/#kontakt")
		});


	jQuery('.mobile').click(function(){
		jQuery('#menu-mainmenu').toggle();
	});

	});

