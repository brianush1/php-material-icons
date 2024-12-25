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
	?><path d="M12,2.5L8.42,8.06L2,9.74L6.2,14.88L5.82,21.5L12,19.09L18.18,21.5L17.8,14.88L22,9.74L15.58,8.06L12,2.5M9.38,10.5C10,10.5 10.5,11 10.5,11.63A1.12,1.12 0 0,1 9.38,12.75C8.75,12.75 8.25,12.25 8.25,11.63C8.25,11 8.75,10.5 9.38,10.5M14.63,10.5C15.25,10.5 15.75,11 15.75,11.63A1.12,1.12 0 0,1 14.63,12.75C14,12.75 13.5,12.25 13.5,11.63C13.5,11 14,10.5 14.63,10.5M9,15H15C14.5,16.21 13.31,17 12,17C10.69,17 9.5,16.21 9,15Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
