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
	?><path d="M12 14L8 10L4 14H7.1C7.56 18.56 9.58 22 12 22S16.44 18.56 16.9 14H14.91C14.57 17.45 13.4 20 12 20S9.43 17.45 9.09 14H12M12 4C13.4 4 14.57 6.55 14.91 10H16.9C16.44 5.44 14.42 2 12 2C9.84 2 8 4.74 7.3 8.58L8 7.88L9.21 9.08C9.64 6.11 10.73 4 12 4M22 13V11H11L13 13H22M2 13H3L5 11H2V13Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
