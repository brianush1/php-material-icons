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
	?><path d="M2 2H6V0H2C.9 0 0 .9 0 2V6H2V2M22 0H18V2H22V6H24V2C24 .9 23.1 0 22 0M2 18H0V22C0 23.1 .9 24 2 24H6V22H2V18M22 22H18V24H22C23.1 24 24 23.1 24 22V18H22V22M8 6V4H10V6H8M10 14V12H12V14H10M16 4H18V6H16V4M18 6H20V8H18V6M18 14H20V16H18V14M20 12H16V18H20V20H4V4H6V6H8V10H6V12H8V14H10V16H12V18H14V16H12V14H14V10H10V6H12V4H14V8H16V10H20V12M8 18V16H6V18H8Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
