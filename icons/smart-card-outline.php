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
	?><path d="M22 3H2A2.07 2.07 0 0 0 0 5V19A2.07 2.07 0 0 0 2 21H22A2.07 2.07 0 0 0 24 19V5A2.07 2.07 0 0 0 22 3M22 19H2V5H22M14 17V15.75C14 14.09 10.66 13.25 9 13.25S4 14.09 4 15.75V17H14M9 7A2.5 2.5 0 1 0 11.5 9.5A2.5 2.5 0 0 0 9 7M15 10V13H19V10H15" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
