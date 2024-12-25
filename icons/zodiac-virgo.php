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
	?><path d="M18.5,19.13C20,17.77 20,15.18 20,14A4,4 0 0,0 16,10C15.3,10 14.6,10.2 14,10.56V6A3,3 0 0,0 11,3C10.25,3 9.55,3.29 9,3.78C7.86,2.76 6.14,2.76 5,3.78C4.45,3.28 3.74,3 3,3V5A1,1 0 0,1 4,6V16H6V6A1,1 0 0,1 7,5A1,1 0 0,1 8,6V16H10V6A1,1 0 0,1 11,5A1,1 0 0,1 12,6V14C12,15.18 12,17.77 13.5,19.13C12.72,19.54 11.88,19.84 11,20V22C12.29,22 14.84,20.74 16,20.13C17.16,20.74 19.71,22 21,22V20C20.12,19.84 19.28,19.54 18.5,19.13M16,12A2,2 0 0,1 18,14C18,16.92 17.46,18 16,18C14.54,18 14,16.92 14,14A2,2 0 0,1 16,12Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
