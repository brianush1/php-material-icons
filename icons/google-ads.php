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
	?><path d="M12.25 1.47C11.55 1.42 10.82 1.58 10.17 1.96C8.41 2.97 7.81 5.21 8.82 6.96L16.16 19.66C17.17 21.42 19.41 22 21.17 21C22.92 20 23.5 17.75 22.5 16L15.18 3.3C14.54 2.2 13.43 1.56 12.25 1.47M6.82 6.76L1.5 16A3.67 3.67 0 0 0 1 17.83A3.67 3.67 0 0 0 4.67 21.5A3.67 3.67 0 0 0 7.84 19.66V19.67L11 14.19C9.65 11.89 8.27 9.6 7.03 7.23C6.95 7.08 6.88 6.92 6.83 6.76ZL16.4 5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
