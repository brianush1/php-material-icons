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
	?><path d="M21 11C18.6 11 18.5 12.9 16.2 13L16 12.8V11C18.5 11 18.5 9 21 9V11M22.1 21.5L20.8 22.8L18 19.9V22H3V8C3 7.1 3.3 6.3 3.8 5.7L1.1 3L2.4 1.7L22.1 21.5M9 13C9 14.1 9.9 15 11 15C11.6 15 12.1 14.7 12.5 14.4L9.7 11.6C9.3 11.9 9 12.4 9 13M16 17.9L13.9 15.8C13.2 16.5 12.1 17 11 17C8.8 17 7 15.2 7 13C7 11.9 7.5 10.8 8.2 10.1L5.2 7.1C5.1 7.4 5 7.7 5 8V20H16V17.9M21 15V13C19.3 13 18.7 14 17.7 14.5L18.8 15.6C19.4 15.3 20 15 21 15M14 6C15.1 6 16 6.9 16 8V9H18V8C18 5.8 16.2 4 14 4H7.2L9.2 6H14Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
