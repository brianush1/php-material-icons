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
	?><path d="M20 6C20 3.79 18.21 2 16 2H8C5.78 2 4 3.79 4 6V8H7L4 22H6L7.5 15H11V22H13V15H16.5L18 22H20L17 8H20V6M7.93 13L9 8H11V13H7.93M16.07 13H13V8H15L16.07 13M6 6C6 4.9 6.89 4 8 4H16C17.1 4 18 4.9 18 6H6Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
