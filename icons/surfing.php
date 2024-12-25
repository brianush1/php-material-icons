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
	?><path d="M22 23V21C20.59 21.05 19.22 20.9 18 20C16.24 21.25 13.77 21.25 12 20C10.23 21.25 7.76 21.25 6 20C4.78 20.9 3.41 21.05 2 21V23C3.37 23.05 4.78 22.94 6 22.25C7.84 23.25 10.15 23.25 12 22.25C13.85 23.25 16.16 23.25 18 22.25C19.22 22.94 20.63 23.05 22 23M20.5 11.97V9.95C18.74 9.96 17 9 16.18 7.41L15.29 5.86C15 5.4 14.55 5.11 14.07 4.97L8.5 3.94L5 6.38L6.13 8L8.95 6.1L10.97 6.43L8.81 7.88C8.21 8.29 7.88 9 8 9.71L8.53 12.81C7.12 12.26 3.21 11 3 13.23C3.36 15.67 6.07 17.32 8.06 18.82C9.5 19.29 11.06 18.58 12 17.46C13.32 19.16 15.89 19.46 17.5 18C17.03 17.58 16.5 17.15 16 16.8V12.95L12.19 9.95L14.44 8.44C15.62 10.59 18 12 20.5 11.97M14 14V15.47C14 15.43 11.66 14.16 11.81 14.24L10.73 13.7L10.31 11.08L14 14M19 3.5C19 4.61 18.11 5.5 17 5.5S15 4.61 15 3.5 15.9 1.5 17 1.5 19 2.4 19 3.5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
