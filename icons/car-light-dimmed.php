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
	?><path d="M13,4.8C9,4.8 9,19.2 13,19.2C17,19.2 22,16.5 22,12C22,7.5 17,4.8 13,4.8M13.1,17.2C12.7,16.8 12,15 12,12C12,9 12.7,7.2 13.1,6.8C16,6.9 20,8.7 20,12C20,15.3 15.9,17.1 13.1,17.2M8,10.5C8,11 7.9,11.5 7.9,12C7.9,12.2 7.9,12.4 7.9,12.6L2.4,14L1.9,12.1L8,10.5M2,7L9.4,5.1C9.2,5.4 9,5.8 8.9,6.3C8.8,6.6 8.7,7 8.6,7.4L2.5,8.9L2,7M8.2,15.5C8.3,16.2 8.5,16.9 8.7,17.4L2.4,19L1.9,17.1L8.2,15.5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
