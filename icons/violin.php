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
	?><path d="M11,2A1,1 0 0,0 10,3V5L10,9A0.5,0.5 0 0,0 10.5,9.5H12A0.5,0.5 0 0,1 12.5,10A0.5,0.5 0 0,1 12,10.5H10.5C9.73,10.5 9,9.77 9,9V5.16C7.27,5.6 6,7.13 6,9V10.5A2.5,2.5 0 0,1 8.5,13A2.5,2.5 0 0,1 6,15.5V17C6,19.77 8.23,22 11,22H13C15.77,22 18,19.77 18,17V15.5A2.5,2.5 0 0,1 15.5,13A2.5,2.5 0 0,1 18,10.5V9C18,6.78 16.22,5 14,5V3A1,1 0 0,0 13,2H11M10.75,16.5H13.25L12.75,20H11.25L10.75,16.5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
