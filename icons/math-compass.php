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
	?><path d="M20,19.88V22L18.2,20.83L13.41,11.83C14.07,11.62 14.67,11.28 15.19,10.83L20,19.88M15,7A3,3 0 0,1 12,10C11.85,10 11.71,10 11.56,10L5.8,20.83L4,22V19.88L9.79,9C8.69,7.77 8.79,5.87 10.03,4.76C10.57,4.28 11.27,4 12,4V2A1,1 0 0,1 13,3V4.18C14.2,4.6 15,5.73 15,7M13,7A1,1 0 0,0 12,6A1,1 0 0,0 11,7A1,1 0 0,0 12,8A1,1 0 0,0 13,7Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
