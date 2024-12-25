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
	?><path d="M3,4H19A2,2 0 0,1 21,6V10.82C20,9.85 18.7,9.23 17.31,9.06L19,8V6L11,11L3,6V8L10.62,12.76C10.21,13.62 10,14.55 10,15.5C10,17.18 10.65,18.79 11.81,20H3A2,2 0 0,1 1,18V6C1,4.89 1.89,4 3,4M16.5,11C19,11 21,13 21,15.5C21,16.38 20.75,17.21 20.31,17.9L23.39,21L22,22.39L18.88,19.32C18.19,19.75 17.37,20 16.5,20C14,20 12,18 12,15.5C12,13 14,11 16.5,11M16.5,13A2.5,2.5 0 0,0 14,15.5A2.5,2.5 0 0,0 16.5,18A2.5,2.5 0 0,0 19,15.5A2.5,2.5 0 0,0 16.5,13Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
