<?php

$sid = 15;
$lids = array("./lessons/testing","./lessons/your file");

// Initialize archive object
$zip = new ZipArchive();
$zip->open("./zips/$sid.zip", ZipArchive::CREATE | ZipArchive::OVERWRITE);

foreach($lids as $y){
	$dir = ltrim($y, "./lessons/");
	$zip->addEmptyDir($dir);

	foreach(glob("$y/*.{docx,pptx,txt}", GLOB_BRACE) as $filename){
		$name = basename($filename);
		$zip->addFile($filename, "$dir/$name");

	}
}

// Zip archive will be created only after closing object
$zip->close();
echo "done";

/*
    # send the file to the browser as a download
    header('Content-disposition: attachment; filename=Resumes.zip');
    header('Content-type: application/zip');
    readfile($tmp_file);
*/

?>