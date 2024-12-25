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
	?><path d="M12 14C10.9 14 10 13.11 10 12S10.9 10 12 10 14 10.9 14 12 13.11 14 12 14M23 19H1V17H4V15H1V13H4V11H1V9H4V7H1V5H23V7H20V9H23V11H20V13H23V15H20V17H23V19M12 15.92C12.62 16.62 13.66 16.81 14.5 16.33C15.34 15.85 15.69 14.84 15.4 13.96C16.31 13.78 17 12.97 17 12S16.31 10.22 15.4 10.04C15.69 9.16 15.34 8.15 14.5 7.67C13.66 7.19 12.62 7.38 12 8.08C11.38 7.38 10.34 7.19 9.5 7.67C8.66 8.15 8.31 9.16 8.61 10.04C7.69 10.22 7 11.03 7 12S7.69 13.78 8.61 13.96C8.31 14.84 8.66 15.85 9.5 16.33C10.34 16.82 11.38 16.62 12 15.92Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
