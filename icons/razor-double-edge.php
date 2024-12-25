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
	?><path d="M20 8C19.45 8 19 7.55 19 7C19 6.45 19.45 6 20 6V5H4V6C4.55 6 5 6.45 5 7C5 7.55 4.55 8 4 8H2V15H4C4.55 15 5 15.45 5 16C5 16.55 4.55 17 4 17V18H20V17C19.45 17 19 16.55 19 16C19 15.45 19.45 15 20 15H22V8H20M20 12H19V13H17V12H13.41C13.2 12.58 12.65 13 12 13S10.8 12.58 10.59 12H7V13H5V12H4V11H5V10H7V11H10.59C10.8 10.42 11.35 10 12 10S13.2 10.42 13.41 11H17V10H19V11H20V12Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
