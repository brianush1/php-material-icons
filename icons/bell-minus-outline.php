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
	?><path d="M12 2C10.9 2 10 2.9 10 4V4.29C7.12 5.14 5 7.82 5 11V17L3 19V20H12.35C12.12 19.36 12 18.68 12 18H7V11C7 8.24 9.24 6 12 6S17 8.24 17 11V12.09C17.33 12.03 17.67 12 18 12C18.34 12 18.67 12.03 19 12.09V11C19 7.82 16.88 5.14 14 4.29V4C14 2.9 13.11 2 12 2M14 17V19H22V17M10 21C10 22.11 10.9 23 12 23C12.66 23 13.28 22.67 13.65 22.13C13.33 21.79 13.05 21.41 12.81 21H10Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
