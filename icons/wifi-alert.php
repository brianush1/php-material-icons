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
	?><path d="M20.24 5H18V7.25C16.16 6.45 14.13 6 12 6C8.62 6 5.5 7.12 3 9L1.2 6.6C4.21 4.34 7.95 3 12 3C14.97 3 17.77 3.73 20.24 5M8.4 16.2L12 21L15.6 16.2C14.6 15.45 13.35 15 12 15S9.4 15.45 8.4 16.2M4.8 11.4L6.6 13.8C8.1 12.67 9.97 12 12 12S15.9 12.67 17.4 13.8L18 13V10.62C16.23 9.59 14.19 9 12 9C9.3 9 6.81 9.89 4.8 11.4M20 17H22V15H20V17M20 7V13H22V7H20Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
