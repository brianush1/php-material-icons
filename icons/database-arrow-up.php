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
	?><path d="M19 13C16.83 13 14.93 14.16 13.88 15.89C13.28 15.96 12.65 16 12 16C7.58 16 4 14.21 4 12V9C4 11.21 7.58 13 12 13S20 11.21 20 9V12C20 12.36 19.9 12.71 19.72 13.05C19.5 13 19.24 13 19 13M12 11C16.42 11 20 9.21 20 7S16.42 3 12 3 4 4.79 4 7 7.58 11 12 11M13.1 17.96C12.74 18 12.37 18 12 18C7.58 18 4 16.21 4 14V17C4 19.21 7.58 21 12 21C12.46 21 12.9 21 13.33 20.94C13.12 20.33 13 19.68 13 19C13 18.64 13.04 18.3 13.1 17.96M19 15L16 18H18V22H20V18H22L19 15Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
