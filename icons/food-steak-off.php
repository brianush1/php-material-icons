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
	?><path d="M2.39 1.73L1.11 3L5.27 7.16C5.08 7.83 5 8.53 5 9.26C5.1 11.83 6.59 14.05 8.74 15.19C10.1 15.9 11 17.25 11 18.79V19C11 20.66 12.34 22 14 22C15.68 22 16.83 21.11 17.6 19.5L20.84 22.73L22.11 21.46L2.39 1.73M14 20C13.45 20 13 19.55 13 19V18.79C13 16.56 11.72 14.5 9.67 13.42C8.09 12.58 7.07 10.96 7 9.18C7 9.09 7 9 7 8.9L8.16 10.05C8.19 10.15 8.21 10.25 8.24 10.35L8.4 10.29L9.62 11.5L9.08 11.71C9.38 12.04 9.73 12.32 10.14 12.53C10.81 12.89 11.4 13.34 11.91 13.85L11.95 13.84L13.17 15.06L12.95 15.14C13.46 15.96 13.8 16.89 13.93 17.85L15.2 17.39C15.22 17.32 15.25 17.24 15.27 17.16L16.07 17.96C15.47 19.68 14.68 20 14 20M15.79 7.6L12.14 8.94L9.88 6.68L13.69 5.3C14.94 5.77 15.53 6.72 15.79 7.6M8.59 5.39L7.17 3.97C8.41 2.77 10.07 2 11.88 2H11.88C19 2 19 9 19 9C19 11.46 18.9 13.63 18.66 15.46L16.84 13.64C16.94 12.36 17 10.83 17 9C17 8.18 16.69 4 11.88 4H11.88C10.67 4 9.5 4.5 8.59 5.39M15.68 12.5L13.36 10.15L16 9.19C16 10.41 15.97 11.46 15.92 12.4L15.68 12.5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
