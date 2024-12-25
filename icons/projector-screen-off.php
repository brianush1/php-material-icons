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
	?><path d="M13 14.89V16.59L17.21 20.79L15.79 22.21L13 19.41V22H11V19.41L8.21 22.21L6.79 20.79L11 16.59V14H5V6.89L1.11 3L2.39 1.73L22.11 21.46L20.84 22.73L13 14.89M19 14V5H20C20.55 5 21 4.55 21 4V3C21 2.45 20.55 2 20 2H5.2L17.2 14H19Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
