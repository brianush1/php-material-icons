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
	?><path d="M16 20V22H4C2.9 22 2 21.1 2 20V7H4V20H16M20 2H8C6.9 2 6 2.9 6 4V16C6 17.1 6.9 18 8 18H20C21.1 18 22 17.1 22 16V4C22 2.9 21.1 2 20 2M15 14H13V12H15V14M16.8 8.8C16.5 9.2 16.1 9.5 15.7 9.7C15.5 9.9 15.3 10 15.2 10.2C15 10.4 15 10.7 15 11H13C13 10.5 13.1 10.1 13.3 9.8C13.5 9.5 13.8 9.2 14.3 8.9C14.6 8.7 14.8 8.5 14.9 8.3C15.1 8.1 15.1 7.8 15.1 7.5C15.1 7.2 15 6.9 14.8 6.7C14.6 6.5 14.4 6.4 14 6.4C13.7 6.4 13.5 6.5 13.3 6.6C13.1 6.8 13 7 13 7.3H11.1C11.1 6.5 11.3 5.9 11.9 5.5C12.6 5.2 13.3 5 14.2 5C15.1 5 15.9 5.2 16.4 5.7C16.9 6.2 17.2 6.8 17.2 7.5C17.2 8 17 8.4 16.8 8.8Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
