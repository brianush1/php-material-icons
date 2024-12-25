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
	?><path d="M20.8 22.7L16.3 18.2C14.2 19.9 11.4 21 8.5 21C7.1 21 5.9 20.2 5.3 19L3 20.5V14.5L5.3 16C5.8 14.8 7.1 14 8.5 14C9.5 14 10.5 13.7 11.3 13.2L1.1 3L2.4 1.7L22.1 21.4L20.8 22.7M21 8.5C21 7.1 20.2 5.9 19 5.3L20.5 3H14.5L16 5.3C14.8 5.8 14 7.1 14 8.5C14 9.2 13.9 9.8 13.6 10.4L18.7 15.6C20.2 13.6 21 11.1 21 8.5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
