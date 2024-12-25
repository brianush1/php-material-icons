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
	?><path d="M12,19H16L14,17H12V19M10,15V13H8V15H10M10,19V17H8V19H10M6,11V9H4V11H6M6,15V13H4V15H6M6,19V17H4V19H6M1.31,1.78L22.31,22.69L21,24L18,21H2V5L0.09,3.09L1.31,1.78M16,11H18V13H16V11M8,5V5.91L5.11,3H12V7H22V19.92L20,17.91V9H12V9.89L9.09,7H10V5H8Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
