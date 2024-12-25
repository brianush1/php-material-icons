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
	?><path d="M20.8 22.7L19.6 21.5C19.1 21.8 18.6 22 18 22H6C4.3 22 3 20.7 3 19C3 18.4 3.2 17.8 3.5 17.4L7.9 9.8L1.1 3L2.4 1.7L22.1 21.4L20.8 22.7M15 7.8V6C15.6 6 16 5.6 16 5V4C16 2.9 15.1 2 14 2H10C8.9 2 8 2.9 8 4V4.8L20.4 17.2L15 7.8Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
