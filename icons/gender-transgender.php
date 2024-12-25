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
	?><path d="M19.58,3H15V1H23V9H21V4.41L16.17,9.24C16.69,10.03 17,11 17,12C17,14.42 15.28,16.44 13,16.9V19H15V21H13V23H11V21H9V19H11V16.9C8.72,16.44 7,14.42 7,12C7,11 7.3,10.04 7.82,9.26L6.64,8.07L5.24,9.46L3.83,8.04L5.23,6.65L3,4.42V8H1V1H8V3H4.41L6.64,5.24L8.08,3.81L9.5,5.23L8.06,6.66L9.23,7.84C10,7.31 11,7 12,7C13,7 13.96,7.3 14.75,7.83L19.58,3M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
