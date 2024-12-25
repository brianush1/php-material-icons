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
	?><path d="M5 13L6.5 8.5H17.5L19 13M17.5 18C16.7 18 16 17.3 16 16.5S16.7 15 17.5 15 19 15.7 19 16.5 18.3 18 17.5 18M6.5 18C5.7 18 5 17.3 5 16.5S5.7 15 6.5 15 8 15.7 8 16.5 7.3 18 6.5 18M18.9 8C18.7 7.4 18.1 7 17.5 7H6.5C5.8 7 5.3 7.4 5.1 8L3 14V22C3 22.6 3.4 23 4 23H5C5.6 23 6 22.6 6 22V21H18V22C18 22.6 18.4 23 19 23H20C20.6 23 21 22.6 21 22V14M8 1L12 5.5L16 1Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
