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
	?><path d="M20 4H4C2.89 4 2 4.89 2 6V18C2 19.11 2.9 20 4 20H11.68C11.57 19.5 11.5 19 11.5 18.5C11.5 18.33 11.5 18.17 11.53 18H4V12H20V12.32C20.74 12.56 21.41 12.93 22 13.4V6C22 4.89 21.1 4 20 4M20 8H4V6H20V8M20.83 15.67L22 14.5V18.5H18L19.77 16.73C19.32 16.28 18.69 16 18 16C16.62 16 15.5 17.12 15.5 18.5S16.62 21 18 21C18.82 21 19.54 20.61 20 20H21.71C21.12 21.47 19.68 22.5 18 22.5C15.79 22.5 14 20.71 14 18.5S15.79 14.5 18 14.5C19.11 14.5 20.11 14.95 20.83 15.67Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
