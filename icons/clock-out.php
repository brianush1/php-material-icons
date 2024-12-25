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
	?><path d="M18,1L19.8,2.79L15.79,6.79L17.21,8.21L21.21,4.21L23,6V1M12,8C8.14,8 5,11.13 5,15A7,7 0 0,0 12,22C15.86,22 19,18.87 19,15A7,7 0 0,0 12,8M12,10.15C14.67,10.15 16.85,12.32 16.85,15A4.85,4.85 0 0,1 12,19.85C9.32,19.85 7.15,17.68 7.15,15A4.85,4.85 0 0,1 12,10.15M11,12V15.69L14.19,17.53L14.94,16.23L12.5,14.82V12" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
