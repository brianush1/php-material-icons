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
	?><path d="M14,13A1,1 0 0,0 13,14A1,1 0 0,0 14,15A1,1 0 0,0 15,14A1,1 0 0,0 14,13M14,16.5A0.5,0.5 0 0,0 13.5,17A0.5,0.5 0 0,0 14,17.5A0.5,0.5 0 0,0 14.5,17A0.5,0.5 0 0,0 14,16.5M12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M17,9.5A0.5,0.5 0 0,0 16.5,10A0.5,0.5 0 0,0 17,10.5A0.5,0.5 0 0,0 17.5,10A0.5,0.5 0 0,0 17,9.5M17,13.5A0.5,0.5 0 0,0 16.5,14A0.5,0.5 0 0,0 17,14.5A0.5,0.5 0 0,0 17.5,14A0.5,0.5 0 0,0 17,13.5M14,7.5A0.5,0.5 0 0,0 14.5,7A0.5,0.5 0 0,0 14,6.5A0.5,0.5 0 0,0 13.5,7A0.5,0.5 0 0,0 14,7.5M14,9A1,1 0 0,0 13,10A1,1 0 0,0 14,11A1,1 0 0,0 15,10A1,1 0 0,0 14,9M10,7.5A0.5,0.5 0 0,0 10.5,7A0.5,0.5 0 0,0 10,6.5A0.5,0.5 0 0,0 9.5,7A0.5,0.5 0 0,0 10,7.5M7,13.5A0.5,0.5 0 0,0 6.5,14A0.5,0.5 0 0,0 7,14.5A0.5,0.5 0 0,0 7.5,14A0.5,0.5 0 0,0 7,13.5M10,16.5A0.5,0.5 0 0,0 9.5,17A0.5,0.5 0 0,0 10,17.5A0.5,0.5 0 0,0 10.5,17A0.5,0.5 0 0,0 10,16.5M7,9.5A0.5,0.5 0 0,0 6.5,10A0.5,0.5 0 0,0 7,10.5A0.5,0.5 0 0,0 7.5,10A0.5,0.5 0 0,0 7,9.5M10,13A1,1 0 0,0 9,14A1,1 0 0,0 10,15A1,1 0 0,0 11,14A1,1 0 0,0 10,13M10,9A1,1 0 0,0 9,10A1,1 0 0,0 10,11A1,1 0 0,0 11,10A1,1 0 0,0 10,9Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
