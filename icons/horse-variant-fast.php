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
	?><path d="M23 8V16L20 17L16.91 11.5C16.65 11.04 15.92 11.27 16 11.81L17 21L7 17L8.15 8.94C8.64 5.53 11.56 3 15 3H23L21.42 5.37C22.36 5.88 23 6.86 23 8M4 5H7.58C8.08 4.24 8.7 3.57 9.41 3H4C3.45 3 3 3.45 3 4S3.45 5 4 5M5.84 11H2C1.45 11 1 11.45 1 12S1.45 13 2 13H5.55L5.84 11M3 9H6.12L6.17 8.66C6.25 8.08 6.39 7.53 6.58 7H3C2.45 7 2 7.45 2 8S2.45 9 3 9Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>