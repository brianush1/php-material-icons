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
	?><path d="M3 3C1.9 3 1 3.9 1 5V7H3V5H17V7H19V5C19 3.9 18.1 3 17 3H3M6 7V9H14V7H6M1 9V12C1 17 5 21 10 21S19 17 19 12V9H17V12C17 15.9 13.9 19 10 19S3 15.9 3 12V9H1M10 12C8.6 12 7.5 13.1 7.5 14.5S8.6 17 10 17 12.5 15.9 12.5 14.5 11.4 12 10 12M21 12V7H23V13H21M21 17V15H23V17H21Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
