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
	?><path d="M12,15C13.31,15 14.42,15.83 14.83,17H18A4,4 0 0,1 22,21V22H20V21A2,2 0 0,0 18,19H14.83C14.42,20.17 13.31,21 12,21A3,3 0 0,1 9,18A3,3 0 0,1 12,15M12,17A1,1 0 0,0 11,18A1,1 0 0,0 12,19A1,1 0 0,0 13,18A1,1 0 0,0 12,17M18,3A2,2 0 0,1 20,5V10A2,2 0 0,1 18,12H14.85C14.43,12 14.05,12.24 13.9,12.63C13.7,13.23 13.23,13.71 12.62,13.91C11.58,14.25 10.44,13.68 10.1,12.63C9.95,12.24 9.57,12 9.15,12H6A2,2 0 0,1 4,10V5A2,2 0 0,1 6,3H18M18,10V5H6V10H10.65C10.9,9.46 11.41,9.09 12,9C12.59,9.09 13.1,9.46 13.35,10H18Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
