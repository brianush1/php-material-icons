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
	?><path d="M14,11H19L16.5,8.5L17.92,7.08L22.84,12L17.92,16.92L16.5,15.5L19,13H14V11M12,18A6,6 0 0,1 6,12A6,6 0 0,1 12,6C13.4,6 14.69,6.5 15.71,7.29L17.13,5.87L16.95,5.73L16,0H8L7.05,5.73C5.19,7.19 4,9.46 4,12C4,14.55 5.19,16.81 7.05,18.27L8,24H16L16.95,18.27L17.13,18.13L15.71,16.71C14.69,17.5 13.4,18 12,18Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
