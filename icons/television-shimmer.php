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
	?><path d="M21 17H3V5H21M21 3H3C1.9 3 1 3.9 1 5V17C1 18.11 1.9 19 3 19H8V21H16V19H21C22.11 19 23 18.11 23 17V5C23 3.9 22.11 3 21 3M15 6.5L14.38 7.87L13 8.5L14.38 9.13L15 10.5L15.63 9.13L17 8.5L15.63 7.87L15 6.5M10.5 8.5L9.41 10.91L7 12L9.41 13.09L10.5 15.5L11.6 13.09L14 12L11.6 10.91L10.5 8.5" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
