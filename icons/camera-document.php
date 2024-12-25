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
	?><path d="M21 7V22H3V20H19V7H14.72C14.38 7.6 13.74 8 13 8C13 9.11 12.1 10 11 10H8C6.9 10 6 9.1 6 8V4C6 2.9 6.9 2 8 2H11C12.1 2 13 2.9 13 4C13.74 4 14.38 4.41 14.72 5H19C20.11 5 21 5.89 21 7M6 15H13L11 11H8L6 15Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
