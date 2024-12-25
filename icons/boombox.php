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
	?><path d="M7,5L5,7V8H3A1,1 0 0,0 2,9V17A1,1 0 0,0 3,18H21A1,1 0 0,0 22,17V9A1,1 0 0,0 21,8H19V7L17,5H7M7,7H17V8H7V7M11,9H13A0.5,0.5 0 0,1 13.5,9.5A0.5,0.5 0 0,1 13,10H11A0.5,0.5 0 0,1 10.5,9.5A0.5,0.5 0 0,1 11,9M7.5,10.5A3,3 0 0,1 10.5,13.5A3,3 0 0,1 7.5,16.5A3,3 0 0,1 4.5,13.5A3,3 0 0,1 7.5,10.5M16.5,10.5A3,3 0 0,1 19.5,13.5A3,3 0 0,1 16.5,16.5A3,3 0 0,1 13.5,13.5A3,3 0 0,1 16.5,10.5M7.5,12A1.5,1.5 0 0,0 6,13.5A1.5,1.5 0 0,0 7.5,15A1.5,1.5 0 0,0 9,13.5A1.5,1.5 0 0,0 7.5,12M16.5,12A1.5,1.5 0 0,0 15,13.5A1.5,1.5 0 0,0 16.5,15A1.5,1.5 0 0,0 18,13.5A1.5,1.5 0 0,0 16.5,12Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
