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
	?><path d="M17 2V4H12C10.9 4 10 4.89 10 6V9H12V6H17V8L20 5L17 2M17 9V11H6.73C6.37 10.38 5.71 10 5 10C3.9 10 3 10.9 3 12S3.9 14 5 14C5.71 14 6.37 13.62 6.73 13H17V15L20 12L17 9M10 15V18C10 19.11 10.9 20 12 20H17V22L20 19L17 16V18H12V15H10Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
