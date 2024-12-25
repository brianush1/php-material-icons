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
	?><path d="M18.5 12A3.54 3.54 0 0 0 15 15.5C15 18.1 18.5 22 18.5 22S22 18.1 22 15.5A3.54 3.54 0 0 0 18.5 12M18.5 16.8A1.2 1.2 0 1 1 18.5 14.4A1.29 1.29 0 0 1 19.7 15.6A1.15 1.15 0 0 1 18.5 16.8M19 6V5A2 2 0 0 0 17 3H15A2 2 0 0 0 13 5V6H11V5A2 2 0 0 0 9 3H7A2 2 0 0 0 5 5V6H3V20H14.54A15.55 15.55 0 0 1 13.54 18H5V8H19V10A5.11 5.11 0 0 1 21 10.6V6Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
