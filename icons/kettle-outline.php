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
	?><path d="M12.5 3C7.8 3 4 5.7 4 9C4 10.2 4.5 11.3 5.4 12.3A6.8 6.8 0 0 0 4 16.5V20C4 21.1 4.9 22 6 22H19A2 2 0 0 0 21 20V16.5C21 15.3 20.7 14.1 20 13L22 11L19 8L16.9 10.1A9.2 9.2 0 0 0 7.6 10.4A2 2 0 0 1 7 9C7 7.2 9.5 5.7 12.5 5.7C13.9 5.7 15.3 6.1 16.3 6.7L18.3 4.7A10 10 0 0 0 12.5 3M12.5 11C16 11 19 14 19 16.5V20H6V16.5C6 14 9 11 12.5 11M13 12.5C10 12.5 8 14 8 17V18H10V17C10 16 10 13.5 13 12.5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>