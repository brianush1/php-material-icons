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
	?><path d="M19.89 5H18.5V7C18.5 8.38 17.38 9.5 16 9.5S13.5 8.38 13.5 7V5.25C13.5 5.11 13.39 5 13.25 5H10.75C10.61 5 10.5 5.11 10.5 5.25V7C10.5 8.38 9.38 9.5 8 9.5S5.5 8.38 5.5 7V5H4.11C3 4.97 2.03 5.87 2 7V19C2.03 20.13 3 21.03 4.11 21H19.89C21 21.03 21.97 20.13 22 19V7C21.97 5.87 21 4.97 19.89 5M7 18H5V16H7V18M7 14H5V12H7V14M11 18H9V16H11V18M11 14H9V12H11V14M15 18H13V16H15V18M15 14H13V12H15V14M19 18H17V16H19V18M19 14H17V12H19V14M16 8C15.45 8 15 7.55 15 7V4C15 3.45 15.45 3 16 3C16.55 3 17 3.45 17 4V7C17 7.55 16.55 8 16 8M8 8C7.45 8 7 7.55 7 7V4C7 3.45 7.45 3 8 3C8.55 3 9 3.45 9 4V7C9 7.55 8.55 8 8 8Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
