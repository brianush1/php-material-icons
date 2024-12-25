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
	?><path d="M19 15H17V13H19M20 20V22H16V20H17V18H16V16H19V20M18.92 5A1.5 1.5 0 0 0 17.5 4H6.5A1.5 1.5 0 0 0 5.08 5L3 11V19A1 1 0 0 0 4 20H5A1 1 0 0 0 6 19V18H11A7 7 0 0 1 18 11A6.84 6.84 0 0 1 21 11.68V11M6.5 15A1.5 1.5 0 1 1 8 13.5A1.5 1.5 0 0 1 6.5 15M5 10L6.5 5.5H17.5L19 10Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
