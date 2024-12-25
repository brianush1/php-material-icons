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
	?><path d="M11 12L8 8H2V22H22L16 14L11 12M12.53 14.77L6 16.95L4 16.28V14.39L6 15.06L9.95 13.74L12.53 14.77M7 10L8.57 12.09L6 12.95L4 12.28V10H7M4 20V18.39L6 19.06L15.03 16.05L18 20H4M17 6V1L12 0L9 2V6L12 8L17 6M11 3.07L12.42 2.12L15 2.64V4.65L12.23 5.76L11 4.93V3.07M18.5 7L16 9V12L18.5 14L23 12V8L18.5 7M21 10.7L18.8 11.68L18 11.04V9.96L19 9.16L21 9.6V10.7Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
