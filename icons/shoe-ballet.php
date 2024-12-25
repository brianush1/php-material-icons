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
	?><path d="M12.78 11.97C12.27 8.54 10.86 2 7.53 2S2.8 8.54 2.28 11.97C2.07 13.42 2 14.89 2.16 16.35C2.5 19.39 3.55 20.84 4.27 21.5C4.64 21.83 5.11 22 5.6 22H9.47C9.96 22 10.43 21.83 10.8 21.5C11.5 20.84 12.55 19.39 12.91 16.35C13.08 14.89 13 13.42 12.78 11.97M7.53 4C7.89 3.87 8.59 4.73 9.27 6.31L4.58 10.33C5.41 6.26 6.94 3.79 7.53 4M9.75 13H5.31C5.1 13 4.92 12.92 4.76 12.81L10 8.33C10.29 9.35 10.56 10.5 10.75 11.83C10.84 12.44 10.37 13 9.75 13M21.78 11.97C21.27 8.54 19.86 2 16.53 2C15.04 2 13.94 3.32 13.13 5.08C13.5 6.04 13.84 7.14 14.13 8.37L19.31 12.81C19.15 12.92 18.97 13 18.75 13H14.92C15.04 14.27 15.03 15.45 14.89 16.59C14.62 18.87 14 20.45 13.32 21.53C13.68 21.84 14.13 22 14.6 22H18.47C18.96 22 19.43 21.83 19.8 21.5C20.5 20.84 21.55 19.39 21.91 16.35C22.08 14.89 22 13.42 21.78 11.97M14.8 6.31C15.5 4.73 16.18 3.87 16.53 4C17.13 3.79 18.65 6.26 19.5 10.33L14.8 6.31Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
