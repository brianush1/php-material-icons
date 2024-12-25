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
	?><path d="M21 9C21 10.1 20.1 11 19 11H18V8.9C19.7 8.5 21 6.9 21 5.1H19C19 6.2 18.1 7.1 17 7.1H16.5L12 1L7.5 7H7C5.9 7 5 6.1 5 5H3C3 6.9 4.3 8.4 6 8.8V11H5C3.9 11 3 10.1 3 9H1C1 10.9 2.3 12.4 4 12.8V22H11V18C11 17.5 11.4 17 12 17S13 17.5 13 18V22H20V12.9C21.7 12.5 23 10.9 23 9.1L21 9M12 4.3L14 7H10L12 4.3M8 9H16V11H8V9M18 20H15V18C15 16.4 13.6 15 12 15S9 16.4 9 18V20H6V13H18V20Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
