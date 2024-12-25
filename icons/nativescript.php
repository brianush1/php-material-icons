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
	?><path d="M7.5,3H16.5C19,3 21,5 21,7.5V16.5C21,19 19,21 16.5,21H7.5C5,21 3,19 3,16.5V7.5C3,5 5,3 7.5,3M6,13.5V16.5A1.5,1.5 0 0,0 7.5,18H9V10.5L15,18H16.5A1.5,1.5 0 0,0 18,16.5V13.5A1.5,1.5 0 0,1 19.5,12A1.5,1.5 0 0,1 18,10.5V7.5A1.5,1.5 0 0,0 16.5,6H15V13.5L9,6H7.5A1.5,1.5 0 0,0 6,7.5V10.5A1.5,1.5 0 0,1 4.5,12A1.5,1.5 0 0,1 6,13.5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
