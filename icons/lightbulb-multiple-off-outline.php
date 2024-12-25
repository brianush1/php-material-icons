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
	?><path d="M22.11 21.46L2.39 1.73L1.11 3L4.14 6.03C3.93 7 4 8.05 4.45 9.04C4.79 9.81 5.33 10.5 6 11V13C6 13.55 6.45 14 7 14H7.3C7.1 13.35 7 12.68 7 12C7 11.08 7.19 10.21 7.5 9.41L9.11 11C9.05 11.33 9 11.66 9 12C9 13.57 9.74 15.06 11 16V18C11 18.55 11.45 19 12 19H16C16.31 19 16.57 18.86 16.75 18.64L20.84 22.73L22.11 21.46M11.23 13.12L12.87 14.76C12.1 14.44 11.53 13.85 11.23 13.12M15 17H13V14.89L15 16.89V17M9.69 6.5L6.14 2.94C6.41 2.75 6.7 2.58 7 2.44C9.53 1.33 12.5 2.47 13.6 5C12.12 5.09 10.77 5.63 9.69 6.5M11.12 7.92C11.94 7.35 12.93 7 14 7C15.57 7 17.06 7.74 18 9C19.33 10.78 19.28 13.14 18.07 14.87L16.62 13.42C16.7 13.28 16.77 13.14 16.83 13C17.38 11.43 16.56 9.72 15 9.16C14.16 8.87 13.29 8.97 12.57 9.37L11.12 7.92M7.68 15C8 15.7 8.46 16.33 9 16.88V17H8C7.45 17 7 16.55 7 16V15H7.68M12 20H16V21C16 21.55 15.55 22 15 22H13C12.45 22 12 21.55 12 21V20Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
