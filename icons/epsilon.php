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
	?><path d="M15.05 7.78L16.15 6.18C16.15 6.18 14.91 5 12.77 5C10.04 5 8.35 6.84 8.35 8.76C8.35 10.68 10.08 11.69 10.08 11.69C10.08 11.69 8 12.38 8 15C8 17.63 10.14 19 12.44 19C15.38 19 17 17.04 17 17.04L15.6 15.5C15.6 15.5 14.14 16.87 12.59 16.87C10.66 16.87 10.21 15.69 10.21 14.92C10.21 13.87 10.54 12.65 13.83 12.65L13.82 10.77C13.82 10.77 10.44 11.11 10.44 8.78C10.44 7.21 11.9 6.92 12.64 6.92C14.28 6.92 15.05 7.78 15.05 7.78" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
