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
	?><path d="M11,2V3C9.27,3.2 7.69,3.9 6.4,4.94L5.64,4.18L4.22,5.6L5,6.35C3.9,7.68 3.21,9.3 3,11H2V13H3C3.21,14.68 3.9,16.26 5,17.56L4.22,18.32L5.64,19.74L6.39,19C7.71,20.07 9.3,20.77 11,21V22H13V21C14.69,20.77 16.29,20.07 17.6,19L18.36,19.74L19.78,18.32L19,17.57C20.1,16.27 20.79,14.68 21,13H22V11H21C20.79,9.3 20.1,7.69 19,6.36L19.78,5.6L18.36,4.18L17.61,4.94C16.29,3.87 14.69,3.2 13,3V2H11M11,5V8L10,8.5L7.81,6.35C8.72,5.67 9.81,5.17 11,5M13,5C14.16,5.18 15.26,5.64 16.2,6.35L14,8.5L13,8V5M6.4,7.76L8.5,10L8,11H5C5.16,9.84 5.7,8.7 6.39,7.75L6.4,7.76M17.6,7.76C18.33,8.71 18.81,9.82 19,11H16L15.5,10L17.61,7.76H17.6M12,10C13.12,10 14,10.88 14,12C14,13.12 13.12,14 12,14C10.88,14 10,13.12 10,12C10,10.88 10.88,10 12,10M5,13H8L8.57,14L6.39,16.15C5.67,15.24 5.19,14.16 5,13V13M16,13H19C18.81,14.15 18.33,15.24 17.61,16.16L15.5,14L16,13M10,15.5L11,16V19C9.83,18.8 8.73,18.31 7.8,17.57L10,15.5M14,15.5L16.19,17.57C15.28,18.25 14.19,18.83 13,19V16L14,15.5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
