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
	?><path d="M11,2H13V4H13.5A1.5,1.5 0 0,1 15,5.5V9L14.56,9.44L16.2,12.28C17.31,11.19 18,9.68 18,8H20C20,10.42 18.93,12.59 17.23,14.06L20.37,19.5L20.5,21.72L18.63,20.5L15.56,15.17C14.5,15.7 13.28,16 12,16C10.72,16 9.5,15.7 8.44,15.17L5.37,20.5L3.5,21.72L3.63,19.5L9.44,9.44L9,9V5.5A1.5,1.5 0 0,1 10.5,4H11V2M9.44,13.43C10.22,13.8 11.09,14 12,14C12.91,14 13.78,13.8 14.56,13.43L13.1,10.9H13.09C12.47,11.5 11.53,11.5 10.91,10.9H10.9L9.44,13.43M12,6A1,1 0 0,0 11,7A1,1 0 0,0 12,8A1,1 0 0,0 13,7A1,1 0 0,0 12,6Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
