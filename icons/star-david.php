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
	?><path d="M12,2L9.1,7H3.3L6.3,12L3.3,17H9.1L12,22L14.9,17H20.7L17.7,12L20.7,7H14.9L12,2M12,5L13.2,7H10.8L12,5M8.2,8.5L7.1,10.5L5.9,8.5H8.2M10,8.5H14L16,12L14,15.5H10L8,12L10,8.5M18,8.5L16.8,10.5L15.7,8.5H18M7.1,13.5L8.2,15.5H6L7.1,13.5M16.9,13.5L18.1,15.5H15.8L16.9,13.5M13.3,17L12,19L10.8,17H13.3Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
