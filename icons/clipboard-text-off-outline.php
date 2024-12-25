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
	?><path d="M17 7V5H19V15.8L21 17.8V5C21 3.9 20.11 3 19 3H14.82C14.25 1.44 12.53 .64 11 1.2C10.14 1.5 9.5 2.16 9.18 3H6.2L10.2 7H17M12 3C12.55 3 13 3.45 13 4S12.55 5 12 5 11 4.55 11 4 11.45 3 12 3M14.2 11L12.2 9H17V11H14.2M2.39 1.73L1.11 3L3 4.9C3 4.93 3 4.97 3 5V19C3 20.11 3.9 21 5 21H19C19.03 21 19.07 21 19.1 21L20.84 22.73L22.11 21.46L2.39 1.73M5 19V6.89L7.11 9H7V11H9.11L11.11 13H7V15H13.11L17.11 19H5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
