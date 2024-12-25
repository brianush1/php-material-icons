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
	?><path d="M17 22V20H20V17H22V20.5C22 20.9 21.8 21.2 21.5 21.5C21.2 21.8 20.8 22 20.5 22H17M7 22H3.5C3.1 22 2.8 21.8 2.5 21.5C2.2 21.2 2 20.8 2 20.5V17H4V20H7V22M17 2H20.5C20.9 2 21.2 2.2 21.5 2.5C21.8 2.8 22 3.1 22 3.5V7H20V4H17V2M7 2V4H4V7H2V3.5C2 3.1 2.2 2.8 2.5 2.5S3.1 2 3.5 2H7M19 11H5V13H19V11Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
