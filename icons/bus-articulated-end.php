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
	?><path d="M21.5,6L20,7.5L21.5,9L20,10.5L21.5,12L20,13.5L21.5,15H12.5A3,3 0 0,1 9.5,18A3,3 0 0,1 6.5,15H2.5V8C2.5,6.89 3.39,6 4.5,6H21.5M18.5,7.5H15V10H18.5V7.5M13.5,7.5H9.5V10H13.5V7.5M8,7.5H4V10H8V7.5M9.5,13.5A1.5,1.5 0 0,0 8,15A1.5,1.5 0 0,0 9.5,16.5A1.5,1.5 0 0,0 11,15A1.5,1.5 0 0,0 9.5,13.5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
