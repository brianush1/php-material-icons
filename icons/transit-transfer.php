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
	?><path d="M16.5,15.5H22V17H16.5V18.75L14,16.25L16.5,13.75V15.5M19.5,19.75V18L22,20.5L19.5,23V21.25H14V19.75H19.5M9.5,5.5A2,2 0 0,1 7.5,3.5A2,2 0 0,1 9.5,1.5A2,2 0 0,1 11.5,3.5A2,2 0 0,1 9.5,5.5M5.75,8.9L4,9.65V13H2V8.3L7.25,6.15C7.5,6.05 7.75,6 8,6C8.7,6 9.35,6.35 9.7,6.95L10.65,8.55C11.55,10 13.15,11 15,11V13C12.8,13 10.85,12 9.55,10.4L8.95,13.4L11,15.45V23H9V17L6.85,15L5.1,23H3L5.75,8.9Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
