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
	?><path d="M23 17V19H15V17M3 3H21V5C19.9 5 19 5.9 19 7V12C18.3 12 17.63 12.12 17 12.34V5H7V7H12V8H7V9H10V10H7V11H10V12H7V13H12V14H7V15H10V16H7V19H13.08C13.2 19.72 13.45 20.39 13.8 21H7C5.9 21 5 20.11 5 19V7C5 5.9 4.11 5 3 5V3Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
