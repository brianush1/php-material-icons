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
	?><path d="M20 16H22V18H20C18.6 18 17.2 17.6 16 17C13.5 18.3 10.5 18.3 8 17C6.8 17.6 5.4 18 4 18H2V16H4C5.4 16 6.8 15.5 8 14.7C10.4 16.4 13.6 16.4 16 14.7C17.2 15.5 18.6 16 20 16M13 10.6C13.6 10.3 14.3 10 15 9.9V10.2C15.3 11.2 15.3 12.1 15.2 13.1C14.3 13.6 13.2 13.9 12.2 13.9C12.7 12.9 13 11.7 13 10.6M12.9 3.6C11.5 4 10.3 4.7 9.3 5.7C8.9 4.7 8.7 3.7 8.7 2.7C10.9 1.7 13.4 1.8 15.6 2.9C15.9 3 16.2 3.1 16.4 3.3C15.2 3.2 14 3.3 12.9 3.6M6.8 13.3C6.2 13.6 5.6 13.8 5 13.9C4.3 12.6 4 11.2 4 9.8C4.5 10.8 5.2 11.8 6 12.6C6.3 12.8 6.5 13.1 6.8 13.3M19 13.9C18.4 13.8 17.8 13.6 17.3 13.4C17.5 12.2 17.4 11 17.1 9.8C18.2 9.9 19.2 10.2 20.1 10.8C20 11.8 19.7 12.7 19.2 13.6L19 13.9M7.4 11.2C6.2 10.1 5.5 8.5 5.2 6.9L5.1 6C5.6 5.2 6.1 4.6 6.8 4C6.9 5.4 7.4 6.7 8.2 7.8C8.9 8.9 9.9 9.9 11 10.5C11 11.3 10.8 12.1 10.5 12.9C9.3 12.6 8.3 12 7.4 11.2M13.5 5.5C15 5.1 16.7 5.2 18.2 5.7L19 6.1C19.4 6.8 19.6 7.6 19.8 8.4C17.3 7.3 14.4 7.5 12 8.8C11.3 8.5 10.8 8 10.3 7.4L10.4 7.3C11.3 6.5 12.3 5.8 13.5 5.5M16 18.7C17.2 19.5 18.6 20 20 20H22V22H20C18.6 22 17.2 21.6 16 21C13.5 22.3 10.5 22.3 8 21C6.8 21.6 5.4 22 4 22H2V20H4C5.4 20 6.8 19.5 8 18.7C10.4 20.4 13.6 20.4 16 18.7Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
