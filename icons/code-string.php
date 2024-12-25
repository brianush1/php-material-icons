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
	?><path d="M3,5A2,2 0 0,1 5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5M12.5,11H11.5A1.5,1.5 0 0,1 10,9.5A1.5,1.5 0 0,1 11.5,8H12.5A1.5,1.5 0 0,1 14,9.5H16A3.5,3.5 0 0,0 12.5,6H11.5A3.5,3.5 0 0,0 8,9.5A3.5,3.5 0 0,0 11.5,13H12.5A1.5,1.5 0 0,1 14,14.5A1.5,1.5 0 0,1 12.5,16H11.5A1.5,1.5 0 0,1 10,14.5H8A3.5,3.5 0 0,0 11.5,18H12.5A3.5,3.5 0 0,0 16,14.5A3.5,3.5 0 0,0 12.5,11Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
