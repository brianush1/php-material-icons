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
	?><path d="M4.5 17.42L5.58 18.5L3.28 20.78C3 21.07 2.5 21.07 2.22 20.78S1.93 20 2.22 19.72L4.5 17.42M18.29 5.42L18.29 4L12 10.29L5.71 4L5.71 5.42L11.29 11L7.5 14.81C6.32 13.97 4.68 14.07 3.63 15.12L7.88 19.37C8.93 18.32 9.03 16.68 8.2 15.5L18.29 5.42M21.78 19.72L19.5 17.42L18.42 18.5L20.72 20.78C21 21.07 21.5 21.07 21.78 20.78S22.07 20 21.78 19.72M16.5 14.81L13.42 11.71L12.71 12.42L15.81 15.5C14.97 16.68 15.07 18.32 16.12 19.37L20.37 15.12C19.32 14.07 17.68 13.97 16.5 14.81Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
