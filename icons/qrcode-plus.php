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
	?><path d="M5 5H7V7H5V5M1 1H11V11H1V1M3 3V9H9V3H3M5 17H7V19H5V17M1 13H11V23H1V13M3 15V21H9V15H3M13 13H17V15H19V13H23V15H19V17H23V23H19V21H15V23H13V21H15V19H13V13M21 21V19H19V21H21M19 17H17V15H15V19H19V17M17 2V5H14V7H17V10H19V7H22V5H19V2Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>