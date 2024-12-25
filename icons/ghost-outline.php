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
	?><path d="M12 2C7.03 2 3 6.03 3 11V22L6 19L9 22L12 19L15 22L18 19L21 22V11C21 6.03 16.97 2 12 2M19 17.17L18 16.17L16.59 17.59L15 19.17L13.41 17.59L12 16.17L10.59 17.59L9 19.17L7.41 17.59L6 16.17L5 17.17V11C5 7.14 8.14 4 12 4S19 7.14 19 11V17.17M11 10C11 11.11 10.11 12 9 12S7 11.11 7 10 7.9 8 9 8 11 8.9 11 10M17 10C17 11.11 16.11 12 15 12S13 11.11 13 10 13.9 8 15 8 17 8.9 17 10Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
