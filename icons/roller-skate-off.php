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
	?><path d="M20.84 22.73L18.95 20.84C18.78 22.06 17.75 23 16.5 23C15.1 23 14 21.88 14 20.5C14 19.24 14.93 18.2 16.14 18.03L15.11 17H3V4.9L1.11 3L2.39 1.73L22.11 21.46L20.84 22.73M9 5H11.5V2H5.2L8.5 5.32C8.59 5.13 8.77 5 9 5M12.56 9.36C12.18 9 11.9 8.5 11.82 8H11.2L12.56 9.36M19.5 12.95C18.55 10.9 15.82 10.56 13.91 10.05C13.45 10.03 13 9.77 12.6 9.4L20 16.79C20 15.45 20.06 13.76 19.5 12.95M9.2 6L10.2 7H11.5V6H9.2M6.5 18C5.1 18 4 19.12 4 20.5C4 21.88 5.1 23 6.5 23S9 21.88 9 20.5C9 19.12 7.86 18 6.5 18Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
