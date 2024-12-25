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
	?><path d="M22 2V4C20.26 4 19 8.58 17.96 12.27C16.57 17.27 15.26 22 12 22C8.74 22 7.43 17.27 6.04 12.27C5 8.58 3.74 4 2 4V2C5.26 2 6.57 6.73 7.96 11.73C9 15.42 10.26 20 12 20C13.74 20 15 15.42 16.04 11.73C17.43 6.73 18.74 2 22 2Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
