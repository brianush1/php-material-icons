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
	?><path d="M22.11 21.46L2.39 1.73L1.11 3L4 5.89V20C4 21.11 4.89 22 6 22H18C18.58 22 19.1 21.75 19.46 21.35L20.84 22.73L22.11 21.46M12 20C8.69 20 6 17.31 6 14C6 12.32 6.7 10.8 7.82 9.71L8.61 10.5H8.11C7.85 12.29 8.32 13.64 9.42 14.71C10 15.33 10.24 16.12 10 17.5H11.89C12.16 15.71 11.68 14.36 10.58 13.29C10.22 12.91 10 12.44 9.95 11.84L14.03 15.92C14.11 16.35 14.11 16.86 14 17.5H15.61L16.29 18.18C15.2 19.3 13.69 20 12 20M11.25 8.05C11.5 8 11.75 8 12 8C15.31 8 18 10.69 18 14C18 14.25 18 14.5 17.95 14.75L20 16.8V4C20 2.9 19.11 2 18 2H6C5.76 2 5.54 2.05 5.33 2.13L11.25 8.05M10 4C10.55 4 11 4.45 11 5S10.55 6 10 6 9 5.55 9 5 9.45 4 10 4Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>