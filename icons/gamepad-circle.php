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
	?><path d="M5,8A4,4 0 0,1 9,12A4,4 0 0,1 5,16A4,4 0 0,1 1,12A4,4 0 0,1 5,8M12,1A4,4 0 0,1 16,5A4,4 0 0,1 12,9A4,4 0 0,1 8,5A4,4 0 0,1 12,1M12,15A4,4 0 0,1 16,19A4,4 0 0,1 12,23A4,4 0 0,1 8,19A4,4 0 0,1 12,15M19,8A4,4 0 0,1 23,12A4,4 0 0,1 19,16A4,4 0 0,1 15,12A4,4 0 0,1 19,8Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
