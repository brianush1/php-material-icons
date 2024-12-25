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
	?><path d="M17 10V11.5H14.7L13.2 10H17M18 8.5C19.38 8.5 20.5 9.62 20.5 11S19.38 13.5 18 13.5H16.7L18.18 15C20.31 14.89 22 13.15 22 11C22 8.79 20.21 7 18 7H10.2L11.7 8.5H18M22.11 21.46L20.84 22.73L16.11 18H7.5C4.46 18 2 15.54 2 12.5C2 10.17 3.45 8.19 5.5 7.38L1.11 3L2.39 1.73L22.11 21.46M8.5 12.5C8.5 13.05 8.95 13.5 9.5 13.5H11.61L9.61 11.5H9.5C8.95 11.5 8.5 11.95 8.5 12.5M14.61 16.5L13.11 15H9.5C8.12 15 7 13.88 7 12.5C7 11.5 7.57 10.69 8.38 10.27L6.69 8.58C4.87 8.96 3.5 10.57 3.5 12.5C3.5 14.71 5.29 16.5 7.5 16.5H14.61Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
