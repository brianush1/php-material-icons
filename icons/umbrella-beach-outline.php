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
	?><path d="M21 19.57L19.57 21L13.13 14.56L14.56 13.13L21 19.57M13.12 3C10.54 3 7.96 4 6 5.95L5.97 5.96C2 9.91 2 16.32 5.97 20.27L20.27 5.96C18.3 4 15.71 3 13.12 3M6.14 17.27C5.4 16.03 5 14.61 5 13.12C5 12.19 5.16 11.3 5.46 10.45C5.65 12.36 6.35 14.24 7.53 15.89L6.14 17.27M9 14.43C7.63 12.38 7.12 9.93 7.6 7.6C8.18 7.5 8.76 7.42 9.35 7.42C11.15 7.42 12.9 7.97 14.43 9L9 14.43M10.45 5.46C11.3 5.16 12.19 5 13.12 5C14.61 5 16.03 5.4 17.27 6.14L15.88 7.53C14.23 6.35 12.36 5.65 10.45 5.46Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>