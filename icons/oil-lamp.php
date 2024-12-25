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
	?><path d="M5,20H16V22H5M11,5H10A2,2 0 0,0 8,7H13A2,2 0 0,0 11,5M16,8H22A2,2 0 0,1 20,10H19A4,4 0 0,0 15,14V15A4,4 0 0,1 11,19H10A4,4 0 0,1 6,15H4A2,2 0 0,1 2,13V10A2,2 0 0,1 4,8M6,10H4V13H6M19,5A2,2 0 0,1 21,7H22A2.9,2.9 0 0,0 19,4A2,2 0 0,1 17,2H16A2.9,2.9 0 0,0 19,5" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
