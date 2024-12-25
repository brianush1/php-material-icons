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
	?><path d="M12 4C16.41 4 20 7.59 20 12S16.41 20 12 20 4 16.41 4 12 7.59 4 12 4M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2M13.5 16.5C13.5 15.67 12.83 15 12 15S10.5 15.67 10.5 16.5C10.5 17.33 11.17 18 12 18S13.5 17.33 13.5 16.5M9 12C9 11.17 8.33 10.5 7.5 10.5S6 11.17 6 12 6.67 13.5 7.5 13.5 9 12.83 9 12M18 12C18 11.17 17.33 10.5 16.5 10.5C15.67 10.5 15 11.17 15 12S15.67 13.5 16.5 13.5C17.33 13.5 18 12.83 18 12Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
