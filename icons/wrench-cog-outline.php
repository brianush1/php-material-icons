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
	?><path d="M9 1.09V6H7V1.09C4.16 1.57 2 4.03 2 7C2 9.22 3.21 11.15 5 12.19V21C5 21.55 5.45 22 6 22H10C10.55 22 11 21.55 11 21V12.19C12.79 11.15 14 9.22 14 7C14 4.03 11.84 1.57 9 1.09M10 10.46L9 11.04V20H7V11.04L6 10.46C4.77 9.74 4 8.42 4 7C4 6 4.37 5.06 5 4.35V8H11V4.35C11.63 5.06 12 6 12 7C12 8.42 11.23 9.74 10 10.46M20.94 17.94C20.96 17.79 20.97 17.65 20.97 17.5S20.96 17.2 20.94 17.05L21.91 16.32C22 16.25 22.03 16.13 21.97 16.03L21.05 14.47C21 14.37 20.87 14.33 20.76 14.37L19.61 14.82C19.37 14.65 19.12 14.5 18.83 14.38L18.66 13.19C18.64 13.08 18.54 13 18.43 13H16.58C16.46 13 16.36 13.08 16.34 13.19L16.17 14.38C15.88 14.5 15.63 14.65 15.39 14.82L14.24 14.37C14.14 14.33 14 14.37 13.96 14.47L13.03 16.03C12.97 16.13 13 16.25 13.09 16.32L14.06 17.05C14.05 17.2 14.03 17.35 14.03 17.5S14.05 17.79 14.06 17.94L13.09 18.68C13 18.75 12.97 18.87 13.03 18.97L13.96 20.53C14 20.63 14.14 20.66 14.24 20.63L15.39 20.17C15.63 20.35 15.88 20.5 16.17 20.62L16.34 21.81C16.36 21.92 16.46 22 16.58 22H18.43C18.54 22 18.64 21.92 18.66 21.81L18.83 20.62C19.12 20.5 19.37 20.35 19.61 20.17L20.76 20.63C20.87 20.66 21 20.63 21.05 20.53L21.97 18.97C22.03 18.87 22 18.75 21.91 18.68L20.94 17.94M17.5 19C16.67 19 16 18.33 16 17.5S16.67 16 17.5 16 19 16.67 19 17.5 18.33 19 17.5 19Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
