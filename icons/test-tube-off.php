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
	?><path d="M2,5.27L3.28,4L20,20.72L18.73,22L15.84,19.11C15.36,20.77 13.82,22 12,22A4,4 0 0,1 8,18V11.27L2,5.27M7,2H17V4H16V14.18L13.63,11.81C13.86,11.63 14,11.35 14,11C14,10.4 13.6,10 13,10C12.65,10 12.37,10.14 12.19,10.37L8,6.18V4H7V2M11,16C11.5,16 11.88,15.71 12,15.24L10.76,14C10.29,14.12 10,14.5 10,15C10,15.6 10.4,16 11,16M14,7V4H10V7H14Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
