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
	?><path d="M17,1H7A2,2 0 0,0 5,3V6H7V4H17V20H7V18H5V21A2,2 0 0,0 7,23H17A2,2 0 0,0 19,21V3A2,2 0 0,0 17,1M8.8,11V9.5C8.8,8.1 7.4,7 6,7C4.6,7 3.2,8.1 3.2,9.5V11C2.6,11 2,11.6 2,12.2V15.7C2,16.4 2.6,17 3.2,17H8.7C9.4,17 10,16.4 10,15.8V12.3C10,11.6 9.4,11 8.8,11M7.5,11H4.5V9.5C4.5,8.7 5.2,8.2 6,8.2C6.8,8.2 7.5,8.7 7.5,9.5V11Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
