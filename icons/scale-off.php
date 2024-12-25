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
	?><path d="M22.11 21.46L20.84 22.73L19.11 21H18V19.89L12.11 14H11V12.89L10.31 12.2A7.92 7.92 0 0 0 7.09 13.68L8.46 15.06L7.05 16.47L5.68 15.1A7.94 7.94 0 0 0 4.06 19H6V21H2V20A10 10 0 0 1 8.68 10.57L3.85 5.74L2 5V3.89L1.11 3L2.39 1.73M21.91 18.71A10 10 0 0 0 14 10.2V8.2L22 5V3H6.2M12 18A1.84 1.84 0 0 0 11.12 18.21L7.27 20L11.12 21.79A1.84 1.84 0 0 0 12 22A2 2 0 0 0 12 18Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
