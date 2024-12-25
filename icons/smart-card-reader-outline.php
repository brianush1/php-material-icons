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
	?><path d="M14.5 8.5A2.5 2.5 0 1 0 17 11A2.5 2.5 0 0 0 14.5 8.5M8.25 6H7V16H8.25C9.91 16 10.75 12.66 10.75 11S9.91 6 8.25 6M19 2H5A2.07 2.07 0 0 0 3 4V18H5V4H19V18H21V4A2.07 2.07 0 0 0 19 2M23 22H1V21A2 2 0 0 1 3 19H21A2 2 0 0 1 23 21Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
