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
	?><path d="M9,2C5.14,2 2,5.14 2,9C2,14.25 9,22 9,22C9,22 16,14.25 16,9A7,7 0 0,0 9,2M9,6.5A2.5,2.5 0 0,1 11.5,9A2.5,2.5 0 0,1 9,11.5A2.5,2.5 0 0,1 6.5,9A2.5,2.5 0 0,1 9,6.5M16.58,14.16L15.17,15.58L17.58,18L15.17,20.41L16.58,21.82L19,19.41L21.41,21.82L22.83,20.41L20.41,18L22.83,15.58L21.41,14.16L19,16.58" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
