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
	?><path d="M19.3 18.9C19.7 18.2 20 17.4 20 16.5C20 14 18 12 15.5 12S11 14 11 16.5 13 21 15.5 21C16.4 21 17.2 20.8 17.9 20.3L21 23.4L22.4 22L19.3 18.9M15.5 19C14.1 19 13 17.9 13 16.5S14.1 14 15.5 14 18 15.1 18 16.5 16.9 19 15.5 19M5 19V9H19V11C19.8 11.5 20.5 12.2 21 13V5C21 3.9 20.1 3 19 3H18V1H16V3H8V1H6V3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H10.8C10.2 20.4 9.8 19.8 9.5 19H5M19 5V7H5V5H19Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
