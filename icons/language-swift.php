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
	?><path d="M17.09,19.72C14.73,21.08 11.5,21.22 8.23,19.82C5.59,18.7 3.4,16.74 2,14.5C2.67,15.05 3.46,15.5 4.3,15.9C7.67,17.47 11.03,17.36 13.4,15.9C10.03,13.31 7.16,9.94 5.03,7.19C4.58,6.74 4.25,6.18 3.91,5.68C12.19,11.73 11.83,13.27 6.32,4.67C11.21,9.61 15.75,12.41 15.75,12.41C15.91,12.5 16,12.57 16.11,12.63C16.21,12.38 16.3,12.12 16.37,11.85C17.16,9 16.26,5.73 14.29,3.04C18.84,5.79 21.54,10.95 20.41,15.28C20.38,15.39 20.35,15.5 20.36,15.67C22.6,18.5 22,21.45 21.71,20.89C20.5,18.5 18.23,19.24 17.09,19.72V19.72Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
