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
	?><path d="M18.5,12A3.5,3.5 0 0,0 22,8.5A6.5,6.5 0 0,0 15.5,2A3.5,3.5 0 0,0 12,5.5A3.5,3.5 0 0,0 8.5,2A6.5,6.5 0 0,0 2,8.5A3.5,3.5 0 0,0 5.5,12A3.5,3.5 0 0,0 2,15.5A6.5,6.5 0 0,0 8.5,22A3.5,3.5 0 0,0 12,18.5A3.5,3.5 0 0,0 15.5,22A6.5,6.5 0 0,0 22,15.5A3.5,3.5 0 0,0 18.5,12M12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8A4,4 0 0,1 16,12A4,4 0 0,1 12,16M14.5,12A2.5,2.5 0 0,1 12,14.5A2.5,2.5 0 0,1 9.5,12A2.5,2.5 0 0,1 12,9.5A2.5,2.5 0 0,1 14.5,12Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
