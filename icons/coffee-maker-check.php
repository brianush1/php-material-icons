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
	?><path d="M17.75 21.16L15 18.16L16.16 17L17.75 18.59L21.34 15L22.5 16.41L17.75 21.16M13 18C13 15.78 14.21 13.85 16 12.81V11H6V16C6 17.64 6.81 19.09 8.03 20H4V4H6V6C6 6.55 6.45 7 7 7H15C15.55 7 16 6.55 16 6V4H18V2H4C2.9 2 2 2.9 2 4V20C2 21.1 2.9 22 4 22H14.54C13.58 20.94 13 19.54 13 18M10 9C10 9.55 10.45 10 11 10S12 9.55 12 9 11.55 8 11 8 10 8.45 10 9Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
