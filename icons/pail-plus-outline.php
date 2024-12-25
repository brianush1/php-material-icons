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
	?><path d="M4 6H3V4H21V6H20L18.6 13C17.83 13.07 17.11 13.26 16.45 13.58L17.96 6H6.04L6.5 8.22L4.65 9.27L4 6M12.86 8C12.58 7.5 11.97 7.35 11.5 7.63L3.27 12.38C2.79 12.66 2.62 13.27 2.9 13.75C3.18 14.23 3.79 14.39 4.27 14.11L12.5 9.36C12.97 9.09 13.14 8.47 12.86 8M13 19H8.64L7.73 14.43L5.9 15.5L7 21H13.35C13.13 20.37 13 19.7 13 19M18 15V18H15V20H18V23H20V20H23V18H20V15H18Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
