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
	?><path d="M18.5 12C19 12 19.5 12.07 20 12.18V8H4V21H12.5C12.18 20.23 12 19.39 12 18.5C12 14.91 14.91 12 18.5 12M9 13V11.5C9 11.22 9.22 11 9.5 11H14.5C14.78 11 15 11.22 15 11.5V13H9M21 7H3V3H21V7M18 18.5L19.77 16.73C19.32 16.28 18.69 16 18 16C16.62 16 15.5 17.12 15.5 18.5S16.62 21 18 21C18.82 21 19.54 20.61 20 20H21.71C21.12 21.47 19.68 22.5 18 22.5C15.79 22.5 14 20.71 14 18.5S15.79 14.5 18 14.5C19.11 14.5 20.11 14.95 20.83 15.67L22 14.5V18.5H18Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
