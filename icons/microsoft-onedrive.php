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
	?><path d="M18.21 10.29Q19 10.34 19.7 10.68 20.39 11 20.9 11.57 21.41 12.12 21.71 12.83 22 13.54 22 14.34 22 15.18 21.68 15.92 21.36 16.66 20.8 17.21 20.25 17.76 19.5 18.08 18.78 18.41 17.94 18.41H7Q5.97 18.41 5.06 18 4.15 17.61 3.47 16.94 2.79 16.26 2.4 15.35 2 14.44 2 13.41 2 12.59 2.26 11.83 2.5 11.08 3 10.45 3.44 9.82 4.08 9.35 4.72 8.88 5.5 8.63 5.87 8.5 6.21 8.5 6.56 8.43 6.93 8.41H6.94Q7.37 7.75 7.95 7.23 8.5 6.71 9.2 6.34 9.87 6 10.62 5.78 11.37 5.59 12.16 5.59 13.22 5.59 14.2 5.94 15.18 6.29 16 6.91 16.8 7.53 17.37 8.39 17.95 9.26 18.21 10.29M12.16 6.84Q11.05 6.84 10.06 7.3 9.06 7.75 8.36 8.6 8.73 8.7 9.07 8.85 9.4 9 9.73 9.2L13.71 11.58L16 10.62Q16.21 10.53 16.44 10.45 16.67 10.38 16.92 10.33 16.68 9.55 16.21 8.91 15.74 8.27 15.11 7.81 14.5 7.35 13.73 7.1 13 6.84 12.16 6.84M4 15.66L12.27 12.18L9.08 10.26Q8.59 9.97 8.06 9.81 7.5 9.66 6.95 9.66 6.19 9.66 5.5 9.96 4.84 10.26 4.34 10.77 3.84 11.29 3.54 11.97 3.25 12.65 3.25 13.41 3.25 14 3.45 14.59 3.64 15.19 4 15.66M17.94 17.16Q18.41 17.16 18.84 17 19.27 16.86 19.64 16.58L13.61 13L5.03 16.59Q5.47 16.86 5.97 17 6.47 17.16 7 17.16M20.45 15.61Q20.75 15 20.75 14.34 20.75 13.7 20.5 13.17 20.26 12.65 19.85 12.28 19.43 11.91 18.88 11.71 18.32 11.5 17.7 11.5 17.35 11.5 17 11.6 16.66 11.68 16.33 11.81 16 11.93 15.67 12.08 15.35 12.23 15.04 12.37Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
