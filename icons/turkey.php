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
	?><path d="M10.5 19.44C9.75 19.8 8.9 20 8 20C4.69 20 2 17.31 2 14V9C2 5.69 4.69 3 8 3L10.5 7.58C8.1 8.81 6.5 11 6.5 13.5C6.5 16 8.11 18.2 10.5 19.44M16 18.94V20H17C17.55 20 18 20.45 18 21S17.55 22 17 22H14C13.45 22 13 21.55 13 21S13.45 20 14 20V18.94C10.61 18.56 8 16.27 8 13.5C8 10.46 11.13 8 15 8C15.19 8 15.37 8 15.56 8C14.84 6.63 14 5.23 14 4C14 2.9 14.9 2 16 2C18.21 2 20 3.79 20 6H18C18 6 22 9 22 13.5C22 16.27 19.39 18.56 16 18.94M16 4C16 4.55 16.45 5 17 5S18 4.55 18 4 17.55 3 17 3 16 3.45 16 4M17 12C17 10.9 16.11 10 15 10C12.79 10 11 11.79 11 14H15C16.11 14 17 13.11 17 12Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
