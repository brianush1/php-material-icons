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
	?><path d="M11.71 16.81C10.91 17.6 10.88 18.84 11.64 19.58L10.19 21C8.66 19.5 8.72 17.03 10.32 15.46C10.85 14.94 11.5 14.61 12.16 14.42L9 11.34L10.45 9.92L10.82 9.57C11.82 8.59 11.85 7.04 10.9 6.11L9.16 4.42L10.62 3L14.78 7.06C15.54 7.81 15.5 9.05 14.71 9.83L12.53 11.95L16 15.33L15.61 15.72C15.11 16.21 14.38 16.46 13.72 16.28C13.04 16.1 12.26 16.28 11.71 16.81Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
