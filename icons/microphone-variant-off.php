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
	?><path d="M2,5.27L3.28,4L20,20.72L18.73,22L16,19.26C15.86,21.35 14.12,23 12,23A4,4 0 0,1 8,19V18H7L6.16,9.82C5.82,9.47 5.53,9.06 5.33,8.6L2,5.27M9,3A4,4 0 0,1 13,7H8.82L6.08,4.26C6.81,3.5 7.85,3 9,3M11.84,9.82L11.82,10L9.82,8H12.87C12.69,8.7 12.33,9.32 11.84,9.82M11,18H10V19A2,2 0 0,0 12,21A2,2 0 0,0 14,19V17.27L11.35,14.62L11,18M18,10H20L19,11L20,12H18A2,2 0 0,0 16,14V14.18L14.3,12.5C14.9,11 16.33,10 18,10M8,12A1,1 0 0,0 9,13C9.21,13 9.4,12.94 9.56,12.83L8.17,11.44C8.06,11.6 8,11.79 8,12Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
