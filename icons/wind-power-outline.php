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
	?><path d="M4 3H10V5H4V3M1 7H6V9H1V7M3 19H8V21H3V19M22.21 18.61L19.93 14.5C19.66 14.03 19.2 13.68 18.67 13.54L16 12.87C15.96 12.4 15.84 11.95 15.61 11.54L19.57 4.95C20.22 3.87 19.87 2.47 18.79 1.82C18.43 1.6 18 1.5 17.62 1.5C17.06 1.5 16.5 1.71 16.06 2.12L12.63 5.33C12.23 5.7 12 6.23 12 6.78V10.18C11.53 10.35 11.11 10.63 10.77 11H3.28C2 11 1 12 1 13.28C1 14.3 1.67 15.19 2.65 15.47L7.16 16.76C7.34 16.81 7.53 16.84 7.71 16.84C8.07 16.84 8.43 16.74 8.74 16.55L11 15.21C11.27 15.47 11.61 15.68 12 15.82V21C10.9 21 10 21.9 10 23H16C16 21.9 15.1 21 14 21V16.72L18.61 21.33C19.06 21.78 19.64 22 20.22 22S21.39 21.78 21.83 21.33C22.55 20.61 22.71 19.5 22.21 18.61M7.72 14.84L3.2 13.55C3.08 13.5 3 13.4 3 13.28C3 13.13 3.13 13 3.28 13H10C10 13.15 10 13.3 10.04 13.44L7.72 14.84M13 14C12.45 14 12 13.55 12 13S12.45 12 13 12 14 12.45 14 13 13.55 14 13 14M14 10.14V6.78L17.43 3.57C17.5 3.5 17.62 3.45 17.77 3.53C17.9 3.61 17.95 3.78 17.87 3.91L14.13 10.15L14 10.14M20.42 19.92C20.37 19.97 20.18 20.08 20 19.92L15.17 15.07C15.25 15 15.33 14.89 15.41 14.79L18.19 15.5L20.47 19.58C20.53 19.69 20.5 19.83 20.42 19.92Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
