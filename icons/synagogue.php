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
	?><path d="M6 8V21H10V16C10 14.9 10.9 14 12 14S14 14.9 14 16V21H18V8L12 3L6 8M13.5 10C13.5 10.8 12.8 11.5 12 11.5S10.5 10.8 10.5 10 11.2 8.5 12 8.5 13.5 9.2 13.5 10M3 5C1.9 5 1 5.9 1 7V8H5V7C5 5.9 4.1 5 3 5M1 9H5V21H1V9M21 5C19.9 5 19 5.9 19 7V8H23V7C23 5.9 22.1 5 21 5M19 9H23V21H19V9Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>