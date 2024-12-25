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
	?><path d="M1 4.27L3 6.27C2.4 6.61 2 7.26 2 8V20C2 21.11 2.9 22 4 22H18.73L20.73 24L22 22.72L2.28 3L1 4.27M20 6H8.83L16.47 2.83L15.71 1L6.59 4.76L9.82 8H20V12H18V10H16V12H13.82L22 20.18V8C22 6.9 21.11 6 20 6M4 8H4.73L8.73 12H4V8M7 14C8.66 14 10 15.34 10 17C10 18.66 8.66 20 7 20C5.34 20 4 18.66 4 17C4 15.34 5.34 14 7 14Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
