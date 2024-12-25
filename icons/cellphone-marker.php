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
	?><path d="M18.5 13C16.6 13 15 14.61 15 16.5C15 19.11 18.5 23 18.5 23S22 19.11 22 16.5C22 14.61 20.4 13 18.5 13M18.5 17.81C17.8 17.81 17.3 17.21 17.3 16.61C17.3 15.91 17.9 15.41 18.5 15.41S19.7 16 19.7 16.61C19.8 17.21 19.2 17.81 18.5 17.81M15.91 23H7C5.9 23 5 22.11 5 21V3C5 1.89 5.89 1 7 1H17C18.1 1 19 1.89 19 3V11.03C18.84 11 18.67 11 18.5 11C18 11 17.5 11.08 17 11.22V5H7V19H13.54C14.14 20.5 15.12 21.97 15.91 23Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
