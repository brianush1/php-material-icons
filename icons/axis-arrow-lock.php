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
	?><path d="M21.8,5C22.4,5 23,5.6 23,6.3V9.8C23,10.4 22.4,11 21.7,11H16.2C15.6,11 15,10.4 15,9.7V6.2C15,5.6 15.6,5 16.2,5V3.5C16.2,2.1 17.6,1 19,1C20.4,1 21.8,2.1 21.8,3.5V5M20.5,5V3.5C20.5,2.7 19.8,2.2 19,2.2C18.2,2.2 17.5,2.7 17.5,3.5V5H20.5M1.74,19.25L3.21,13.79L4.68,16.34L9,13.85V6H6L10,2L14,6H11V13.85L18.03,17.86L19.5,15.28L21,20.74L15.5,22.21L17.03,19.6L10,15.58L5.68,18.07L7.21,20.71L1.74,19.25Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>