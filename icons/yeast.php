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
	?><path d="M18,14A4,4 0 0,1 22,18A4,4 0 0,1 18,22A4,4 0 0,1 14,18L14.09,17.15C14.05,16.45 13.92,15.84 13.55,15.5C13.35,15.3 13.07,15.19 12.75,15.13C11.79,15.68 10.68,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3A6.5,6.5 0 0,1 16,9.5C16,10.68 15.68,11.79 15.13,12.75C15.19,13.07 15.3,13.35 15.5,13.55C15.84,13.92 16.45,14.05 17.15,14.09L18,14M7.5,10A1.5,1.5 0 0,1 9,11.5A1.5,1.5 0 0,1 7.5,13A1.5,1.5 0 0,1 6,11.5A1.5,1.5 0 0,1 7.5,10M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
