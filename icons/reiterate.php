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
	?><path d="M10.5 4A6.5 6.5 0 0 0 4 10H1L5 14L9 10H6.03A4.5 4.5 0 0 1 10.5 6A4.5 4.5 0 0 1 15 10.5A4.5 4.5 0 0 1 10.5 15H2V17H10.5A6.5 6.5 0 0 0 17 10.5A6.5 6.5 0 0 0 10.5 4M19 12V15H16.5A7.5 7.5 0 0 1 14.24 17H19V20L23 16Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
