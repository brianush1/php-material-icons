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
	?><path d="M9.96,13.71L12,8.29L14.03,13.72M11.14,6L6.43,18H8.36L9.32,15.43H14.68L15.64,18H17.57L12.86,6H11.14M20,2H4C2.89,2 2,2.89 2,4V20C2,21.11 2.9,22 4,22H20C21.11,22 22,21.11 22,20V4C22,2.89 21.1,2 20,2M20,20H4V4H20V20Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
