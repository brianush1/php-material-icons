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
	?><path d="M7,18A4,4 0 0,1 3,14A4,4 0 0,1 7,10A4,4 0 0,1 11,14A4,4 0 0,1 7,18M7,12A2,2 0 0,0 5,14A2,2 0 0,0 7,16A2,2 0 0,0 9,14A2,2 0 0,0 7,12M11,10A4,4 0 0,1 7,6A4,4 0 0,1 11,2A4,4 0 0,1 15,6A4,4 0 0,1 11,10M11,4A2,2 0 0,0 9,6A2,2 0 0,0 11,8A2,2 0 0,0 13,6A2,2 0 0,0 11,4M16.6,21.6C14.39,21.6 12.6,19.81 12.6,17.6A4,4 0 0,1 16.6,13.6C18.81,13.6 20.6,15.39 20.6,17.6A4,4 0 0,1 16.6,21.6M16.6,15.6A2,2 0 0,0 14.6,17.6C14.6,18.7 15.5,19.6 16.6,19.6A2,2 0 0,0 18.6,17.6C18.6,16.5 17.7,15.6 16.6,15.6Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
