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
	?><path d="M16.61 13.5C15.81 13.85 15.11 14.36 14.54 15H9.5C8.12 15 7 13.88 7 12.5S8.12 10 9.5 10H17V11.5H9.5C8.95 11.5 8.5 11.95 8.5 12.5S8.95 13.5 9.5 13.5H16.61M3.5 12.5C3.5 10.29 5.29 8.5 7.5 8.5H18C19.38 8.5 20.5 9.62 20.5 11C20.5 11.84 20.08 12.58 19.45 13.03C20.05 13.07 20.63 13.2 21.17 13.41C21.69 12.74 22 11.91 22 11C22 8.79 20.21 7 18 7H7.5C4.46 7 2 9.46 2 12.5S4.46 18 7.5 18H13.09C13.18 17.47 13.34 16.97 13.55 16.5H7.5C5.29 16.5 3.5 14.71 3.5 12.5M22.54 16.88L21.12 15.47L19 17.59L16.88 15.47L15.47 16.88L17.59 19L15.47 21.12L16.88 22.54L19 20.41L21.12 22.54L22.54 21.12L20.41 19L22.54 16.88Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
