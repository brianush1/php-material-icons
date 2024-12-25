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
	?><path d="M14 1H10C5 1 5 3 5 3V15C5 15 5 17 10 17V19H11V20C11 21.21 11.8 23 14 23H18V21H14C13.19 21 13 20.45 13 20V19H14V17C19 17 19 15 19 15V3C19 3 19 1 14 1M17 12H14V11H17V12M17 5H14V6H17V8H14V9H17V10H7V3.5C7.3 3.32 8.13 3 10 3H14C15.88 3 16.7 3.32 17 3.5V5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
