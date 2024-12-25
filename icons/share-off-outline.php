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
	?><path d="M22.1 21.5L2.4 1.7L1.1 3L8.9 10.8C5.4 12.9 3.7 16.4 3 20C5.3 16.7 8.6 15.1 13 14.9L14 15.9V19L15.6 17.4L20.8 22.7M8.3 13.8C8.94 13.22 9.65 12.71 10.4 12.3L11.3 13.1M14.2 11L12.5 9.3L14 9V5L21 12L18.1 14.9L16.7 13.5L18.2 12L16 9.8V10.7" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
