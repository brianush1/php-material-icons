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
	?><path d="M13.43,15.15H14.29V16.36H13.43V18H11.92V16.36H8.82L8.75,15.41L11.91,10.42H13.43V15.15M10.25,15.15H11.92V12.47L10.25,15.15M22,21H2C1.64,21 1.31,20.81 1.13,20.5C0.95,20.18 0.96,19.79 1.15,19.5L11.15,3C11.5,2.38 12.5,2.38 12.86,3L22.86,19.5C23.04,19.79 23.05,20.18 22.87,20.5C22.69,20.81 22.36,21 22,21M3.78,19H20.23L12,5.43L3.78,19Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
