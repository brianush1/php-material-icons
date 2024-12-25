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
	?><path d="M23,8H17A1,1 0 0,0 16,9V13.18L18,15.18V10H22V17H19.82L22.82,20H23A1,1 0 0,0 24,19V9A1,1 0 0,0 23,8M4,6.27L14.73,17H4V6.27M1.92,1.65L0.65,2.92L2.47,4.74C2.18,5.08 2,5.5 2,6V17H0V20H17.73L20.08,22.35L21.35,21.08L3.89,3.62L1.92,1.65M22,6V4H6.82L8.82,6H22Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
