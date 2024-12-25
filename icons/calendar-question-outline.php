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
	?><path d="M11.95 10C11.21 10 10.61 10.18 10.15 10.5C9.71 10.89 9.5 11.4 9.5 12.1L9.5 12.12H11.15C11.16 11.86 11.24 11.65 11.39 11.5C11.54 11.38 11.73 11.31 11.95 11.31C12.21 11.31 12.43 11.4 12.59 11.56C12.74 11.73 12.81 11.96 12.81 12.22C12.81 12.5 12.75 12.75 12.61 12.95C12.5 13.16 12.31 13.33 12.09 13.5C11.66 13.78 11.36 14.05 11.2 14.29C11.03 14.5 10.94 14.89 10.94 15.33H12.64C12.64 15.06 12.67 14.84 12.75 14.68C12.83 14.5 12.97 14.36 13.18 14.21C13.57 14 13.88 13.74 14.13 13.39C14.37 13.03 14.5 12.67 14.5 12.22C14.5 11.55 14.27 11 13.81 10.61C13.36 10.2 12.74 10 11.95 10M10.94 16.22V18H12.64V16.22H10.94M19 3H18V1H16V3H8V1H6V3H5C3.89 3 3 3.9 3 5V19C3 20.11 3.9 21 5 21H19C20.11 21 21 20.11 21 19V5C21 3.9 20.11 3 19 3M19 5V7H5V5H19M5 19V9H19V19H5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
