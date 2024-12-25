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
	?><path d="M20 18H4V8H20M20 6H12L10 4H4C2.89 4 2 4.89 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V8C22 6.89 21.1 6 20 6M13 10C11.9 10 11 10.92 11 12.05C11 12.62 11.22 13.12 11.59 13.5L15 17L18.42 13.5C18.78 13.13 19 12.61 19 12.05C19 10.92 18.1 10 17 10C16.46 10 15.95 10.23 15.59 10.6L15 11.2L14.42 10.61C14.05 10.23 13.54 10 13 10Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
