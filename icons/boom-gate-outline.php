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
	?><path d="M20,9H8.22C7.11,7.77 5.21,7.68 4,8.8C3.36,9.36 3,10.16 3,11V20A1,1 0 0,0 2,21V22H10V21A1,1 0 0,0 9,20V13H20A2,2 0 0,0 22,11A2,2 0 0,0 20,9M7.5,20H4.5V13.6C5.43,14.14 6.57,14.14 7.5,13.6V20M6,12.5A1.5,1.5 0 0,1 4.5,11A1.5,1.5 0 0,1 6,9.5A1.5,1.5 0 0,1 7.5,11A1.5,1.5 0 0,1 6,12.5M10.5,12L9,10H10.5L12,12H10.5M14.5,12L13,10H14.5L16,12H14.5M18.5,12L17,10H18.5L20,12H18.5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
