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
	?><path d="M16.15 14.4L18.71 22.26L12 17.4L5.28 22.3L7.85 14.37L1.15 9.5H9.44L12 1.61L14.56 9.5H22.89L16.15 14.4M13.3 16.47L15.86 18.33L14.88 15.32L13.3 16.47M11 9.5H13L12 6.47L11 9.5M10.74 16.47L9.13 15.3L8.13 18.37L10.74 16.47M18.28 11H15.05L15.67 12.9L18.28 11M10.53 11L9.62 13.8L12 15.54L14.39 13.82L13.47 11H10.53M5.76 11L8.34 12.87L8.95 11H5.76Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
