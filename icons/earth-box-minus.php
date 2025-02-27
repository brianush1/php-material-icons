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
	?><path d="M22 17V19H14V17H22M5 3H19C20.1 3 21 3.89 21 5V12.8C20.39 12.45 19.72 12.2 19 12.08V5H15.78C15.67 6 14.83 6.79 13.8 6.79H11.8V8.79C11.8 9.35 11.35 9.79 10.8 9.79H8.8V11.79H14.8C15.23 11.79 15.6 12.06 15.74 12.44C13.6 13.31 12.07 15.39 12 17.83C10.7 17.79 9.8 16.9 9.8 15.79V14.79L5 10.29V19H12.08C12.2 19.72 12.45 20.39 12.8 21H5C3.9 21 3 20.11 3 19V5C3 3.89 3.89 3 5 3Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
