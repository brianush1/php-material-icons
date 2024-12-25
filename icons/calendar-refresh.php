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
	?><path d="M19 3H18V1H16V3H8V1H6V3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H14C13.4 20.5 12.9 19.8 12.5 19H5V8H19V10.6C19.7 10.7 20.4 10.9 21 11.3V5C21 3.9 20.1 3 19 3M18 12.5C19.1 12.5 20.1 12.9 20.8 13.7L22 12.5V16.5H18L19.8 14.7C19.3 14.3 18.7 14 18 14C16.6 14 15.5 15.1 15.5 16.5S16.6 19 18 19C18.8 19 19.5 18.6 20 18H21.7C21.1 19.5 19.7 20.5 18 20.5C15.8 20.5 14 18.7 14 16.5S15.8 12.5 18 12.5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
