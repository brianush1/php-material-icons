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
	?><path d="M19.78 13.57L22.55 14.72L21.79 16.57L19 15.42L19.78 13.57M22.57 8.14L21.81 6.29L19.5 7.25L20.26 9.1L22.57 8.14M14.34 19.69L15.3 22L17.15 21.23L16.19 18.93L14.34 19.69M2.39 1.73L1.11 3L3.64 5.53L1.43 10.84L6.97 13.14L11.94 16.82L13.79 17.59L14.35 16.24L20.84 22.73L22.11 21.46L2.39 1.73M6.2 3L6 2.8V1H14V3H11V6.87L15.77 7.58L17.62 8.35L15.84 12.64L9 5.8V3H6.2Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
