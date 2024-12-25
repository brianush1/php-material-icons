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
	?><path d="M15,13C14.3,13 13.61,13.19 13,13.55V6A3,3 0 0,0 10,3C9.25,3 8.55,3.29 8,3.78C7.45,3.28 6.74,3 6,3V5A1,1 0 0,1 7,6V16H9V6A1,1 0 0,1 10,5A1,1 0 0,1 11,6V17A2,2 0 0,1 9,19V21C10.15,21 11.25,20.5 12,19.62C13.45,21.29 15.97,21.47 17.64,20C19.31,18.58 19.5,16.05 18.04,14.38C17.28,13.5 16.17,13 15,13M15,19A2,2 0 0,1 13,17A2,2 0 0,1 15,15A2,2 0 0,1 17,17A2,2 0 0,1 15,19Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
