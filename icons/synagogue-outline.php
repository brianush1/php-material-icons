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
	?><path d="M20 4C18.3 4 17 5.3 17 7V7.3L12 3L7 7.3V7C7 5.3 5.7 4 4 4S1 5.3 1 7V21H11V16C11 15.4 11.4 15 12 15S13 15.4 13 16V21H23V7C23 5.3 21.7 4 20 4M20 6C20.5 6 21 6.4 21 7V8H19V7C19 6.4 19.5 6 20 6M4 6C4.6 6 5 6.4 5 7V8H3V7C3 6.4 3.5 6 4 6M3 19V10H5V19H3M17 19H15V16C15 14.4 13.6 13 12 13S9 14.4 9 16V19H7V9.9L12 5.6L17 9.9V19M19 19V10H21V19H19M12 8.5C12.8 8.5 13.5 9.2 13.5 10S12.8 11.5 12 11.5 10.5 10.8 10.5 10 11.2 8.5 12 8.5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
