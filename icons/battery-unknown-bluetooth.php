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
	?><path d="M5,2V4H3.33A1.33,1.33 0 0,0 2,5.33V20.66C2,21.4 2.6,22 3.33,22H12.67C13.4,22 14,21.4 14,20.66V5.33C14,4.59 13.4,4 12.67,4H11V2H5M8,6A4,4 0 0,1 12,10C12,10.88 11.64,11.68 11.07,12.25L10.17,13.17C9.63,13.71 9.25,14.18 9.09,15H7.05C7.16,14.1 7.56,13.28 8.17,12.67L9.41,11.41C9.78,11.05 10,10.55 10,10C10,8.89 9.1,8 8,8A2,2 0 0,0 6,10H4A4,4 0 0,1 8,6M19,8V11.79L16.71,9.5L16,10.21L18.79,13L16,15.79L16.71,16.5L19,14.21V18H19.5L22.35,15.14L20.21,13L22.35,10.85L19.5,8H19M20,9.91L20.94,10.85L20,11.79V9.91M20,14.21L20.94,15.14L20,16.08V14.21M7,17H9V19H7V17Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
