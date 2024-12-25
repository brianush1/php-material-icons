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
	?><path d="M13 3C16.88 3 20 6.14 20 10C20 12.8 18.37 15.19 16 16.31V21H9V18H8C6.89 18 6 17.11 6 16V13H4.5C4.08 13 3.84 12.5 4.08 12.19L6 9.66C6.19 5.95 9.23 3 13 3M10.32 7.39H12.25C12.26 7.09 12.35 6.86 12.53 6.7C12.71 6.55 12.93 6.47 13.19 6.47C13.5 6.47 13.76 6.57 13.94 6.75C14.12 6.94 14.2 7.2 14.2 7.5C14.2 7.82 14.13 8.09 13.97 8.32C13.83 8.55 13.62 8.75 13.36 8.91C12.85 9.25 12.5 9.55 12.31 9.82C12.11 10.08 12 10.5 12 11H14C14 10.69 14.04 10.44 14.13 10.26C14.22 10.07 14.39 9.9 14.64 9.74C15.09 9.5 15.46 9.21 15.75 8.81C16.04 8.41 16.19 8 16.19 7.5C16.19 6.74 15.92 6.13 15.38 5.68C14.85 5.23 14.12 5 13.19 5C12.32 5 11.62 5.2 11.08 5.59C10.56 6 10.3 6.57 10.31 7.36L10.32 7.39M12 14H14V12H12V14M13 1C8.41 1 4.61 4.42 4.06 8.9L2.5 11L2.47 11L2.45 11.03C1.9 11.79 1.83 12.79 2.26 13.62C2.62 14.31 3.26 14.79 4 14.94V16C4 17.85 5.28 19.42 7 19.87V23H18V17.5C20.5 15.83 22 13.06 22 10C22 5.03 17.96 1 13 1Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
