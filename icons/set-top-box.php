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
	?><path d="M5,15.5A0.5,0.5 0 0,1 4.5,16H3.5A0.5,0.5 0 0,1 3,15.5V15H2A1,1 0 0,1 1,14V11A1,1 0 0,1 2,10H22A1,1 0 0,1 23,11V14A1,1 0 0,1 22,15H21V15.5A0.5,0.5 0 0,1 20.5,16H19.5A0.5,0.5 0 0,1 19,15.5V15H5V15.5M3,12V13H5V12H3M6,12V13H8V12H6M20.5,11.5A1,1 0 0,0 19.5,12.5A1,1 0 0,0 20.5,13.5A1,1 0 0,0 21.5,12.5A1,1 0 0,0 20.5,11.5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
