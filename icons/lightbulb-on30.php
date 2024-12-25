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
	?><path d="M7 5.6L5.6 7L3.5 4.9L4.9 3.5L7 5.6M1 13H4V11H1V13M13 1H11V4H13V1M18 12C18 14.2 16.8 16.2 15 17.2V19C15 19.6 14.6 20 14 20H10C9.4 20 9 19.6 9 19V17.2C7.2 16.2 6 14.2 6 12C6 8.7 8.7 6 12 6S18 8.7 18 12M16 12C16 9.79 14.21 8 12 8S8 9.79 8 12C8 13.2 8.54 14.27 9.38 15H14.62C15.46 14.27 16 13.2 16 12M10 22C10 22.6 10.4 23 11 23H13C13.6 23 14 22.6 14 22V21H10V22M20 11V13H23V11H20M19.1 3.5L17 5.6L18.4 7L20.5 4.9L19.1 3.5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>