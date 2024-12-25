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
	?><path d="M3.5 1.7L2.2 3L6.1 6.9V9C7.2 9.2 8.1 10.2 8.1 11.5S7.2 13.7 6.1 14V21L12.1 17.5C12.1 16.7 12.8 16 13.6 16C13.9 16 14.2 16.1 14.4 16.2L15.1 15.8L20.3 21L21.6 19.7L3.5 1.7M10.1 16C9.6 16 9.1 15.5 9.1 15S9.6 14 10.1 14 11.1 14.5 11.1 15 10.6 16 10.1 16M13.8 9.5L9.9 5.6C10.2 5.9 10.6 6 11.1 6C12.1 6 12.9 5.2 13.1 4.2C15.4 5.2 17.6 6.6 19.3 8.4C19.2 8.6 19.1 8.7 19.1 8.9C19.1 9.4 19.6 9.9 20.1 9.9C20.3 9.9 20.4 9.9 20.5 9.8C21 10.4 21.4 11.1 21.8 11.8L18.3 13.8L16.6 12.1C16.9 11.8 17.1 11.3 17.1 10.8C17.1 9.7 16.2 8.8 15.1 8.8C14.6 9 14.1 9.2 13.8 9.5M9.5 5.2L7.3 3C8 3 8.6 3.1 9.2 3.2C9.1 3.5 9.1 3.7 9.1 4C9.1 4.4 9.2 4.9 9.5 5.2Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
