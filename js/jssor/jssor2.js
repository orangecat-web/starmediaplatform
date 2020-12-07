jQuery(document).ready(function ($) {

	var jssor_2_options = {
		$AutoPlay: 1,
		$BulletNavigatorOptions: {
			$Class: $JssorBulletNavigator$
		}
	};

	var jssor_2_slider = new $JssorSlider$("jssor_2", jssor_2_options);

	/*#region responsive code begin*/

	var MAX_WIDTH = 599;

	function ScaleSlider() {
		var containerElement = jssor_2_slider.$Elmt.parentNode;
		var containerWidth = containerElement.clientWidth;

		if (containerWidth) {

			var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

			jssor_2_slider.$ScaleWidth(expectedWidth);
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