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
	?><path d="M16.3,10.58C13.14,10.58 10.6,13.13 10.6,16.28C10.6,19.43 13.15,22 16.3,22C19.45,22 22,19.43 22,16.28C22,13.13 19.45,10.58 16.3,10.58M18,19.08H13.19L15.81,15H13.31L14.4,13.23H19.18L16.63,17.28H19.18L18,19.08M16.3,3.93V2C8.41,2 2,8.42 2,16.31H3.92C3.94,9.46 9.5,3.93 16.3,3.93M16.3,7.74V5.82C10.5,5.82 5.81,10.53 5.81,16.31H7.73C7.75,11.58 11.59,7.74 16.3,7.74" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
