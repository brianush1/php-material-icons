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
	?><path d="M4,4V10L4,14H6V10H8L13.41,15.41L9.83,19L11.24,20.41L14.83,16.83L18.41,20.41L19.82,19L16.24,15.41L19.82,11.83L18.41,10.41L14.83,14L10.83,10H11A3,3 0 0,0 14,7A3,3 0 0,0 11,4H4M6,6H11A1,1 0 0,1 12,7A1,1 0 0,1 11,8H6V6Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
