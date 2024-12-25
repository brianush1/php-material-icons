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
	?><path d="M3,17V7H5V17H3M19,17V7H21V17H19M22,9H24V15H22V9M0,15V9H2V15H0M17.96,11.97C17.96,13.87 17.07,15.57 15.68,16.67L14.97,20.95H9L8.27,16.67C6.88,15.57 6,13.87 6,11.97C6,10.07 6.88,8.37 8.27,7.28L9,3H14.97L15.68,7.28C17.07,8.37 17.96,10.07 17.96,11.97M7.5,11.97C7.5,14.45 9.5,16.46 11.97,16.46A4.5,4.5 0 0,0 16.46,11.97C16.46,9.5 14.45,7.5 11.97,7.5A4.47,4.47 0 0,0 7.5,11.97Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
