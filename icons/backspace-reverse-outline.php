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
	?><path d="M5,15.59L6.41,17L10,13.41L13.59,17L15,15.59L11.41,12L15,8.41L13.59,7L10,10.59L6.41,7L5,8.41L8.59,12L5,15.59M2,3A2,2 0 0,0 0,5V19A2,2 0 0,0 2,21H17C17.69,21 18.23,20.64 18.59,20.11L24,12L18.59,3.88C18.23,3.35 17.69,3 17,3H2M2,5H17L21.72,12L17,19H2V5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
