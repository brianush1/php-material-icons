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
	?><path d="M3 9.25V15.75C3 20.31 6.69 24 11.25 24S19.5 20.31 19.5 15.75V5.75C19.5 5.06 18.94 4.5 18.25 4.5S17 5.06 17 5.75V12H16V2.75C16 2.06 15.44 1.5 14.75 1.5S13.5 2.06 13.5 2.75V11H12.5V1.25C12.5 .56 11.94 0 11.25 0S10 .56 10 1.25V11H9V3.25C9 2.56 8.44 2 7.75 2C7.06 2 6.5 2.56 6.5 3.25V14.03C8.47 14.28 10 15.96 10 18H9C9 16.35 7.65 15 6 15H5.5V9.25C5.5 8.56 4.94 8 4.25 8S3 8.56 3 9.25Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
