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
	?><path d="M16 12C16 10.9 16.9 10 18 10S20 10.9 20 12 19.1 14 18 14 16 13.1 16 12M10 12C10 10.9 10.9 10 12 10S14 10.9 14 12 13.1 14 12 14 10 13.1 10 12M4 12C4 10.9 4.9 10 6 10S8 10.9 8 12 7.1 14 6 14 4 13.1 4 12M13 18C13 16.9 13.9 16 15 16S17 16.9 17 18 16.1 20 15 20 13 19.1 13 18M7 18C7 16.9 7.9 16 9 16S11 16.9 11 18 10.1 20 9 20 7 19.1 7 18M13 6C13 4.9 13.9 4 15 4S17 4.9 17 6 16.1 8 15 8 13 7.1 13 6M7 6C7 4.9 7.9 4 9 4S11 4.9 11 6 10.1 8 9 8 7 7.1 7 6" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
