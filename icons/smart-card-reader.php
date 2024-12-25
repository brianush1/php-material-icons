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
	?><path d="M21 4A2.07 2.07 0 0 0 19 2H5A2.07 2.07 0 0 0 3 4V18H21M8.25 16H7V6H8.25C9.91 6 10.75 9.34 10.75 11S9.91 16 8.25 16M14.5 13.5A2.5 2.5 0 1 1 17 11A2.5 2.5 0 0 1 14.5 13.5M23 21V22H1V21A2 2 0 0 1 3 19H21A2 2 0 0 1 23 21Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
