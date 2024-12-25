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
	?><path d="M22.1 21.5L2.4 1.7L1.1 3L6.1 8C5.1 10.3 4.5 12.8 4.5 14.5C4.5 18.6 7.9 22 12 22C14.2 22 16.2 21 17.6 19.5L20.8 22.7L22.1 21.5M19.5 14.5C19.5 10.4 16.1 2 12 2C10.5 2 9.1 3.1 7.9 4.7L19.3 16.1C19.4 15.6 19.5 15.1 19.5 14.5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
