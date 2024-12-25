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
	?><path d="M6 20H12V21C12 21.55 11.55 22 11 22H7C6.45 22 6 21.55 6 21V20M11 14.89V16H7V13.58C5.23 12.81 4 11.05 4 9C4 6.24 6.24 4 9 4C9.9 4 10.73 4.26 11.46 4.67C12 4.2 12.66 3.81 13.35 3.5C12.16 2.57 10.65 2 9 2C5.13 2 2 5.13 2 9C2 11.38 3.19 13.47 5 14.74V17C5 17.55 5.45 18 6 18H12C12.55 18 13 17.55 13 17V16.32C12.25 15.96 11.57 15.5 11 14.89M20.92 9.94L20.42 8.3L21.72 7.22L20.04 7.18L19.41 5.6L18.85 7.21L17.17 7.32L18.5 8.35L18.1 10L19.5 9.03L20.92 9.94M19.12 12.25C17.79 12.03 16.58 11.24 15.85 9.97C15.12 8.71 15.05 7.25 15.5 5.97C15.64 5.63 15.34 5.29 15 5.34C11.56 6 10 10.13 12.22 12.95C14.03 15.19 17.5 15.27 19.39 13C19.62 12.74 19.47 12.3 19.12 12.25Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
