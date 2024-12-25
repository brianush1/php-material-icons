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
	?><path d="M20 8H22V6L20 4H3A2 2 0 0 0 1 6V15A2 2 0 0 0 3 17H4A3 3 0 0 0 7 20A3 3 0 0 0 10 17H15A3 3 0 0 0 21 17H23V12M7 18.5A1.5 1.5 0 0 1 7 15.5A1.5 1.5 0 0 1 7 18.5M9 12H3V9H9M14 15H11V9H14M18 18.5A1.5 1.5 0 1 1 19.5 17A1.54 1.54 0 0 1 18 18.5M17 12V9.5H19.5L21.5 12Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
