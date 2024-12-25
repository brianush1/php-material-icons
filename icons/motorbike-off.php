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
	?><path d="M22.1 21.5L2.4 1.7L1.1 3L8.1 10H6.5C4 10 2 12 2 14.5S4 19 6.5 19C8.7 19 10.6 17.4 10.9 15.3L12.4 14.4L13 15C13.2 17.1 14.9 18.8 17 19L20.8 22.8L22.1 21.5M8.8 15.3C8.5 16.3 7.5 17 6.4 17C5.1 17 4 15.9 4 14.5S5.1 12 6.5 12C7.6 12 8.5 12.7 8.9 13.8H6V15.3H8.8M11.2 8L9.2 6H13.4L17.4 10H17.5C20 10 22 12 22 14.5C22 15.7 21.5 16.8 20.8 17.6L19.4 16.2C19.8 15.8 20 15.2 20 14.6C20 13.2 18.9 12.1 17.5 12.1C16.9 12.1 16.3 12.3 15.9 12.7L13.2 10H14.6L12.6 8H11.2Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
