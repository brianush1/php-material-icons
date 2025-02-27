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
	?><path d="M12.5 21C12.18 20.23 12 19.39 12 18.5C12 18.33 12 18.17 12.03 18H5L8.5 13.5L11 16.5L14.5 12L15.19 12.92C16.16 12.34 17.29 12 18.5 12C19.39 12 20.23 12.18 21 12.5V5C21 4.47 20.79 3.96 20.41 3.59C20.04 3.21 19.53 3 19 3H5C3.9 3 3 3.9 3 5V19C3 19.53 3.21 20.04 3.59 20.41C3.96 20.79 4.47 21 5 21H12.5M17.75 22L15 19L16.16 17.84L17.75 19.43L21.34 15.84L22.5 17.25L17.75 22Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
