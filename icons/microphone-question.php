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
	?><path d="M9 2C10.66 2 12 3.34 12 5V11C12 12.66 10.66 14 9 14S6 12.66 6 11V5C6 3.34 7.34 2 9 2M16 11C16 14.53 13.39 17.44 10 17.93V21H8V17.93C4.61 17.44 2 14.53 2 11H4C4 13.76 6.24 16 9 16S14 13.76 14 11H16M20.5 14.5V16H19V14.5H20.5M18.5 9.5H17V9C17 7.34 18.34 6 20 6S23 7.34 23 9C23 9.97 22.5 10.88 21.71 11.41L21.41 11.6C20.84 12 20.5 12.61 20.5 13.3V13.5H19V13.3C19 12.11 19.6 11 20.59 10.35L20.88 10.16C21.27 9.9 21.5 9.47 21.5 9C21.5 8.17 20.83 7.5 20 7.5S18.5 8.17 18.5 9V9.5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
