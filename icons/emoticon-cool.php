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
	?><path d="M3.22,7.22C4.91,4.11 8.21,2 12,2C15.79,2 19.09,4.11 20.78,7.22L20,8H4L3.22,7.22M21.4,8.6C21.78,9.67 22,10.81 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12C2,10.81 2.22,9.67 2.6,8.6L4,10H5C5,11.38 7.12,12.5 8.5,12.5C9.88,12.5 11.25,11.38 11.25,10H12.75C12.75,11.38 14.12,12.5 15.5,12.5C16.88,12.5 19,11.38 19,10H20L21.4,8.6M16.19,15.42L14.77,14C14.32,14.72 13.25,15.23 12,15.23C10.75,15.23 9.68,14.72 9.23,14L7.81,15.42C8.71,16.5 10.25,17.23 12,17.23C13.75,17.23 15.29,16.5 16.19,15.42Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
