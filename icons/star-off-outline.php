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
	?><path d="M22.1 21.5L2.4 1.7L1.1 3L6.9 8.8L2 9.2L7.5 14L5.9 21L12.1 17.3L18.3 21L18 19.8L20.9 22.7L22.1 21.5M15.8 17.7L12 15.4L8.2 17.7L9.2 13.4L5.9 10.5L8.4 10.3L15.8 17.7M11.2 8L10 6.8L12 2L14.8 8.6L22 9.2L16.9 13.6L15.8 12.5L18.2 10.5L13.8 10.1L12.1 6.1L11.2 8Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
