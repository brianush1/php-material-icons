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
	?><path d="M10.25 15.15L11.92 12.47V15.15H10.25M21.92 21H2.08C1.24 21 .72 20.08 1.16 19.36L11.08 3.13C11.5 2.44 12.5 2.44 12.92 3.13L22.84 19.36C23.28 20.08 22.76 21 21.92 21M14.29 15.15H13.43V10.42H11.91L8.75 15.41L8.82 16.36H11.92V18H13.43V16.36H14.29V15.15Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
