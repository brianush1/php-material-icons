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
	?><path d="M3,13A9,9 0 0,0 12,22A9,9 0 0,0 3,13M5.44,15.44C7.35,16.15 8.85,17.65 9.56,19.56C7.65,18.85 6.15,17.35 5.44,15.44M12,22A9,9 0 0,0 21,13A9,9 0 0,0 12,22M14.42,19.57C15.11,17.64 16.64,16.11 18.57,15.42C17.86,17.34 16.34,18.86 14.42,19.57M12,14A6,6 0 0,0 18,8V3C17.26,3 16.53,3.12 15.84,3.39C15.29,3.62 14.8,3.96 14.39,4.39L12,2L9.61,4.39C9.2,3.96 8.71,3.62 8.16,3.39C7.47,3.12 6.74,3 6,3V8A6,6 0 0,0 12,14M8,5.61L9.57,7.26L12,4.83L14.43,7.26L16,5.61V8A4,4 0 0,1 12,12A4,4 0 0,1 8,8V5.61Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
