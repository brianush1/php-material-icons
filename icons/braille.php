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
	?><path d="M7,8A1,1 0 0,1 8,7A1,1 0 0,1 9,8V12.47L10.21,12.6L15.15,14.79C15.67,15.03 16,15.56 16,16.14V20.5C15.97,21.32 15.32,21.97 14.5,22H8C7.62,22 7.26,21.85 7,21.57L2.1,17.37L2.84,16.6C3.03,16.39 3.3,16.28 3.58,16.28H3.8L7,18V8M19.5,2A1.5,1.5 0 0,0 18,3.5A1.5,1.5 0 0,0 19.5,5A1.5,1.5 0 0,0 21,3.5A1.5,1.5 0 0,0 19.5,2M19.5,7A1.5,1.5 0 0,0 18,8.5A1.5,1.5 0 0,0 19.5,10A1.5,1.5 0 0,0 21,8.5A1.5,1.5 0 0,0 19.5,7M14.5,7A1.5,1.5 0 0,0 13,8.5A1.5,1.5 0 0,0 14.5,10A1.5,1.5 0 0,0 16,8.5A1.5,1.5 0 0,0 14.5,7M19.5,12A1.5,1.5 0 0,0 18,13.5A1.5,1.5 0 0,0 19.5,15A1.5,1.5 0 0,0 21,13.5A1.5,1.5 0 0,0 19.5,12Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
