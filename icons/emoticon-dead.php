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
	?><path d="M12,2C6.47,2 2,6.47 2,12C2,17.53 6.47,22 12,22A10,10 0 0,0 22,12C22,6.47 17.5,2 12,2M6.76,8.82L7.82,7.76L8.88,8.82L9.94,7.76L11,8.82L9.94,9.88L11,10.94L9.94,12L8.88,10.94L7.82,12L6.76,10.94L7.82,9.88L6.76,8.82M6.89,17.5C7.69,15.46 9.67,14 12,14C14.33,14 16.31,15.46 17.11,17.5H6.89M17.24,10.94L16.18,12L15.12,10.94L14.06,12L13,10.94L14.06,9.88L13,8.82L14.06,7.76L15.12,8.82L16.18,7.76L17.24,8.82L16.18,9.88L17.24,10.94Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>