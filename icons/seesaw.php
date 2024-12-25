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
	?><path d="M21.68 13.26L22.04 15.23L2.35 18.77L2 16.8L4.95 16.27L4.6 14.3C4.5 13.76 4.86 13.24 5.41 13.14C5.95 13.04 6.47 13.4 6.57 13.95L6.92 15.91L16.76 14.15L16.41 12.18C16.31 11.63 16.67 11.11 17.22 11C17.76 10.92 18.28 11.28 18.38 11.82L18.73 13.79L21.68 13.26M10.06 18.4L8 22H16L13.58 17.77L10.06 18.4Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
