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
	?><path d="M18 7C18 9.21 14.42 11 10 11S2 9.21 2 7 5.58 3 10 3 18 4.79 18 7M10 18C5.58 18 2 16.21 2 14V17C2 19.21 5.58 21 10 21S18 19.21 18 17V14C18 16.21 14.42 18 10 18M10 13C5.58 13 2 11.21 2 9V12C2 14.21 5.58 16 10 16S18 14.21 18 12V9C18 11.21 14.42 13 10 13M20 17H22V15H20V17M20 7V13H22V7H20Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
