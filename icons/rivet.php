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
	?><path d="M11.43,2C10.61,2 9.94,2.65 9.94,3.5C9.94,4.64 9.94,5.8 9.94,6.96H7.95V7.95H15.91V6.96H13.92C13.92,5.8 13.92,4.64 13.92,3.5C13.92,2.65 13.25,2 12.43,2H11.43M10.94,8.95V21.87L11.93,22.87L12.92,21.87V8.95H10.94Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
