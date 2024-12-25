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
	?><path d="M5 9H19V11.1L21 12.8V5C21 3.9 20.1 3 19 3H18V1H16V3H8V1H6V3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H13V19H5V9M19 5V7H5V5H19M7 16V11H12V16H7M22.9 17.7C22.8 17.8 22.7 17.9 22.6 17.9L20.7 18.3L22 21.1C22.2 21.4 22 21.7 21.7 21.9L19.6 22.9C19.4 23 19.4 23 19.3 23C19.1 23 18.9 22.9 18.8 22.7L17.5 19.9L16 21C15.9 21.1 15.8 21.1 15.6 21.1C15.3 21.1 15 20.8 15 20.5V11.5C15 11.2 15.3 10.9 15.6 10.9C15.7 10.9 15.9 11 16 11L22.8 16.8C23 17.1 23.1 17.5 22.9 17.7Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
