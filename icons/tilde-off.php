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
	?><path d="M20.84 22.73L10.78 12.67C10 12.03 9.27 11.5 8.5 11.5C4.5 11.5 4.5 15 4.5 15H2C2 15 2 9.59 7.16 9.05L1.11 3L2.39 1.73L10.03 9.37L10.03 9.37L15.64 15L15.63 15L22.11 21.46L20.84 22.73M22 9H19.5C19.5 9 19.5 12.38 15.69 12.5L17.95 14.75C22 13.62 22 9 22 9Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
