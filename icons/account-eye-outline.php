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
	?><path d="M10 12C12.21 12 14 10.21 14 8S12.21 4 10 4 6 5.79 6 8 7.79 12 10 12M10 6C11.11 6 12 6.9 12 8S11.11 10 10 10 8 9.11 8 8 8.9 6 10 6M9.27 20H2V17C2 14.33 7.33 13 10 13C11.04 13 12.5 13.21 13.86 13.61C13 13.95 12.2 14.42 11.5 15C11 14.94 10.5 14.9 10 14.9C7.03 14.9 3.9 16.36 3.9 17V18.1H9.22C9.2 18.15 9.17 18.2 9.14 18.25L8.85 19L9.14 19.75C9.18 19.83 9.23 19.91 9.27 20M17 18C17.56 18 18 18.44 18 19S17.56 20 17 20 16 19.56 16 19 16.44 18 17 18M17 15C14.27 15 11.94 16.66 11 19C11.94 21.34 14.27 23 17 23S22.06 21.34 23 19C22.06 16.66 19.73 15 17 15M17 21.5C15.62 21.5 14.5 20.38 14.5 19S15.62 16.5 17 16.5 19.5 17.62 19.5 19 18.38 21.5 17 21.5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
