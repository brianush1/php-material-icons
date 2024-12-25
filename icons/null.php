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
	?><path d="M12,2C13.85,2 15.55,2.78 16.9,4.1L18.6,1.93L20.18,3.16L18.2,5.68C19.33,7.41 20,9.6 20,12C20,17.5 16.42,22 12,22C10.15,22 8.45,21.22 7.1,19.9L5.4,22.07L3.82,20.84L5.8,18.32C4.67,16.59 4,14.4 4,12C4,6.5 7.58,2 12,2M12,4C8.69,4 6,7.58 6,12C6,13.73 6.41,15.33 7.11,16.64L15.67,5.67C14.66,4.62 13.38,4 12,4M12,20C15.31,20 18,16.42 18,12C18,10.27 17.59,8.67 16.89,7.36L8.33,18.33C9.34,19.38 10.62,20 12,20Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
