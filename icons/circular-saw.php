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
	?><path d="M13,11A1,1 0 0,1 14,12A1,1 0 0,1 13,13A1,1 0 0,1 12,12A1,1 0 0,1 13,11M7.86,6.25C9.14,4.87 10.97,4 13,4C16.5,4 19.44,6.61 19.93,10H22V12H16A3,3 0 0,0 13,9A3,3 0 0,0 10,12H2V10H2.05C2.25,7.73 3.14,5.66 4.5,4L7.86,6.25M6.73,7.89L5.06,6.77C4.53,7.75 4.18,8.84 4.06,10H6.07C6.18,9.25 6.4,8.54 6.73,7.89M7.4,15.4L6,14H11.79C12.03,14.42 12.5,14.7 13,14.7C13.5,14.7 13.97,14.42 14.21,14H20V15.4C18.39,14.42 18.46,15.75 18.46,15.75V17.71L16.5,19.67C16,17.92 15.1,18.9 15.1,18.9L13.7,20.3H10.9C11.88,18.69 10.55,18.76 10.55,18.76H8.59L6.63,16.8C8.38,16.31 7.4,15.4 7.4,15.4Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
