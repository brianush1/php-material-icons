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
	?><path d="M20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4M20 18H4V6H20V18M4 0H20V2H4M4 22H20V24H4M12 12C13.38 12 14.5 10.88 14.5 9.5S13.38 7 12 7 9.5 8.12 9.5 9.5 10.62 12 12 12M12 8.5C12.55 8.5 13 8.95 13 9.5S12.55 10.5 12 10.5 11 10.05 11 9.5 11.45 8.5 12 8.5M17 16C17 13.9 13.69 13 12 13S7 13.9 7 16V17H17V16M8.81 15.5C9.42 15 10.84 14.5 12 14.5C13.17 14.5 14.59 15 15.2 15.5H8.81Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
