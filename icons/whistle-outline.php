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
	?><path d="M3.76 3.7L2.14 4.88L4.43 8A8.23 8.23 0 0 1 6.35 7.28M11 9V11H18V11.29L13 12.71V15.5A4.5 4.5 0 1 1 8.5 11H9V9H8.5A6.5 6.5 0 1 0 15 15.5V13.91L22 12V9M16.24 3.7L13.85 7H16.32L17.86 4.88M9 2V7H11V2Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
