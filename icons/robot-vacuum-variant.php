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
	?><path d="M5,3A2,2 0 0,0 3,5V7H5V5H19V7H21V5A2,2 0 0,0 19,3H5M8,7V9H16V7H8M3,9V12A9,9 0 0,0 12,21A9,9 0 0,0 21,12V9H19V12A7,7 0 0,1 12,19A7,7 0 0,1 5,12V9H3M12,12A2.5,2.5 0 0,0 9.5,14.5A2.5,2.5 0 0,0 12,17A2.5,2.5 0 0,0 14.5,14.5A2.5,2.5 0 0,0 12,12Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
