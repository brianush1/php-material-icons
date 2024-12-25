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
	?><path d="M8.2,12.1C7.9,12.3 7.7,12.7 7.8,13C7.8,13.7 8.5,14.2 9.1,14.2C9.7,14.2 10.3,13.7 10.3,13C9.7,12.6 9,12.3 8.2,12.1M22,11L23,7C23,7 21,7 18,5C15,3 15,1 12,1C9,1 9,3 6,5C3,7 1,7 1,7L2,11H2.1C2,11.3 2,11.7 2,12C2,15.5 3.8,18.6 6.5,20.4L6,21.3C12.4,25.4 18,21.3 18,21.3L17.5,20.4C20.2,18.6 22,15.5 22,12C22,11.7 22,11.3 22,11M11.3,4.5L9.9,3.1L10.6,2.4L12,3.8L13.4,2.4L14.1,3.1L12.7,4.5L14.1,5.9L13.4,6.6L12,5.2L10.6,6.6L9.9,5.9L11.3,4.5M9.3,8.5C10.3,8.2 11.3,8 12,8C14.2,8 17.9,9.6 19.8,10.4C19.9,10.7 19.9,11 19.9,11.3L9.3,8.5M13.6,19.1C12.9,19.5 12.2,19.8 11.4,19.9C10.9,19.5 10.9,18.7 11.4,18.3C11.8,17.9 12.7,17.7 13.2,18.2C13.5,18.3 13.6,18.8 13.6,19.1M20,13.4C19.5,15.5 18.2,17.4 16.5,18.6L15,16H9L7.5,18.6C5.4,17.2 4,14.8 4,12C4,11.5 4.1,11 4.2,10.5C4.7,10.3 5.3,10 6,9.7L13.1,11.6V14C13.1,14.5 13.5,15 14.1,15H16.1C16.6,15 17.1,14.6 17.1,14V12.6L20,13.4Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
