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
	?><path d="M2.61 2L21.35 20.74L19.94 22.15L14.8 17H13V15.2L11 13.23V15.21C10.93 15.68 10.74 16.08 10.41 16.41C10.08 16.73 9.68 16.93 9.21 17H5V15H9V13H6V11H8.8L6.79 9H5V7.23L1.2 3.41L2.61 2M16 7H16.22C17 7.07 17.63 7.36 18.14 7.88C18.65 8.39 18.93 9 19 9.76V14.24C18.95 14.63 18.87 15 18.72 15.3L17 13.6V9.85C16.95 9.63 16.84 9.44 16.69 9.28C16.53 9.13 16.34 9.03 16.12 9H15V11.59L13 9.57V7H16Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
