$.fancybox.defaults.ajax.settings.dataType = "html";
$.fancybox.defaults.ajax.settings.dataFilter = function(rawData, dataType) {
	if(dataType === "html") {
		let ob = BX.processHTML(rawData),
			html = ob.HTML,
			scripts = ob.SCRIPT,
			styles = ob.STYLE;
		
		if(styles.length > 0) {
			BX.loadCSS(styles);
		}
		
		for(let i = 0; i < scripts.length; i++) {
			if(
				!scripts[i]["isInternal"]
				|| scripts[i]["JS"].indexOf("\nfunction") === 0
			) {
				break;
			}
			
			scripts[i]["bRunFirst"] = true;
		}
		
		BX.ajax.processScripts(scripts, true);
		
		$(document).one("afterLoad.fb", function() {
			BX.ajax.processScripts(scripts, false);
		});
		
		return html;
	}
	
	return rawData
}

$(function() {
	$(document).on("click.fb-start", "[data-fancybox-load-current][href]", function(e) {
		let link = $(e.currentTarget);
		
		let fbContainer = link.closest(".fancybox-container");
		if(fbContainer.length === 0) {
			return;
		}
		
		let fbInstance = fbContainer.data("FancyBox");
		if(!fbInstance || !fbInstance.current) {
			return;
		}
		
		e.preventDefault();
		
		fbInstance.current.isLoaded = false;
		fbInstance.current.isComplete = false;
		fbInstance.current.src = link.attr("href");
		fbInstance.loadSlide(fbInstance.current);
	});
});
