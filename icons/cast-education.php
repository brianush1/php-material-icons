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
	?><path d="M21,3H3A2,2 0 0,0 1,5V8H3V5H21V19H14V21H21A2,2 0 0,0 23,19V5A2,2 0 0,0 21,3M1,18V21H4A3,3 0 0,0 1,18M1,14V16A5,5 0 0,1 6,21H8A7,7 0 0,0 1,14M1,10V12A9,9 0 0,1 10,21H12C12,14.92 7.07,10 1,10M11,11.09V13.09L14.5,15L18,13.09V11.09L14.5,13L11,11.09M14.5,6L9,9L14.5,12L20,9L14.5,6Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
