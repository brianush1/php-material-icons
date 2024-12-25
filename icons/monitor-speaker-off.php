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
	?><path d="M2.4 1.7L1.1 3L1.2 3.1C1.1 3.4 1 3.7 1 4V16C1 17.1 1.9 18 3 18H10V20H8V22H12V16H3V4.9L14 15.9V20C14 21.1 14.9 22 16 22H20.1L20.8 22.7C20.8 22.7 22 21.7 22.2 21.5L2.4 1.7M18.5 20.5C16.8 20.5 15.5 19.2 15.5 17.5V17.4L18.6 20.5H18.5M23 4V7H21V4H7.2L5.2 2H21C22.1 2 23 2.9 23 4M21 9H16C15 9 14.1 9.8 14 10.8L17.8 14.6C18 14.5 18.2 14.5 18.5 14.5H18.6C20.3 14.5 21.6 15.8 21.6 17.5C21.6 17.7 21.6 18 21.5 18.2L23.1 19.8V11C23 9.9 22.1 9 21 9M18.5 13.5C17.7 13.5 17 12.8 17 12S17.7 10.5 18.5 10.5 20 11.2 20 12 19.3 13.5 18.5 13.5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>