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
	?><path d="M4 3C3.4 3 3 3.4 3 4C3 13.4 10.6 21 20 21C20.6 21 21 20.6 21 20V16.5C21 15.9 20.6 15.5 20 15.5C18.8 15.5 17.5 15.3 16.4 14.9C16 14.8 15.7 14.9 15.4 15.1L13.2 17.3C10.4 15.9 8.1 13.5 6.6 10.7L8.8 8.5C9.1 8.2 9.2 7.8 9 7.5C8.7 6.4 8.5 5.2 8.5 4C8.5 3.4 8.1 3 7.5 3M19.1 3.5L17 5.6L14.9 3.5L13.5 4.9L15.6 7L13.5 9.1L14.9 10.5L17 8.4L19.1 10.5L20.5 9.1L18.4 7L20.5 4.9" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
