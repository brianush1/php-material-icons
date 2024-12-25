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
	?><path d="M12 11H10V9H12V11M14 11H16V9H14V11M13.4 21H12V17.5H10V21H4V3H18V13.1C18.3 13 18.7 13 19 13C19.3 13 19.7 13 20 13.1V1H2V23H14.5C14 22.4 13.6 21.7 13.4 21M14 7H16V5H14V7M16 13.8V13H14V15H14.5C15 14.5 15.5 14.1 16 13.8M8 5H6V7H8V5M8 9H6V11H8V9M6 19H8V17H6V19M12 5H10V7H12V5M10 15H12V13H10V15M8 13H6V15H8V13M21.1 15.5L19 17.6L16.9 15.5L15.5 16.9L17.6 19L15.5 21.1L16.9 22.5L19 20.4L21.1 22.5L22.5 21.1L20.4 19L22.5 16.9L21.1 15.5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
