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
	?><path d="M18,1.83C17.5,1.83 17,2 16.59,2.41C13.72,5.28 8,11 8,11L9.5,12.5L6,16H4L2,20L4,22L8,20V18L11.5,14.5L13,16C13,16 18.72,10.28 21.59,7.41C22.21,6.5 22.37,5.37 21.59,4.59L19.41,2.41C19,2 18.5,1.83 18,1.83M18,4L20,6L13,13L11,11L18,4Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
