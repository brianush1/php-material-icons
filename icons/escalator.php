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
	?><path d="M20,8H18.95L6.95,20H4A2,2 0 0,1 2,18A2,2 0 0,1 4,16H5.29L7,14.29V10A1,1 0 0,1 8,9H9A1,1 0 0,1 10,10V11.29L17.29,4H20A2,2 0 0,1 22,6A2,2 0 0,1 20,8M8.5,5A1.5,1.5 0 0,1 10,6.5A1.5,1.5 0 0,1 8.5,8A1.5,1.5 0 0,1 7,6.5A1.5,1.5 0 0,1 8.5,5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
