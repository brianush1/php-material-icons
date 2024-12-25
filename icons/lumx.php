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
	?><path d="M12.35,1.75L20.13,9.53L13.77,15.89L12.35,14.47L17.3,9.53L10.94,3.16L12.35,1.75M15.89,9.53L14.47,10.94L10.23,6.7L5.28,11.65L3.87,10.23L10.23,3.87L15.89,9.53M10.23,8.11L11.65,9.53L6.7,14.47L13.06,20.84L11.65,22.25L3.87,14.47L10.23,8.11M8.11,14.47L9.53,13.06L13.77,17.3L18.72,12.35L20.13,13.77L13.77,20.13L8.11,14.47Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
