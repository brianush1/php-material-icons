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
	?><path d="M10.5 7.3L9 5.8C9.9 5.3 10.9 5 12 5C15.3 5 18 7.7 18 11V14.8L16 12.8V11C16 8.8 14.2 7 12 7C11.5 7 11 7.1 10.5 7.3M20.1 4.8L18.7 3.4L16.6 5.5L18 6.9L20.1 4.8M19.5 10.5V12.5H22.5V10.5H19.5M4.5 10.5H1.5V12.5H4.5V10.5M2.4 1.7L22.1 21.4L20.8 22.7L20.1 22H4C4 20.9 4.9 20 6 20H18.1L17.1 19H6V11C6 10.1 6.2 9.2 6.6 8.5L1.1 3L2.4 1.7M8 17H15.1L8.1 10C8.1 10.3 8 10.7 8 11V17M13 1H11V4H13V1Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
