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
	?><path d="M12,17L15,20V18H21V16H15V14L12,17M9,5A3,3 0 0,1 12,8V11A3,3 0 0,1 9,14A3,3 0 0,1 6,11V8A3,3 0 0,1 9,5M9,7A1,1 0 0,0 8,8V11A1,1 0 0,0 9,12A1,1 0 0,0 10,11V8A1,1 0 0,0 9,7M4,12A1,1 0 0,1 5,13A1,1 0 0,1 4,14A1,1 0 0,1 3,13A1,1 0 0,1 4,12Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
