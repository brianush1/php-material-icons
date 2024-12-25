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
	?><path d="M17.5 16.82L19.94 18.23L19.19 19.53L16 17.69V14H17.5V16.82M24 17C24 20.87 20.87 24 17 24S10 20.87 10 17C10 16.66 10.03 16.33 10.08 16H2V4H20V10.68C22.36 11.81 24 14.21 24 17M10.68 14C10.86 13.64 11.05 13.3 11.28 12.97C11.19 13 11.1 13 11 13C9.34 13 8 11.66 8 10S9.34 7 11 7 14 8.34 14 10C14 10.25 13.96 10.5 13.9 10.73C14.84 10.27 15.89 10 17 10C17.34 10 17.67 10.03 18 10.08V8C16.9 8 16 7.11 16 6H6C6 7.11 5.11 8 4 8V12C5.11 12 6 12.9 6 14H10.68M22 17C22 14.24 19.76 12 17 12S12 14.24 12 17 14.24 22 17 22 22 19.76 22 17Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>