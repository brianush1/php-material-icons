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
	?><path d="M22.25,14.29L21.56,16.18L9.2,11.71L11.28,6.05L19.84,9.14C21.94,9.9 23,12.2 22.25,14.29M1.5,12.14L8,14.5V19H16V17.37L20.5,19L21.21,17.11L2.19,10.25M7.3,10.2C8.79,9.5 9.42,7.69 8.71,6.2C8,4.71 6.2,4.08 4.7,4.8C3.21,5.5 2.58,7.3 3.3,8.8C4,10.29 5.8,10.92 7.3,10.2Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
