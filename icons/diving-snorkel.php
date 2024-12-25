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
	?><path d="M16,3H4A2,2 0 0,0 2,5V10A2,2 0 0,0 4,12H7.15C7.57,12 7.95,12.24 8.1,12.63C8.44,13.68 9.58,14.25 10.62,13.91C11.23,13.71 11.7,13.23 11.9,12.63C12.05,12.24 12.43,12 12.85,12H16A2,2 0 0,0 18,10V5A2,2 0 0,0 16,3M16,10H11.35C11.1,9.46 10.59,9.09 10,9C9.41,9.09 8.9,9.46 8.65,10H4V5H16V10M22,2V15.5A6.5,6.5 0 0,1 15.5,22C13.79,22 12.15,21.32 10.93,20.12C8.95,20.58 6.88,19.79 5.71,18.12L7.62,17.29C8.5,18.22 9.84,18.5 11,18C11.2,17.91 11.39,17.8 11.56,17.67C12.4,17.05 12.87,16.04 12.78,15L14.69,14.17C15.1,16.04 14.41,18 12.9,19.17C13.66,19.71 14.57,20 15.5,20C18,20 20,18 20,15.5V2H22Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
