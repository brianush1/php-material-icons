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
	?><path d="M10 2H14C15.11 2 16 2.9 16 4V6H20C21.11 6 22 6.9 22 8V13.53C21.42 13 20.75 12.6 20 12.34V8H4V19H12.08C12.2 19.72 12.45 20.39 12.8 21H4C2.9 21 2 20.11 2 19V8C2 6.9 2.9 6 4 6H8V4C8 2.9 8.9 2 10 2M14 6V4H10V6H14M19 18.5V17H15V15H19V13.5L22 16L19 18.5M17 19H21V21H17V22.5L14 20L17 17.5V19Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
