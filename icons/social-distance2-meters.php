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
	?><path d="M6 6C7.1 6 8 5.1 8 4S7.1 2 6 2 4 2.9 4 4 4.9 6 6 6M10 9.43C10 8.62 9.5 7.9 8.78 7.58C7.93 7.21 7 7 6 7S4.07 7.21 3.22 7.58C2.5 7.9 2 8.62 2 9.43V10H10V9.43M18 6C19.1 6 20 5.1 20 4S19.1 2 18 2 16 2.9 16 4 16.9 6 18 6M22 9.43C22 8.62 21.5 7.9 20.78 7.58C19.93 7.21 19 7 18 7S16.07 7.21 15.22 7.58C14.5 7.9 14 8.62 14 9.43V10H22V9.43M19 17V15L5 15V17L2 14L5 11V13L19 13V11L22 14L19 17M9 20.5V21H11V22H8V20.5C8 19.95 8.45 19.5 9 19.5H10V19H8V18H10C10.55 18 11 18.45 11 19V19.5C11 20.05 10.55 20.5 10 20.5H9M16 19V22H15V19H14.5V21H13.5V19H13V22H12V19C12 18.45 12.45 18 13 18H15C15.55 18 16 18.45 16 19Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
