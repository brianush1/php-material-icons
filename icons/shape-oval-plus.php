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
	?><path d="M19 5H22V7H19V10H17V7H14V5H17V2H19V5M11 4L12 4.09V6.14C11.68 6.05 11.34 6 11 6C8.24 6 6 9.13 6 13C6 16.87 8.24 20 11 20C13.76 20 16 16.87 16 13L15.95 12H17.96L18 13C18 17.97 14.87 22 11 22C7.13 22 4 17.97 4 13C4 8.03 7.13 4 11 4Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
