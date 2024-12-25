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
	?><path d="M20.15 8.26H22V15.74H20.15M13 8.26H18.43C19 8.26 19.3 8.74 19.3 9.3V14.81C19.3 15.5 19 15.74 18.38 15.74H13V11H14.87V13.91H17.5V9.95H13M10.32 8.26H12.14V15.74H10.32M2 8.26H8.55C9.1 8.26 9.41 8.74 9.41 9.3V15.74H7.59V10.15H6.5V15.74H4.87V10.15H3.83V15.74H2Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
