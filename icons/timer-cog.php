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
	?><path d="M22.8 19.4C22.9 19.4 22.9 19.5 22.8 19.6L21.8 21.3C21.7 21.4 21.6 21.4 21.5 21.4L20.3 21C20 21.2 19.8 21.3 19.5 21.5L19.3 22.8C19.3 22.9 19.2 23 19.1 23H17.1C17 23 16.9 22.9 16.8 22.8L16.6 21.5C16.3 21.4 16 21.2 15.8 21L14.6 21.5C14.5 21.5 14.4 21.5 14.3 21.4L13.3 19.7C13.2 19.6 13.3 19.5 13.4 19.4L14.5 18.6V17.6L13.4 16.8C13.3 16.7 13.3 16.6 13.3 16.5L14.3 14.8C14.4 14.7 14.5 14.7 14.6 14.7L15.8 15.2C16.1 15 16.3 14.9 16.6 14.7L16.8 13.4C16.8 13.3 16.9 13.2 17.1 13.2H19.1C19.2 13.2 19.3 13.3 19.3 13.4L19.5 14.7C19.8 14.8 20.1 15 20.4 15.2L21.6 14.7C21.7 14.7 21.9 14.7 21.9 14.8L22.9 16.5C23 16.6 22.9 16.7 22.8 16.8L21.7 17.6V18.6L22.8 19.4M19.5 18C19.5 17.2 18.8 16.5 18 16.5S16.5 17.2 16.5 18 17.2 19.5 18 19.5 19.5 18.8 19.5 18M11 18C11 16.5 11.5 15.1 12.3 14H11V7H13V13.1C14.3 11.8 16 11 18 11C19 11 20 11.2 20.9 11.6C20.6 10 20 8.6 19 7.4L20.5 6C20 5.5 19.5 5 19 4.6L17.6 6C16.1 4.7 14.1 4 12 4C7 4 3 8 3 13S7 22 12 22H12.3C11.5 20.9 11 19.5 11 18M15 1H9V3H15V1Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
