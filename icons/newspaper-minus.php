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
	?><path d="M22,17V19H14V17H22M20,11V8H4V11H20M13,13V14.68C12.37,15.63 12,16.77 12,18C12,19.09 12.29,20.12 12.8,21H4A2,2 0 0,1 2,19V3L3.67,4.67L5.33,3L7,4.67L8.67,3L10.33,4.67L12,3L13.67,4.67L15.33,3L17,4.67L18.67,3L20.33,4.67L22,3V13.5C20.93,12.58 19.53,12 18,12C16.77,12 15.63,12.37 14.68,13H13M11,19V13H4V19H11Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
