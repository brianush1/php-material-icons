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
	?><path d="M21.04,12.13C21.18,12.13 21.31,12.19 21.42,12.3L22.7,13.58C22.92,13.79 22.92,14.14 22.7,14.35L21.7,15.35L19.65,13.3L20.65,12.3C20.76,12.19 20.9,12.13 21.04,12.13M19.07,13.88L21.12,15.93L15.06,22H13V19.94L19.07,13.88M10,2H14A2,2 0 0,1 16,4V6H20A2,2 0 0,1 22,8L20,10V8H4V19H11V21H4A2,2 0 0,1 2,19V8A2,2 0 0,1 4,6H8V4A2,2 0 0,1 10,2M14,6V4H10V6H14Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
