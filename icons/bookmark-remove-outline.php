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
	?><path d="M7 3C5.9 3 5 3.9 5 5V21L12 18L19 21V5C19 3.89 18.1 3 17 3H7M7 5H17V18L12 15.82L7 18V5M9.88 7.47L8.47 8.88L10.59 11L8.47 13.12L9.88 14.54L12 12.42L14.12 14.53L15.54 13.12L13.42 11L15.53 8.88L14.12 7.47L12 9.59L9.88 7.47Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
