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
	?><path d="M19 6V5C19 3.9 18.1 3 17 3H15C13.9 3 13 3.9 13 5V6H11V5C11 3.9 10.1 3 9 3H7C5.9 3 5 3.9 5 5V6H3V20H14V18H5V8H19V13H21V6M17.88 15.46L20 17.59L22.12 15.47L23.54 16.88L21.41 19L23.54 21.12L22.12 22.54L20 20.41L17.88 22.54L16.46 21.12L18.59 19L16.47 16.88" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
