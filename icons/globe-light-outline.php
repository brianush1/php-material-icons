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
	?><path d="M13 8.08V2H11V8.08C7.61 8.57 5 11.47 5 15C5 18.87 8.13 22 12 22S19 18.87 19 15C19 11.47 16.39 8.57 13 8.08M12 20C9.24 20 7 17.76 7 15C7 13.87 7.39 12.84 8.03 12H15.97C16.61 12.84 17 13.87 17 15C17 17.76 14.76 20 12 20Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
