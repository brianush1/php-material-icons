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
	?><path d="M20,16V18H13V15.91C16,15.36 17.96,12.5 17.41,9.5C16.86,6.5 14,4.54 11,5.09C8,5.65 6.04,8.5 6.59,11.5C7,13.74 8.76,15.5 11,15.91V18H4V16H6.92C5.37,14.59 4.5,12.59 4.5,10.5A7.5,7.5 0 0,1 12,3A7.5,7.5 0 0,1 19.5,10.5C19.5,12.59 18.63,14.59 17.08,16H20M20,19H4V21H20V19Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
