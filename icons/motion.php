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
	?><path d="M7 13H3C2.45 13 2 12.55 2 12S2.45 11 3 11H7C7.55 11 8 11.45 8 12S7.55 13 7 13M6 8C6 7.45 5.55 7 5 7H4C3.45 7 3 7.45 3 8S3.45 9 4 9H5C5.55 9 6 8.55 6 8M22 12C22 14.76 19.76 17 17 17H4C3.45 17 3 16.55 3 16S3.45 15 4 15H13C12.58 14.42 12.25 13.74 12.1 13H10C9.45 13 9 12.55 9 12S9.45 11 10 11H12.1C12.25 10.26 12.58 9.58 13 9H8C7.45 9 7 8.55 7 8S7.45 7 8 7H17C19.76 7 22 9.24 22 12Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
