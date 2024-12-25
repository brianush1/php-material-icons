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
	?><path d="M13.53 22H10C9.75 22 9.54 21.82 9.5 21.58L9.13 18.93C8.5 18.68 7.96 18.34 7.44 17.94L4.95 18.95C4.73 19.03 4.46 18.95 4.34 18.73L2.34 15.27C2.21 15.05 2.27 14.78 2.46 14.63L4.57 12.97C4.53 12.65 4.5 12.33 4.5 12S4.53 11.34 4.57 11L2.46 9.37C2.27 9.22 2.21 8.95 2.34 8.73L4.34 5.27C4.46 5.05 4.73 4.96 4.95 5.05L7.44 6.05C7.96 5.66 8.5 5.32 9.13 5.07L9.5 2.42C9.54 2.18 9.75 2 10 2H14C14.25 2 14.46 2.18 14.5 2.42L14.87 5.07C15.5 5.32 16.04 5.66 16.56 6.05L19.05 5.05C19.27 4.96 19.54 5.05 19.66 5.27L21.66 8.73C21.78 8.95 21.73 9.22 21.54 9.37L19.43 11C19.47 11.34 19.5 11.67 19.5 12V12.19C19 12.07 18.5 12 18 12C17.08 12 16.22 12.21 15.44 12.58C15.47 12.39 15.5 12.2 15.5 12C15.5 10.07 13.93 8.5 12 8.5S8.5 10.07 8.5 12 10.07 15.5 12 15.5C12.2 15.5 12.39 15.47 12.58 15.44C12.21 16.22 12 17.08 12 18C12 19.54 12.58 20.94 13.53 22M16 15V21L21 18L16 15Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
