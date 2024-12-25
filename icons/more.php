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
	?><path d="M19,13.5A1.5,1.5 0 0,1 17.5,12A1.5,1.5 0 0,1 19,10.5A1.5,1.5 0 0,1 20.5,12A1.5,1.5 0 0,1 19,13.5M14,13.5A1.5,1.5 0 0,1 12.5,12A1.5,1.5 0 0,1 14,10.5A1.5,1.5 0 0,1 15.5,12A1.5,1.5 0 0,1 14,13.5M9,13.5A1.5,1.5 0 0,1 7.5,12A1.5,1.5 0 0,1 9,10.5A1.5,1.5 0 0,1 10.5,12A1.5,1.5 0 0,1 9,13.5M22,3H7C6.31,3 5.77,3.35 5.41,3.88L0,12L5.41,20.11C5.77,20.64 6.37,21 7.06,21H22A2,2 0 0,0 24,19V5C24,3.89 23.1,3 22,3Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
