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
	?><path d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3M5 19V17H8.1C8.3 17.8 8.8 18.5 9.4 19M19 19H14.6C15.2 18.5 15.7 17.8 15.9 17H19M19 15H14V16C14 17.1 13.1 18 12 18S10 17.1 10 16V15H5V5H19V15M14.1 6.5L15.5 7.9L13.4 10L15.5 12.1L14.1 13.5L12 11.4L9.9 13.5L8.5 12.1L10.6 10L8.5 7.9L9.9 6.5L12 8.6L14.1 6.5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>