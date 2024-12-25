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
	?><path d="M16 22H12V24H6V13.32C3.58 12.17 2 9.72 2 7C2 3.14 5.14 0 9 0C12.86 0 16 3.14 16 7C16 9.72 14.42 12.18 12 13.32V16H16V22M14 18H10V11.94L10.67 11.71C12.66 11 14 9.11 14 7C14 4.24 11.76 2 9 2S4 4.24 4 7C4 9.11 5.34 11 7.33 11.71L8 11.94V22H10V20H14V18M12 7C12 8.66 10.66 10 9 10S6 8.66 6 7 7.34 4 9 4 12 5.34 12 7M9 8C9.55 8 10 7.55 10 7S9.55 6 9 6 8 6.45 8 7 8.45 8 9 8M20 7H22V13H20M20 17H22V15H20" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
