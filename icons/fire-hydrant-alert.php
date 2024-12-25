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
	?><path d="M22 7H20V13H22V7M22 15H20V17H22V15M3 15V14H2V12H3V11H5V15H3M17 12V11H15V15H17V14H18V12H17M16 6H13.86C13.5 4.6 12.4 3.5 11 3.14V2H9V3.14C7.6 3.5 6.5 4.6 6.14 6H4V8H16V6M16 22H4C4 20.9 4.89 20 6 20V9H14V20C15.11 20 16 20.9 16 22M8 13C8 14.11 8.9 15 10 15S12 14.11 12 13 11.11 11 10 11 8 11.9 8 13Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
