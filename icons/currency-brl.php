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
	?><path d="M12,15H14C14,16.08 15.37,17 17,17C18.63,17 20,16.08 20,15C20,13.9 18.96,13.5 16.76,12.97C14.64,12.44 12,11.78 12,9C12,7.21 13.47,5.69 15.5,5.18V3H18.5V5.18C20.53,5.69 22,7.21 22,9H20C20,7.92 18.63,7 17,7C15.37,7 14,7.92 14,9C14,10.1 15.04,10.5 17.24,11.03C19.36,11.56 22,12.22 22,15C22,16.79 20.53,18.31 18.5,18.82V21H15.5V18.82C13.47,18.31 12,16.79 12,15M2,3H5.5A5.5,5.5 0 0,1 11,8.5C11,10.69 9.71,12.59 7.86,13.47L11.64,21H9.4L5.88,14H5.5L4,14V21H2V3M5.5,12A3.5,3.5 0 0,0 9,8.5A3.5,3.5 0 0,0 5.5,5H4V12H5.5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
