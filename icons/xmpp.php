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
	?><path d="M12,15.4C9.75,13.09 8,9.54 8,6C2,4 8,6 2,4C2,9.65 6.33,14.11 10.55,16.66C9.38,17.5 8.15,18 7,18C7,19 7,18 7,19C8.2,19 10.03,18.46 12,17.46C13.97,18.46 15.8,19 17,19C17,18 17,19 17,18C15.85,18 14.62,17.5 13.45,16.66C17.66,14.11 22,9.65 22,4C16,6 22,4 16,6C16,9.54 14.25,13.09 12,15.4Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
