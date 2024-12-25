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
	?><path d="M20.24 6.76C18.4 4.91 15.65 4.53 13.42 5.59L12.46 4.63C12.07 4.24 11.44 4.24 11.05 4.63L10.97 4.72C10.83 3.75 10 3 9 3C7.9 3 7 3.9 7 5C7 5.09 7 5.18 7.03 5.26C6.42 5.61 6 6.25 6 7C6 7.46 6.16 7.87 6.42 8.21C6.17 8.39 6 8.67 6 9V10.35C3.67 11.17 2 13.39 2 16C2 19.31 4.69 22 8 22S14 19.31 14 16C14 13.39 12.33 11.17 10 10.35V9C10 8.67 9.83 8.39 9.58 8.21C9.84 7.87 10 7.46 10 7C10 6.91 10 6.82 9.97 6.74C10.15 6.64 10.3 6.5 10.43 6.38C11.36 6.88 12 7.86 12 9V9.08C12.13 9.15 12.25 9.25 12.38 9.33C12.57 8.91 12.83 8.5 13.17 8.17C14.73 6.61 17.27 6.61 18.83 8.17C20.39 9.73 20.39 12.27 18.83 13.83C18.03 14.63 17 15 15.93 15C16 15.32 16 15.66 16 16C16 16.34 15.97 16.67 15.93 17C17.5 17 19.05 16.43 20.24 15.24C22.59 12.9 22.59 9.1 20.24 6.76M9 4C9.55 4 10 4.45 10 5C10 5.33 9.83 5.61 9.58 5.79C9.22 5.31 8.65 5 8 5C8 4.45 8.45 4 9 4M7.42 6.21C7.78 6.69 8.35 7 9 7C9 7.55 8.55 8 8 8S7 7.55 7 7C7 6.67 7.17 6.39 7.42 6.21M12 16C12 18.21 10.21 20 8 20S4 18.21 4 16C4 13.79 5.79 12 8 12S12 13.79 12 16Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
