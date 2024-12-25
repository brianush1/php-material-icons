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
	?><path d="M19.94 17.94C19.96 17.79 19.97 17.65 19.97 17.5S19.96 17.2 19.94 17.05L20.91 16.32C21 16.25 21.03 16.13 20.97 16.03L20.05 14.47C20 14.37 19.86 14.33 19.76 14.37L18.61 14.82C18.37 14.65 18.12 14.5 17.83 14.38L17.66 13.19C17.64 13.08 17.54 13 17.43 13H15.58C15.46 13 15.36 13.08 15.34 13.19L15.17 14.38C14.88 14.5 14.63 14.65 14.39 14.82L13.24 14.37C13.14 14.33 13 14.37 12.96 14.47L12.03 16.03C11.97 16.13 12 16.25 12.09 16.32L13.06 17.05C13.05 17.2 13.03 17.35 13.03 17.5S13.05 17.79 13.06 17.94L12.09 18.68C12 18.75 11.97 18.87 12.03 18.97L12.96 20.53C13 20.63 13.14 20.66 13.24 20.63L14.39 20.17C14.63 20.35 14.88 20.5 15.17 20.62L15.34 21.81C15.36 21.92 15.46 22 15.58 22H17.43C17.54 22 17.64 21.92 17.66 21.81L17.83 20.62C18.12 20.5 18.37 20.35 18.61 20.17L19.76 20.63C19.86 20.66 20 20.63 20.05 20.53L20.97 18.97C21.03 18.87 21 18.75 20.91 18.68L19.94 17.94M16.5 19C15.67 19 15 18.33 15 17.5S15.67 16 16.5 16 18 16.67 18 17.5 17.33 19 16.5 19M9 2C10.8 2.6 12 4.3 12 6.2C12 8.2 10.8 9.9 9 10.5V21.5C9 21.8 8.8 22 8.5 22H6.5C6.2 22 6 21.8 6 21.4V10.4C4.2 9.8 3 8.1 3 6.2S4.2 2.6 6 2V5.7H9V2Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
