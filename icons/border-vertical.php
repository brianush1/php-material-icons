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
	?><path d="M15,13H17V11H15M15,21H17V19H15M15,5H17V3H15M19,9H21V7H19M19,5H21V3H19M19,13H21V11H19M19,21H21V19H19M11,21H13V3H11M19,17H21V15H19M7,5H9V3H7M3,17H5V15H3M3,21H5V19H3M3,13H5V11H3M7,13H9V11H7M7,21H9V19H7M3,5H5V3H3M3,9H5V7H3V9Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
