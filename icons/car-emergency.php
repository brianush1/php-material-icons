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
	?><path d="M11 0V3H13V0H11M7.88 1.46L6.46 2.87L8.59 5L10 3.58L7.88 1.46M16.12 1.46L14 3.58L15.41 5L17.54 2.88L16.12 1.46M12 5A2 2 0 0 0 10 7V8H6.5C5.84 8 5.28 8.42 5.08 9L3 15V23A1 1 0 0 0 4 24H5A1 1 0 0 0 6 23V22H18V23A1 1 0 0 0 19 24H20A1 1 0 0 0 21 23V15L18.92 9C18.72 8.42 18.16 8 17.5 8H14V7A2 2 0 0 0 12 5M6.5 9.5H17.5L19 14H5L6.5 9.5M6.5 16A1.5 1.5 0 0 1 8 17.5A1.5 1.5 0 0 1 6.5 19A1.5 1.5 0 0 1 5 17.5A1.5 1.5 0 0 1 6.5 16M17.5 16A1.5 1.5 0 0 1 19 17.5A1.5 1.5 0 0 1 17.5 19A1.5 1.5 0 0 1 16 17.5A1.5 1.5 0 0 1 17.5 16Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
