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
	?><path d="M19 7H16.19C15.74 6.2 15.12 5.5 14.37 5L16 3.41L14.59 2L12.42 4.17C11.96 4.06 11.5 4 11 4S10.05 4.06 9.59 4.17L7.41 2L6 3.41L7.62 5C6.87 5.5 6.26 6.21 5.81 7H3V9H5.09C5.03 9.33 5 9.66 5 10V11H3V13H5V14C5 14.34 5.03 14.67 5.09 15H3V17H5.81C7.26 19.5 10.28 20.61 13 19.65V19C13 18.43 13.09 17.86 13.25 17.31C12.59 17.76 11.8 18 11 18C8.79 18 7 16.21 7 14V10C7 7.79 8.79 6 11 6S15 7.79 15 10V14C15 14.19 15 14.39 14.95 14.58C15.54 14.04 16.24 13.62 17 13.35V13H19V11H17V10C17 9.66 16.97 9.33 16.91 9H19V7M13 9V11H9V9H13M13 13V15H9V13H13M20 16H22V22H20M16 16H18V22H16V16Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
