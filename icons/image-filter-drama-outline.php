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
	?><path d="M6.5 20Q4.2 20 2.6 18.4T1 14.5Q1 12.55 2.21 11.06 3.43 9.57 5.25 9.15 5.88 6.9 7.73 5.45 9.57 4 12 4 15 4 17 6.06 19 8.13 19 11 20.88 11.2 21.94 12.55 23 13.9 23 15.5 23 17.35 21.69 18.68 20.38 20 18.5 20M6.5 18H18.5Q19.55 18 20.27 17.27 21 16.55 21 15.5 21 14.45 20.27 13.73 19.55 13 18.5 13H17V11Q17 8.93 15.54 7.46 14.08 6 12 6 10.43 6 9.2 6.86 8 7.73 7.4 9.07 9.35 9.4 10.68 10.91 12 12.43 12 14.5H10Q10 13.05 9 12.03 7.95 11 6.5 11 5.05 11 4.03 12.03 3 13.05 3 14.5 3 15.95 4.03 17 5.05 18 6.5 18Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
