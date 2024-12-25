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
	?><path d="M18.5,15A3.5,3.5 0 0,1 15,11.5A3.5,3.5 0 0,1 18.5,8A3.5,3.5 0 0,1 22,11.5A3.5,3.5 0 0,1 18.5,15M5.5,15A3.5,3.5 0 0,1 2,11.5A3.5,3.5 0 0,1 5.5,8A3.5,3.5 0 0,1 9,11.5A3.5,3.5 0 0,1 5.5,15M18.5,6A5.5,5.5 0 0,0 13,11.5C13,12.83 13.47,14.05 14.26,15H9.74C10.53,14.05 11,12.83 11,11.5A5.5,5.5 0 0,0 5.5,6A5.5,5.5 0 0,0 0,11.5A5.5,5.5 0 0,0 5.5,17H18.5A5.5,5.5 0 0,0 24,11.5A5.5,5.5 0 0,0 18.5,6Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
