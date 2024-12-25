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
	?><path d="M20.8 22.7L18.1 20H3V13H2V11H3C3 9.9 3.9 9 5 9H7.1L1.1 3L2.4 1.7L22.1 21.4L20.8 22.7M15.3 12.1C15.6 11.5 16.3 11 17 11C18.1 11 19 11.9 19 13C19 13.8 18.6 14.4 17.9 14.7L21 17.8V13H22V11H21C21 9.9 20.1 9 19 9H12.2L15.3 12.1M18 8C17.6 5.8 15.1 4 12 4C10.6 4 9.2 4.4 8.2 5L11.2 8H18Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
