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
	?><path d="M5.6 1.6C6 1.2 6.5 1 7 1H17C17.5 1 18 1.2 18.4 1.6C18.8 2 19 2.5 19 3V21C19 21.5 18.8 22 18.4 22.4C18 22.8 17.5 23 17 23H7C6.5 23 6 22.8 5.6 22.4C5.2 22 5 21.5 5 21V3C5 2.5 5.2 2 5.6 1.6M8 3C7.4 3 7 3.4 7 4V20C7 20.6 7.4 21 8 21H16C16.6 21 17 20.6 17 20V4C17 3.4 16.6 3 16 3H8M8 17C8 16.4 8.4 16 9 16H15C15.6 16 16 16.4 16 17V19C16 19.6 15.6 20 15 20H9C8.4 20 8 19.6 8 19V17Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
