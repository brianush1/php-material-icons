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
	?><path d="M12 8C14.21 8 16 9.79 16 12C16 12.25 15.97 12.5 15.93 12.73L11.27 8.07C11.5 8.03 11.75 8 12 8M12 6C15.31 6 18 8.68 18 12C18 12.83 17.82 13.6 17.5 14.32L21 17.8V5C21 3.9 20.11 3 19 3H6.2L9.68 6.5C10.4 6.18 11.17 6 12 6M22.11 21.46L20.84 22.73L19.1 21C19.07 21 19.03 21 19 21H5C3.89 21 3 20.1 3 19V5C3 4.97 3 4.93 3 4.9L1.11 3L2.39 1.73L22.11 21.46M15.19 17.08L13.71 15.6C13.19 15.85 12.62 16 12 16C9.79 16 8 14.21 8 12C8 11.39 8.15 10.81 8.4 10.29L6.92 8.81C6.34 9.74 6 10.83 6 12C6 15.31 8.69 18 12 18C13.17 18 14.26 17.66 15.19 17.08Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
