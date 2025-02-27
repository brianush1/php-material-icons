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
	?><path d="M18.09,10.5V9H9.59V4.5A1.5,1.5 0 0,0 8.09,3A1.5,1.5 0 0,0 6.59,4.5A1.5,1.5 0 0,0 8.09,6V9H5.09V10.5H8.09V16.7C8.09,19.06 10,20.97 12.34,21C14.68,20.96 16.54,19.04 16.5,16.7C16.5,15.11 15.75,13.61 14.5,12.62C14.28,12.44 14.05,12.28 13.8,12.15C13.58,12.05 13.34,12 13.1,12C12.39,12 11.74,12.39 11.39,13C11.2,13.3 11.1,13.65 11.1,14C11.11,15.1 12,16 13.11,16C13.73,16 14.31,15.69 14.69,15.2C14.9,15.67 15,16.18 15,16.7C15.04,18.2 13.86,19.45 12.34,19.5C10.81,19.5 9.58,18.23 9.59,16.7V10.5H18.09Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
