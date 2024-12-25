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
	?><path d="M22.1 21.5L2.4 1.7L1.1 3L2.6 4.5C2.3 4.9 2 5.4 2 6V18C2 19.1 2.9 20 4 20H18.1L20.8 22.7L22.1 21.5M4 18V8L9.6 11.5L16.1 18H4M9.2 6L7.2 4H20C21.1 4 22 4.9 22 6V18C22 18.2 22 18.5 21.9 18.7L20 16.8V8L14.6 11.4L13.4 10.2L20 6H9.2Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
