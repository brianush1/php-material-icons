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
	?><path d="M4 3H10V5H4V3M1 7H6V9H1V7M3 19H8V21H3V19M13.73 10.61C14.5 10.84 15.03 11.39 15.3 12.07L19.57 4.96C20.22 3.88 19.87 2.5 18.79 1.83C17.92 1.31 16.8 1.42 16.06 2.12L12.63 5.33C12.23 5.7 12 6.23 12 6.78V10.71C12.36 10.56 13 10.38 13.73 10.61M10.61 12.27C10.77 11.75 11.09 11.31 11.5 11H3.28C2 11 1 12 1 13.28C1 14.3 1.67 15.19 2.65 15.47L7.16 16.76C7.69 16.91 8.26 16.84 8.74 16.55L11.43 14.94C10.66 14.32 10.3 13.27 10.61 12.27M22.21 18.61L19.93 14.5C19.66 14.03 19.2 13.68 18.67 13.54L15.5 12.74C15.5 13.06 15.5 13.4 15.39 13.73C15.07 14.79 14.11 15.5 13 15.5C12.39 15.5 12 15.28 12 15.28V21C10.9 21 10 21.9 10 23H16C16 21.9 15.1 21 14 21V16.72L18.61 21.33C19.5 22.22 20.94 22.22 21.83 21.33C22.55 20.61 22.71 19.5 22.21 18.61M12.56 14.43C13.35 14.67 14.19 14.23 14.43 13.43C14.67 12.64 14.23 11.8 13.43 11.56C12.64 11.32 11.8 11.76 11.56 12.56C11.32 13.35 11.77 14.19 12.56 14.43Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
