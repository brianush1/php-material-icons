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
	?><path d="M4.93,3.92L6.34,5.33C9.46,2.2 14.53,2.2 17.66,5.33L19.07,3.92C15.17,0 8.84,0 4.93,3.92M7.76,6.75L9.17,8.16C10.73,6.6 13.26,6.6 14.83,8.16L16.24,6.75C13.9,4.41 10.1,4.41 7.76,6.75M19,14A1,1 0 0,1 18,13A1,1 0 0,1 19,12A1,1 0 0,1 20,13A1,1 0 0,1 19,14M16,20H8V15H16V20M19,10H5A3,3 0 0,0 2,13V18H6V22H18V18H22V13A3,3 0 0,0 19,10Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
