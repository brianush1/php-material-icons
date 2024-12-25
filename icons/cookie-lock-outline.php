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
	?><path d="M10 12.5C10 11.67 10.67 11 11.5 11S13 11.67 13 12.5 12.33 14 11.5 14 10 13.33 10 12.5M16 10V10.5C16 10.9 16.16 11.26 16.41 11.53C17.04 11.2 17.75 11 18.5 11C19.42 11 20.27 11.29 21 11.77C21 11.35 20.95 10.92 20.87 10.5C20.6 10 20 10 20 10H18V9C18 8 17 8 17 8H15V7C15 6 14 6 14 6H13V4C13 3 12 3 12 3C7.03 3 3 7.03 3 12S7.03 21 12 21C12.34 21 12.67 21 13 20.94V18.92C12.46 19 11.9 19 11.32 18.96C12 18.82 12.5 18.22 12.5 17.5C12.5 16.67 11.83 16 11 16S9.5 16.67 9.5 17.5C9.5 18 9.76 18.47 10.16 18.74C7.54 18.04 5.5 15.81 5.09 13.12C5 12.61 5 12.11 5 11.62C5.07 12.39 5.71 13 6.5 13C7.33 13 8 12.33 8 11.5S7.33 10 6.5 10C5.82 10 5.25 10.46 5.07 11.08C5.47 8 7.91 5.5 11 5.07V6.5C11 7.33 11.67 8 12.5 8H13V8.5C13 9.33 13.67 10 14.5 10H16M11 7.5C11 6.67 10.33 6 9.5 6S8 6.67 8 7.5 8.67 9 9.5 9 11 8.33 11 7.5M22 17V21C22 21.55 21.55 22 21 22H16C15.45 22 15 21.55 15 21V17C15 16.45 15.45 16 16 16V15.5C16 14.12 17.12 13 18.5 13S21 14.12 21 15.5V16C21.55 16 22 16.45 22 17M20 15.5C20 14.67 19.33 14 18.5 14S17 14.67 17 15.5V16H20V15.5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
