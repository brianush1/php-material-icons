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
	?><path d="M18 14L18.79 14.1L18.77 14.33L19.24 14.5L19.39 14.34C19.89 14.6 20.32 15 20.6 15.5L20.43 15.67L20.63 16.12L20.86 16.1C20.95 16.39 21 16.69 21 17L20.9 17.78L20.66 17.77L20.47 18.24L20.66 18.39C20.39 18.9 20 19.32 19.5 19.6L19.33 19.42L18.87 19.62L18.89 19.86C18.61 19.95 18.31 20 18 20L17.21 19.9L17.22 19.65L16.76 19.47L16.6 19.66C16.1 19.39 15.67 19 15.39 18.5L15.57 18.32L15.37 17.86L15.13 17.88C15.05 17.6 15 17.31 15 17L15.11 16.2L15.34 16.21L15.53 15.75L15.35 15.6C15.62 15.09 16 14.68 16.5 14.39L16.67 14.56L17.13 14.36L17.11 14.14C17.39 14.05 17.69 14 18 14M18 15.5C17.17 15.5 16.5 16.17 16.5 17C16.5 17.83 17.17 18.5 18 18.5C18.83 18.5 19.5 17.83 19.5 17C19.5 16.17 18.83 15.5 18 15.5M6 14L6.79 14.1L6.77 14.33L7.24 14.5L7.39 14.34C7.89 14.6 8.32 15 8.6 15.5L8.43 15.67L8.63 16.12L8.86 16.1C8.95 16.39 9 16.69 9 17L8.9 17.78L8.65 17.77L8.47 18.24L8.66 18.39C8.39 18.9 8 19.32 7.5 19.6L7.33 19.42L6.87 19.62L6.89 19.86C6.61 19.95 6.31 20 6 20L5.21 19.9L5.22 19.65L4.76 19.47L4.6 19.66C4.1 19.39 3.67 19 3.39 18.5L3.57 18.32L3.37 17.86L3.13 17.88C3.05 17.6 3 17.31 3 17L3.11 16.2L3.34 16.21L3.53 15.75L3.35 15.6C3.62 15.09 4 14.68 4.5 14.39L4.67 14.56L5.13 14.36L5.11 14.14C5.39 14.05 5.69 14 6 14M6 15.5C5.17 15.5 4.5 16.17 4.5 17C4.5 17.83 5.17 18.5 6 18.5C6.83 18.5 7.5 17.83 7.5 17C7.5 16.17 6.83 15.5 6 15.5M16 6L19 10H21C22.11 10 23 10.89 23 12V15H21C21 13.34 19.66 12 18 12C16.34 12 15 13.34 15 15H9C9 13.34 7.66 12 6 12C4.34 12 3 13.34 3 15H1V10H10.5V6L16 6M12 7.5V10H17.46L15.5 7.5H12Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
