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
	?><path d="M21 2C22.05 2 22.92 2.81 23 3.85L23 4V16C23 17.05 22.18 17.92 21.15 18L21 18H14V20H16V22H8V20H10V18H3C1.95 18 1.08 17.18 1 16.15L1 16V4C1 2.94 1.81 2.08 2.85 2L3 2H21M21 4H3V16H21V4M12 11C14.21 11 16 11.9 16 13V14H8V13C8 11.9 9.79 11 12 11M12 6C13.11 6 14 6.9 14 8S13.11 10 12 10 10 9.11 10 8 10.9 6 12 6Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
