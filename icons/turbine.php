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
	?><path d="M12 2H12C6.47 2 2 6.5 2 12C2 17.5 6.5 22 12 22S22 17.5 22 12 17.5 2 12 2M12 20C7.58 20 4 16.42 4 12S7.58 4 12 4 20 7.58 20 12 16.42 20 12 20M17.21 12.55L15.86 12.19L17.3 11.81L19.23 11.29C18.95 10.22 17.85 9.59 16.79 9.87L15.44 10.23L16.5 9.18L17.91 7.77C17.13 7 15.86 7 15.08 7.76L15.08 7.77L14.1 8.75L14.5 7.31L15 5.38C13.93 5.09 12.84 5.72 12.55 6.79L12.19 8.14L11.81 6.7L11.29 4.77C10.22 5.05 9.59 6.15 9.87 7.22L10.23 8.56L9.18 7.5L7.77 6.09C7 6.87 7 8.14 7.76 8.92L7.77 8.92L8.75 9.9L7.31 9.5L5.38 9C5.09 10.07 5.72 11.16 6.79 11.45L8.14 11.81L6.7 12.2L4.77 12.71C5.05 13.78 6.15 14.41 7.22 14.13L8.56 13.77L7.5 14.82L6.09 16.23C6.87 17 8.14 17 8.92 16.24L8.92 16.23L9.9 15.25L9.5 16.69L9 18.62C10.07 18.91 11.16 18.28 11.45 17.21L11.81 15.86L12.2 17.3L12.71 19.23C13.78 18.95 14.41 17.85 14.13 16.79L13.77 15.44L14.82 16.5L16.24 17.91C17 17.13 17 15.86 16.24 15.08L16.24 15.08L15.25 14.1L16.69 14.5L18.62 15C18.91 13.93 18.28 12.84 17.21 12.55M12 13.5C11.17 13.5 10.5 12.83 10.5 12S11.17 10.5 12 10.5 13.5 11.17 13.5 12 12.83 13.5 12 13.5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
