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
	?><path d="M14 12C14 13.1 13.1 14 12 14S10 13.1 10 12 10.9 10 12 10 14 10.9 14 12M7 10C5.9 10 5 10.9 5 12S5.9 14 7 14 9 13.1 9 12 8.1 10 7 10M17 10C15.9 10 15 10.9 15 12S15.9 14 17 14 19 13.1 19 12 18.1 10 17 10M14.5 6C13.4 6 12.5 6.9 12.5 8S13.4 10 14.5 10 16.5 9.1 16.5 8 15.6 6 14.5 6M9.5 6C8.4 6 7.5 6.9 7.5 8S8.4 10 9.5 10 11.5 9.1 11.5 8 10.6 6 9.5 6M14.5 14C13.4 14 12.5 14.9 12.5 16S13.4 18 14.5 18 16.5 17.1 16.5 16 15.6 14 14.5 14M9.5 14C8.4 14 7.5 14.9 7.5 16S8.4 18 9.5 18 11.5 17.1 11.5 16 10.6 14 9.5 14M12 18C10.9 18 10 18.9 10 20S10.9 22 12 22 14 21.1 14 20 13.1 18 12 18M14.4 2.2L13.6 1C11.4 2 11.2 5.6 11.2 6H12.7C12.8 5.2 13.1 2.7 14.4 2.2Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
