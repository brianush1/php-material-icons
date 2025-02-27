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
	?><path d="M15.5 9C14.8 9 14.11 9.28 13.5 9.67V5H11.5V9.62C11.04 9.24 10.39 9 9.5 9C8.8 9 8.11 9.28 7.5 9.67V5H5.5V19C8.5 17.32 10.43 15.79 11.5 14.41V19C16.36 16.26 18.5 13.91 18.5 12C18.5 10.59 17.79 9 15.5 9M7.5 15.38V12.26C8.12 11.59 8.95 11 9.5 11C10.09 11 10.5 11.07 10.5 12C10.5 12.15 10.4 13.3 7.5 15.38M13.5 15.38V12.26C14.12 11.59 14.95 11 15.5 11C16.09 11 16.5 11.07 16.5 12C16.5 12.15 16.4 13.3 13.5 15.38Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
