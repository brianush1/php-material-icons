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
	?><path d="M14 5V4C14 2.9 13.1 2 12 2H8C6.9 2 6 2.9 6 4V5C3.8 5 2 6.8 2 9V20C2 21.1 2.9 22 4 22H15.2L13.2 20H4V16H6V18H7V16H12V15H4V9C4 7.9 4.9 7 6 7H14C15.1 7 16 7.9 16 9V12H18V9C18 6.8 16.2 5 14 5M12 5H8V4H12V5M10 9L8 11L10 13L12 11L10 9M21.8 17.8L18.2 14.2C18 14.1 17.8 14 17.6 14H14.8C14.4 14 14 14.4 14 14.8V17.6C14 17.8 14.1 18 14.2 18.2L17.8 21.8C17.9 21.9 18.1 22 18.4 22C18.6 22 18.8 21.9 19 21.8L21.8 19C21.9 18.9 22 18.7 22 18.4C22 18.2 21.9 18 21.8 17.8M15.4 16C15.1 16 14.8 15.7 14.8 15.4C14.8 15.1 15.1 14.8 15.4 14.8C15.7 14.8 16 15.1 16 15.4C16 15.7 15.7 16 15.4 16Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
