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
	?><path d="M6.6 10.8C8 13.6 10.4 15.9 13.2 17.4L15.4 15.2C15.7 14.9 16.1 14.8 16.4 15C17.5 15.4 18.7 15.6 20 15.6C20.6 15.6 21 16 21 16.6V20C21 20.6 20.6 21 20 21C10.6 21 3 13.4 3 4C3 3.4 3.5 3 4 3H7.5C8.1 3 8.5 3.4 8.5 4C8.5 5.2 8.7 6.4 9.1 7.6C9.2 7.9 9.1 8.3 8.9 8.6L6.6 10.8M14 3C13.4 3 13 3.4 13 4S13.4 5 14 5 15 4.6 15 4 14.6 3 14 3M17 3C16.4 3 16 3.4 16 4S16.4 5 17 5 18 4.6 18 4 17.6 3 17 3M20 3C19.4 3 19 3.4 19 4S19.4 5 20 5 21 4.6 21 4 20.6 3 20 3M14 6C13.4 6 13 6.4 13 7S13.4 8 14 8 15 7.6 15 7 14.6 6 14 6M17 6C16.4 6 16 6.4 16 7S16.4 8 17 8 18 7.6 18 7 17.6 6 17 6M20 6C19.4 6 19 6.4 19 7S19.4 8 20 8 21 7.6 21 7 20.6 6 20 6M14 9C13.4 9 13 9.4 13 10S13.4 11 14 11 15 10.6 15 10 14.6 9 14 9M17 9C16.4 9 16 9.4 16 10S16.4 11 17 11 18 10.6 18 10 17.6 9 17 9M20 9C19.4 9 19 9.4 19 10S19.4 11 20 11 21 10.6 21 10 20.6 9 20 9Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
