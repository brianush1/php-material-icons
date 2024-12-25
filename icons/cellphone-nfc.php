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
	?><path d="M2,16V18A5,5 0 0,1 7,23H9A7,7 0 0,0 2,16M2,20V23H5A3,3 0 0,0 2,20M2,12V14A9,9 0 0,1 11,23H13C13,16.92 8.08,12 2,12M17,1H7A2,2 0 0,0 5,3V10.37C5.69,10.53 6.36,10.74 7,11V5H17V18H13.97C14.5,19.25 14.81,20.59 14.92,22H17A2,2 0 0,0 19,20V3A2,2 0 0,0 17,1Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
