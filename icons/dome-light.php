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
	?><path d="M21 10C21 14.97 16.97 19 12 19C7.03 19 3 14.97 3 10V9.03C3 8.76 3.11 8.5 3.3 8.3C3.5 8.11 3.76 8 4.03 8H20C20.25 8 20.5 8.11 20.7 8.3C20.89 8.5 21 8.75 21 9V10M5 10C5 13.86 8.14 17 12 17C15.86 17 19 13.86 19 10H5M20 6V7H4V6C4 5.73 4.1 5.5 4.29 5.29C4.5 5.1 4.73 5 5 5H10V3H14V5H19C19.25 5 19.5 5.11 19.7 5.3C19.89 5.5 20 5.75 20 6Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
