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
	?><path d="M19 5V19H5V5H19M19 3H5C3.9 3 3 3.9 3 5V19C3 20.11 3.9 21 5 21H19C20.11 21 21 20.11 21 19V5C21 3.9 20.11 3 19 3M7.5 6C6.67 6 6 6.67 6 7.5S6.67 9 7.5 9 9 8.33 9 7.5 8.33 6 7.5 6M16.5 15C15.67 15 15 15.67 15 16.5C15 17.33 15.67 18 16.5 18C17.33 18 18 17.33 18 16.5C18 15.67 17.33 15 16.5 15M16.5 6C15.67 6 15 6.67 15 7.5S15.67 9 16.5 9C17.33 9 18 8.33 18 7.5S17.33 6 16.5 6M7.5 15C6.67 15 6 15.67 6 16.5C6 17.33 6.67 18 7.5 18S9 17.33 9 16.5C9 15.67 8.33 15 7.5 15Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
