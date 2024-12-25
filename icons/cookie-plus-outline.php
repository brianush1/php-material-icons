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
	?><path d="M16.5 13C16.8 13 17.08 13.09 17.32 13.24C16.45 13.5 15.66 13.95 15 14.53C15 14.5 15 14.5 15 14.5C15 13.67 15.67 13 16.5 13M16 10V10.5C16 11.33 16.67 12 17.5 12H19C19 12.34 18.97 12.68 18.92 13C18.95 13 18.97 13 19 13C19.66 13 20.3 13.12 20.89 13.32C20.96 12.89 21 12.45 21 12C21 11.5 20.96 11 20.87 10.5C20.6 10 20 10 20 10H18V9C18 8 17 8 17 8H15V7C15 6 14 6 14 6H13V4C13 3 12 3 12 3C7.03 3 3 7.03 3 12S7.03 21 12 21C12.45 21 12.89 20.96 13.32 20.89C13.12 20.3 13 19.66 13 19C13 18.97 13 18.95 13 18.92C12.46 19 11.9 19 11.32 18.96C12 18.82 12.5 18.22 12.5 17.5C12.5 16.67 11.83 16 11 16S9.5 16.67 9.5 17.5C9.5 18 9.76 18.47 10.16 18.74C7.54 18.04 5.5 15.81 5.09 13.12C5 12.61 5 12.11 5 11.62C5.07 12.39 5.71 13 6.5 13C7.33 13 8 12.33 8 11.5S7.33 10 6.5 10C5.82 10 5.25 10.46 5.07 11.08C5.47 8 7.91 5.5 11 5.07V6.5C11 7.33 11.67 8 12.5 8H13V8.5C13 9.33 13.67 10 14.5 10H16M11.5 14C12.33 14 13 13.33 13 12.5S12.33 11 11.5 11 10 11.67 10 12.5 10.67 14 11.5 14M11 7.5C11 6.67 10.33 6 9.5 6S8 6.67 8 7.5 8.67 9 9.5 9 11 8.33 11 7.5M20 18V15H18V18H15V20H18V23H20V20H23V18H20Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
