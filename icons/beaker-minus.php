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
	?><path d="M23 17V19H15V17H23M3 3H21V5C19.9 5 19 5.9 19 7V12C15.69 12 13 14.69 13 18C13 19.09 13.29 20.12 13.8 21H7C5.9 21 5 20.1 5 19V7C5 5.9 4.1 5 3 5V3M7 9V10H10V9H7M7 11V12H10V11H7M10 16V15H7V16H10M12 14V13H7V14H12M12 8V7H7V8H12Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
