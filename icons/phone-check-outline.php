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
	?><path d="M20 15.5A11.36 11.36 0 0 1 16.43 14.93A1 1 0 0 0 15.43 15.18L13.23 17.38A15.1 15.1 0 0 1 6.64 10.79L8.84 8.59A1 1 0 0 0 9.09 7.59A11.36 11.36 0 0 1 8.5 4A1 1 0 0 0 7.5 3H4A1 1 0 0 0 3 4A17 17 0 0 0 20 21A1 1 0 0 0 21 20V16.5A1 1 0 0 0 20 15.5M5 5H6.54A12.54 12.54 0 0 0 7 7.59L5.79 8.8A15 15 0 0 1 5 5M19 19A15 15 0 0 1 15.2 18.24L16.41 17A12.31 12.31 0 0 0 19 17.45M15 11.44L11.29 7.74L12.71 6.32L15 8.59L20.29 3.29L21.71 4.71Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
