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
	?><path d="M9.25 7.5L7.73 6.63C8.26 5.7 9.03 5 9.94 4.69C9.8 4.29 9.44 4 9 4V2C10.54 2 11.79 3.16 11.97 4.65C12.91 4.94 13.72 5.66 14.27 6.63L12.75 7.5L11 6.5L9.25 7.5M14 8.28L12.75 9L11 8L9.25 9L8 8.28C7.4 8.63 7 9.27 7 10V11C7 20 15 22 15 22V10C15 9.27 14.6 8.63 14 8.28M17 7V13H19V7H17M17 17H19V15H17V17Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
