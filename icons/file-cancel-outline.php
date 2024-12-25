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
	?><path d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M11.5,10C14,10 16,12 16,14.5C16,17 14,19 11.5,19C9,19 7,17 7,14.5C7,12 9,10 11.5,10M11.5,11.5C10.94,11.5 10.42,11.65 10,11.92L14.08,16C14.35,15.58 14.5,15.06 14.5,14.5A3,3 0 0,0 11.5,11.5M8.5,14.5A3,3 0 0,0 11.5,17.5C12.06,17.5 12.58,17.35 13,17.08L8.92,13C8.65,13.42 8.5,13.94 8.5,14.5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
