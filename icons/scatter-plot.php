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
	?><path d="M7,11A3,3 0 0,1 10,14A3,3 0 0,1 7,17A3,3 0 0,1 4,14A3,3 0 0,1 7,11M11,3A3,3 0 0,1 14,6A3,3 0 0,1 11,9A3,3 0 0,1 8,6A3,3 0 0,1 11,3M16.6,14.6C18.25,14.6 19.6,15.94 19.6,17.6A3,3 0 0,1 16.6,20.6C14.94,20.6 13.6,19.25 13.6,17.6A3,3 0 0,1 16.6,14.6Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
