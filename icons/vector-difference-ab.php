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
	?><path d="M3,1C1.89,1 1,1.89 1,3V5H3V3H5V1H3M7,1V3H10V1H7M12,1V3H14V5H16V3C16,1.89 15.11,1 14,1H12M1,7V10H3V7H1M14,7C14,7 14,11.67 14,14C11.67,14 7,14 7,14C7,14 7,18 7,20C7,21.11 7.89,22 9,22H20C21.11,22 22,21.11 22,20V9C22,7.89 21.11,7 20,7C18,7 14,7 14,7M16,9H20V20H9V16H14C15.11,16 16,15.11 16,14V9M1,12V14C1,15.11 1.89,16 3,16H5V14H3V12H1Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
