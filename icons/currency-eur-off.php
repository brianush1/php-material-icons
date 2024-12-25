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
	?><path d="M22.11 21.46L2.39 1.73L1.11 3L6.7 8.59C6.64 8.73 6.57 8.86 6.5 9H3L2 11H6.06C6 11.33 6 11.66 6 12S6 12.67 6.06 13H3L2 15H6.5C7.76 18.5 11.08 21 15 21C16.21 21 17.36 20.74 18.41 20.3L20.84 22.73L22.11 21.46M8.58 13C8.53 12.67 8.5 12.34 8.5 12S8.53 11.33 8.58 11H9.11L11.11 13H8.58M15 18.5C12.5 18.5 10.32 17.08 9.24 15H13.11L16.44 18.33C15.97 18.43 15.5 18.5 15 18.5M12.2 9H16L15 11H14.2L12.2 9M10.5 7.32L8.74 5.54C10.36 3.97 12.56 3 15 3C17.3 3 19.41 3.87 21 5.3L19.23 7.07C18.09 6.09 16.61 5.5 15 5.5C13.26 5.5 11.69 6.2 10.5 7.32Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
