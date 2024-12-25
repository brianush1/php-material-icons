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
	?><path d="M20.84 22.73L19.71 21.6C19.19 21.85 18.62 22 18 22H16C13 22 11.72 21.5 8.89 18.65L5.12 14.88C4.56 14.32 3.8 14 3 14H2V12H3C4.33 12 5.6 12.53 6.53 13.47L10.3 17.23C11 17.92 12 18 13 18H14V15.89L1.11 3L2.39 1.73L22.11 21.46L20.84 22.73M21.93 18.73C21.97 18.5 22 18.25 22 18V15C22 13.89 21.11 13 20 13H16.2L21.93 18.73M18.5 9.7L18.5 9.77V12H20V9.76C20 7.62 18.78 5.66 16.85 4.73H16.82C17.58 4 17.9 3 17.8 2H16.32C16.34 2.11 16.35 2.23 16.35 2.35C16.35 3.37 15.5 4.2 14.5 4.2H14.5V5.7C16.71 5.7 18.5 7.5 18.5 9.7M11.83 8.63C12.05 8.68 12.27 8.7 12.5 8.7H14C15.07 8.66 15.96 9.5 16 10.56C16 10.61 16 10.65 16 10.7V12H17.5V10.36C17.42 8.53 15.88 7.12 14.05 7.2L14 7.2H12.5C11.45 7.12 10.65 6.25 10.65 5.2C10.67 4.22 11.5 3.43 12.46 3.45L12.5 3.45V2C10.65 2 9.15 3.5 9.15 5.35C9.15 5.58 9.17 5.8 9.22 6L11.83 8.63Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
