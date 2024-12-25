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
	?><path d="M22 5V8H2V5H22M22 13V18H2V13H3.5C4.33 13 5 12.33 5 11.5S4.33 10 3.5 10L2 10V9H22V10H20.5C19.67 10 19 10.67 19 11.5S19.67 13 20.5 13H22M13 11C13 10.45 12.55 10 12 10S11 10.45 11 11V13C11 13.55 11.45 14 12 14S13 13.55 13 13V11Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
