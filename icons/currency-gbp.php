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
	?><path d="M14 21C15.93 21 17.62 19.83 18 18L16.25 17.12C16 18.21 15.33 19 14 19H9.1C9.93 18 10.6 16.66 10.6 15C10.6 14.65 10.57 14.31 10.5 14H14V12H9.82C9 10.42 8 9.6 8 8C8 6.07 9.57 4.5 11.5 4.5C13 4.5 14.29 5.45 14.78 6.78L16.63 6C15.83 3.95 13.84 2.5 11.5 2.5C8.46 2.5 6 4.96 6 8C6 9.78 6.79 10.9 7.5 12H6V14H8.47C8.55 14.31 8.6 14.64 8.6 15C8.6 17.7 6 19 6 19V21H14Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
