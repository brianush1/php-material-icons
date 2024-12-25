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
	?><path d="M15.9 10.12A5 5 0 0 0 13.08 2.12A5.74 5.74 0 0 0 12 2A5 5 0 0 0 7.68 4.5L16.38 13.18A4.35 4.35 0 0 0 16.04 12.77A2 2 0 0 1 15.9 10.12M13 7A1 1 0 1 1 14 6A1 1 0 0 1 13 7M7 6.39L2.39 1.73L1.11 3L7.8 9.69C7.9 9.84 8 10 8.11 10.12A2 2 0 0 1 8 12.72A5.5 5.5 0 0 0 10.81 21.87A5.42 5.42 0 0 0 12 22A5.5 5.5 0 0 0 17 18.86L20.87 22.73L22.14 21.46M11 18A1 1 0 1 1 12 17A1 1 0 0 1 11 18M14 19A1 1 0 1 1 15 18A1 1 0 0 1 14 19M13 16A1 1 0 0 1 12 15A1 1 0 0 1 12.35 14.24L13.76 15.65A1 1 0 0 1 13 16Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
