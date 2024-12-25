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
	?><path d="M15 11.8L10.2 7H15V11.8M16 6V2C16 1.45 15.55 1 15 1H8C7.45 1 7 1.45 7 2V3.8L9.2 6H16M2.39 1.73L1.11 3L8 9.89V17H15.11L20.84 22.73L22.11 21.46L2.39 1.73M7 22C7 22.55 7.45 23 8 23H15C15.55 23 16 22.55 16 22V18H7V22Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
