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
	?><path d="M15 8.28C15.6 8.63 16 9.27 16 10V12.8L11.5 8.29L12 8L13.75 9L15 8.28M12 6.5L13.75 7.5L15.27 6.63C14.72 5.66 13.91 4.94 12.97 4.65C12.79 3.16 11.54 2 10 2V4C10.44 4 10.8 4.29 10.94 4.69C10.26 4.92 9.66 5.37 9.17 5.97L10.54 7.34L12 6.5M2.39 1.73L1.11 3L8 9.9C8 9.94 8 9.97 8 10V11C8 20 16 22 16 22V17.89L20.84 22.73L22.11 21.46L2.39 1.73Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
