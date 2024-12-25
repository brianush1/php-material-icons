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
	?><path d="M19.86,3C20.41,3.96 20.08,5.18 19.12,5.73L9,11.58V20A1,1 0 0,1 10,21V22H2V21A1,1 0 0,1 3,20V11A3,3 0 0,1 6,8C6.31,8 6.62,8.06 6.92,8.16L17.12,2.27C18.09,1.71 19.31,2.04 19.86,3M7.5,20V13.6C6.57,14.14 5.43,14.14 4.5,13.6V20H7.5M6,12.5A1.5,1.5 0 0,0 7.5,11A1.5,1.5 0 0,0 6,9.5A1.5,1.5 0 0,0 4.5,11A1.5,1.5 0 0,0 6,12.5M10.4,9.62L11.7,8.87L9.4,7.87L8.1,8.62L10.4,9.62M13.86,7.62L15.16,6.87L12.86,5.87L11.56,6.62L13.86,7.62M17.33,5.62L18.62,4.87L16.33,3.87L15.03,4.62L17.33,5.62M16,11.16H18V16.17L21,16.16L17,20L13,16.16L16,16.17V11.16Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
