jQuery(document).ready(function ($) {

	var jssor_3_options = {
		$AutoPlay: 1,
		$BulletNavigatorOptions: {
			$Class: $JssorBulletNavigator$
		}
	};

	var jssor_3_slider = new $JssorSlider$("jssor_3", jssor_3_options);

	/*#region responsive code begin*/

	var MAX_WIDTH = 1080;

	function ScaleSlider() {
		var containerElement = jssor_3_slider.$Elmt.parentNode;
		var containerWidth = containerElement.clientWidth;

		if (containerWidth) {

			var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

			jssor_3_slider.$ScaleWidth(expectedWidth);
		}
		else {
			window.setTimeout(ScaleSlider, 30);
		}
	}

	ScaleSlider();

	$(window).bind("load", ScaleSlider);
	$(window).bind("resize", ScaleSlider);
	$(window).bind("orientationchange", ScaleSlider);
	/*#endregion responsive code end*/
});