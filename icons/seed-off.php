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
	?><path d="M22.1 21.5L2.4 1.7L1.1 3L5.9 7.8C3.8 10.5 2.6 14.6 3.2 20.8C4.3 20.9 5.4 21 6.4 21C10.9 21 14.1 19.9 16.3 18.2L20.9 22.8L22.1 21.5M7 17C7 17 7 13.7 8.9 10.8L10.2 12.1C9.1 13.4 8 15 7 17M11.6 8.4L8.5 5.3C11.3 3.4 14.7 3 17.2 3C19.3 3 20.7 3.3 20.7 3.3S22.1 10.3 18.7 15.5L12.8 9.6C15.1 7.6 17 7 17 7C14.7 7 12.9 7.5 11.6 8.4Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>