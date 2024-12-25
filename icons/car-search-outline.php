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
	?><path d="M10.29 19H6V20C6 20.5 5.6 21 5 21H4C3.5 21 3 20.5 3 20V12L5.1 6C5.3 5.4 5.8 5 6.5 5H17.5C18.1 5 18.7 5.4 18.9 6L20.91 11.74C20.17 10.93 19.24 10.31 18.18 9.95L17.1 7H6.8L5.8 10H13.91C12.79 10.4 11.81 11.1 11.08 12H5V17H9.68C9.78 17.71 10 18.38 10.29 19M6 14.5C6 15.3 6.7 16 7.5 16S9 15.3 9 14.5 8.3 13 7.5 13 6 13.7 6 14.5M16.11 11.61C13.61 11.61 11.61 13.61 11.61 16.11S13.61 20.61 16.11 20.61C17 20.61 17.8 20.36 18.5 19.93L21.61 23L23 21.61L19.92 18.5C20.36 17.82 20.61 17 20.61 16.11C20.61 13.61 18.61 11.61 16.11 11.61M16.11 13.61C17.5 13.61 18.61 14.73 18.61 16.11S17.5 18.61 16.11 18.61 13.61 17.5 13.61 16.11 14.73 13.61 16.11 13.61" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
