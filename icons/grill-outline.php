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
	?><path d="M17 22A3 3 0 1 0 14.18 18H9.14L11.13 14.94A6.36 6.36 0 0 0 12.87 14.94L13.89 16.5C14.31 16 14.85 15.56 15.5 15.3L14.89 14.37A7 7 0 0 0 19 8H5A7 7 0 0 0 9.12 14.37L5.17 20.45A1 1 0 0 0 6.84 21.54L7.84 20H14.18A3 3 0 0 0 17 22M17 18A1 1 0 0 1 18 19C18 19.55 17.55 20 17 20S16 19.55 16 19A1 1 0 0 1 17 18M7.42 10H16.58A5 5 0 0 1 7.42 10M9.41 7H10.41C10.56 5.85 10.64 5.36 9.5 4.04C9.1 3.54 8.84 3.27 9.06 2H8.07A3.14 3.14 0 0 0 8.96 4.96C9.18 5.2 9.75 5.63 9.41 7M11.89 7H12.89C13.04 5.85 13.12 5.36 12 4.04C11.58 3.54 11.32 3.26 11.54 2H10.55A3.14 3.14 0 0 0 11.44 4.96C11.67 5.2 12.24 5.63 11.89 7M14.41 7H15.41C15.56 5.85 15.64 5.36 14.5 4.04C14.1 3.54 13.84 3.27 14.06 2H13.07A3.14 3.14 0 0 0 13.96 4.96C14.18 5.2 14.75 5.63 14.41 7Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
