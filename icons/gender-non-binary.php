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
	?><path d="M13 3H11V5.27L9.04 4.13L8.04 5.87L10 7L8.04 8.13L9.04 9.87L11 8.73V12.1C8.72 12.56 7 14.58 7 17C7 19.76 9.24 22 12 22S17 19.76 17 17C17 14.58 15.28 12.56 13 12.1V8.73L14.96 9.87L15.96 8.13L14 7L15.96 5.87L14.96 4.13L13 5.27V3M12 20C10.35 20 9 18.65 9 17S10.35 14 12 14 15 15.35 15 17 13.65 20 12 20Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
