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
	?><path d="M20 14H18L14.8 23H16.7L17.4 21H20.6L21.3 23H23.2L20 14M17.8 19.7L19 16L20.2 19.7H17.8M15.4 15.4L14.8 14.8C15.5 14.1 16 13.1 16 12C16 11.3 15.8 10.6 15.4 10L17.6 7.8C18.5 9 19 10.4 19 12H21V5C21 3.9 20.1 3 19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H13.4L15.4 15.4M9.2 14.8L7 17C5.7 15.7 5 14 5 12C5 8.1 8.1 5 12 5C13.6 5 15 5.5 16.2 6.4L14 8.6C13.4 8.2 12.7 8 12 8C9.8 8 8 9.8 8 12C8 13.1 8.5 14.1 9.2 14.8Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
