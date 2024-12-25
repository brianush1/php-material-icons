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
	?><path d="M10,2H14A1,1 0 0,1 15,3H21V21H19A1,1 0 0,1 18,22A1,1 0 0,1 17,21H7A1,1 0 0,1 6,22A1,1 0 0,1 5,21H3V3H9A1,1 0 0,1 10,2M5,5V9H19V5H5M7,6A1,1 0 0,1 8,7A1,1 0 0,1 7,8A1,1 0 0,1 6,7A1,1 0 0,1 7,6M12,6H14V7H12V6M15,6H16V8H15V6M17,6H18V8H17V6M12,11A4,4 0 0,0 8,15A4,4 0 0,0 12,19A4,4 0 0,0 16,15A4,4 0 0,0 12,11M10,6A1,1 0 0,1 11,7A1,1 0 0,1 10,8A1,1 0 0,1 9,7A1,1 0 0,1 10,6Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
