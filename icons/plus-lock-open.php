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
	?><path d="M11 5V11H5V13H11V19H13V13H19V11H13V5H11M19 15C17.95 15 16.9 15.8 16.9 16.82V18.64C16.45 18.64 16 19.07 16 19.5V22.05C16 22.56 16.45 23 16.9 23H21.03C21.55 23 22 22.56 22 22.13V19.58C22 19.07 21.55 18.64 21.1 18.64H17.88V16.82C17.88 16.24 18.4 15.87 19 15.87S20.13 16.24 20.13 16.82V17.18H21.1V16.82C21.1 15.8 20.05 15 19 15Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
