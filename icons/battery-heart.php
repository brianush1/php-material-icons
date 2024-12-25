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
	?><path d="M12.67 4H11V2H5V4H3.33A1.34 1.34 0 0 0 2 5.33V20.67A1.34 1.34 0 0 0 3.33 22H12.67A1.34 1.34 0 0 0 14 20.67V5.33A1.34 1.34 0 0 0 12.67 4M19 16.17L18.42 15.64C16.36 13.77 15 12.54 15 11A2.18 2.18 0 0 1 17.2 8.8A2.4 2.4 0 0 1 19 9.63A2.4 2.4 0 0 1 20.8 8.8A2.18 2.18 0 0 1 23 11C23 12.5 21.64 13.74 19.58 15.61Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
