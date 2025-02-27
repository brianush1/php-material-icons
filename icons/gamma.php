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
	?><path d="M11.76 19C12.92 19 13.58 18 13.58 16.29C13.58 15.2 13.5 13.88 13.3 12.67L18 5H15.28L12.71 9.82L12.55 9.33C11.83 7.19 10.82 5 8.68 5C8 5 7.45 5.18 7 5.54C6 6.39 6 8 6 8.5H6.91C6.97 8.06 7.21 6.83 8.25 6.83C10 6.83 10.8 10 11.4 12.42C10.5 14.58 10 16.14 10 16.97C10 17.95 10.56 19 11.76 19" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
