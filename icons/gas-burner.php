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
	?><path d="M16.14 8.79L16.12 8.8C16.35 9.07 16.55 9.39 16.7 9.72L16.79 9.91C17.5 11.6 17 13.55 15.69 14.77C14.5 15.86 12.84 16.15 11.3 15.95C9.84 15.77 8.5 14.85 7.73 13.58C7.5 13.19 7.3 12.75 7.2 12.3C7.07 11.93 7.03 11.57 7 11.2C6.91 9.6 7.55 7.9 8.76 6.9C8.21 8.11 8.34 9.62 9.15 10.67L9.26 10.8C9.4 10.92 9.57 10.96 9.73 10.89C9.88 10.83 10 10.68 10 10.5L9.93 10.28C9.05 7.96 9.79 5.25 11.66 3.72C12.17 3.3 12.8 2.92 13.46 2.75C12.78 4.11 13 5.89 14.09 6.96C14.55 7.43 15.1 7.74 15.58 8.18L16.14 8.79M13.86 13.43L13.85 13.42C14.3 13.03 14.55 12.36 14.53 11.76L14.5 11.44C14.3 10.44 13.43 10.11 12.87 9.38C12.7 9.16 12.55 8.88 12.44 8.6C12.22 9.1 12.2 9.57 12.29 10.11C12.39 10.68 12.62 11.17 12.5 11.76C12.34 12.41 11.83 13.06 10.94 13.27C11.44 13.76 12.25 14.15 13.06 13.87C13.32 13.8 13.65 13.61 13.86 13.43M11 18V19C11 19.55 11.45 20 12 20C12.55 20 13 19.55 13 19V18H15V19C15 19.55 15.45 20 16 20C16.55 20 17 19.55 17 19V18C18.11 18 20 18.9 20 20V22H4V20C4 18.9 5.9 18 7 18V19C7 19.55 7.45 20 8 20C8.55 20 9 19.55 9 19V18H11Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
