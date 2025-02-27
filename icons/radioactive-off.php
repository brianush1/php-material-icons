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
	?><path d="M1,4.27L2.28,3L21,21.72L19.73,23L17.25,20.5C15.72,21.46 13.92,22 12,22C10.05,22 8.22,21.44 6.69,20.47L10,15.47C10.6,15.81 11.28,16 12,16C12.23,16 12.46,16 12.67,15.94L8.06,11.33C8,11.54 8,11.77 8,12H2C2,10.08 2.54,8.28 3.5,6.75L1,4.27M12,10A2,2 0 0,1 14,12V12.17L11.83,10H12M8.11,2.78L10.23,8.41L5.9,4.08C6.57,3.56 7.32,3.12 8.11,2.78M16,12C16,10.38 15.04,9 13.66,8.36L15.89,2.78C19.5,4.3 22,7.86 22,12H16Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
