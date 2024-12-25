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
	?><path d="M22.1 21.5L2.4 1.7L1.1 3L4.1 6C2.8 7.6 2 9.7 2 12C2 13.1 2.9 14 4 14H12.1L13.1 15H9L7.7 19.5V20C7.7 21.1 8.6 22 9.7 22H14.4C15.5 22 16.4 21.1 16.4 20L16.3 19.5L15.8 17.7L20.9 22.8L22.1 21.5M7 12C5.9 12 5 11.1 5 10C5 9.2 5.5 8.4 6.3 8.1L8.9 10.7C8.6 11.5 7.8 12 7 12M10 6C10 4.9 10.9 4 12 4S14 4.9 14 6 13.1 8 12 8C11.5 8 11.1 7.8 10.7 7.5L17.2 14H20C21.1 14 22 13.1 22 12C22 6.5 17.5 2 12 2C10.1 2 8.3 2.6 6.7 3.5L10.4 7.2C10.2 6.9 10 6.5 10 6M17 8C18.1 8 19 8.9 19 10S18.1 12 17 12 15 11.1 15 10 15.9 8 17 8Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
