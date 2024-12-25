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
	?><path d="M11 15.5H13V17.5H11V15.5M14 19C14 18.86 14 18.73 14 18.6H5.4L12 7.3L16.11 14.44C16.62 14 17.2 13.65 17.84 13.41L12 3.3L2 20.6H14.22C14.08 20.09 14 19.56 14 19M13 10.5H11V14.5H13V10.5M22.12 15.46L20 17.59L17.88 15.46L16.47 16.88L18.59 19L16.47 21.12L17.88 22.54L20 20.41L22.12 22.54L23.54 21.12L21.41 19L23.54 16.88L22.12 15.46Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
