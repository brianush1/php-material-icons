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
	?><path d="M6,3V4.18L8.82,7H18V3H6M2.28,3L1,4.27L4.75,8C3.19,8.15 2,9.44 2,11V17H6V21H17.73L19.73,23L21,21.72L2.28,3M9.82,8L18.82,17H22V11A3,3 0 0,0 19,8H9.82M19,10A1,1 0 0,1 20,11A1,1 0 0,1 19,12A1,1 0 0,1 18,11A1,1 0 0,1 19,10M8,14H10.73L15.73,19H8V14Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
