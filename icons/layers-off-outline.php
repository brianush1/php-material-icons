<?php return function(
	$size = "1em",
	$color = "currentColor",
	$width = null,
	$height = null,
	$viewBox = "0 0 24 24",
	$className = null,
	$ariaLabel = null,
	$ariaHidden = null,
	$title = null,
	$desc = null,
) { ?>
	<svg <?php
		$attribs = "";
		$attribs .= " viewBox=\"$viewBox\"";
		$attribs .= " width=\"" . ($width === null ? $size : $width) . "\"";
		$attribs .= " height=\"" . ($height === null ? $size : $height) . "\"";
		if ($className !== null) $attribs .= " class=\"$className\"";
		if ($ariaLabel !== null) $attribs .= " aria-label=\"$ariaLabel\"";
		if ($ariaHidden !== null) $attribs .= " aria-hidden=\"$ariaHidden\"";
		echo $attribs;
	?>><?php
		if ($desc !== null) {
			echo "<desc>" . $desc . "</desc>";
		}
	?><?php
		if ($title !== null) {
			echo "<title>" . $title . "</title>";
		}
	?><path d="M12,4.53L10.83,5.44L9.41,4L12,2L21,9L17.28,11.89L15.85,10.47L17.74,9L12,4.53M21,14.07L20.13,14.75L18.7,13.32L19.37,12.8L21,14.07M3.41,0.86L22.14,19.59L20.73,21L16.95,17.22L12,21.07L3,14.07L4.62,12.81L12,18.54L15.5,15.79L14.1,14.37L12,16L3,9L6.22,6.5L2,2.27L3.41,0.86M12,13.47L12.67,12.94L7.65,7.92L6.26,9L12,13.47Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
