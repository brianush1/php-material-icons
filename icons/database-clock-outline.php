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
	?><path d="M16.5 16.25L19.36 17.94L18.61 19.16L15 17V12H16.5V16.25M23 16C23 19.87 19.87 23 16 23C13.61 23 11.5 21.8 10.25 20C6.19 19.79 3 18.08 3 16V6C3 3.79 6.58 2 11 2S19 3.79 19 6V9.68C21.36 10.81 23 13.21 23 16M17 9.08V8.64C16.77 8.77 16.5 8.9 16.24 9C16.5 9 16.75 9.04 17 9.08M5 6C5 6.5 7.13 8 11 8S17 6.5 17 6 14.87 4 11 4 5 5.5 5 6M5 11.45C6.07 12.23 7.8 12.76 9.72 12.93C10.33 11.67 11.32 10.62 12.54 9.92C12.04 9.97 11.53 10 11 10C8.61 10 6.47 9.47 5 8.64V11.45M9.26 17.87C9.1 17.27 9 16.65 9 16C9 15.61 9.04 15.23 9.1 14.86C7.56 14.69 6.15 14.33 5 13.77V16C5 16.42 6.5 17.5 9.26 17.87M21 16C21 13.24 18.76 11 16 11S11 13.24 11 16 13.24 21 16 21 21 18.76 21 16Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
