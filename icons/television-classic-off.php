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
	?><path d="M2,5.27L3.28,4L21,21.72L19.73,23L17.73,21H4C2.89,21 2,20.11 2,19V9C2,8 2.76,7.14 3.75,7L2,5.27M8.16,3L12,6.84L15.84,3L17.25,4.41L14.66,7H20C21.11,7 22,7.89 22,9V19C22,19.34 21.92,19.66 21.77,19.94L17,15.18V9H10.82L8.82,7H9.34L6.75,4.41L8.16,3M4,9V19H15.73L5.73,9H4M19.5,9A1,1 0 0,0 18.5,10A1,1 0 0,0 19.5,11A1,1 0 0,0 20.5,10A1,1 0 0,0 19.5,9M19.5,12A1,1 0 0,0 18.5,13A1,1 0 0,0 19.5,14A1,1 0 0,0 20.5,13A1,1 0 0,0 19.5,12Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
