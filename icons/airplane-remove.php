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
	?><path d="M15.97 13.83C15.08 14.35 14.34 15.09 13.82 16L11.55 11.63L7.66 15.5L8 18L6.95 19.06L5.18 15.87L2 14.11L3.06 13.05L5.54 13.4L9.43 9.5L2 5.62L3.41 4.21L12.61 6.33L16.5 2.44C17.08 1.85 18.03 1.85 18.62 2.44C19.2 3.03 19.2 4 18.62 4.56L14.73 8.45L15.97 13.83M22.54 16.88L21.12 15.47L19 17.59L16.88 15.47L15.47 16.88L17.59 19L15.47 21.12L16.88 22.54L19 20.41L21.12 22.54L22.54 21.12L20.41 19L22.54 16.88Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
