<?php
/**
 * This funtion will take a pattern and a folder as the argument and go thru it(recursivly if needed)and return the list of 
 *               all files in that folder.
 * Link             : http://www.bin-co.com/php/scripts/filesystem/ls/
 * Arguments     :  $pattern - The pattern to look out for [OPTIONAL]
 *                    $folder - The path of the directory of which's directory list you want [OPTIONAL]
 *                    $recursivly - The funtion will traverse the folder tree recursivly if this is true. Defaults to false. [OPTIONAL]
 *                    $options - An array of values 'return_files' or 'return_folders' or both
 * Returns       : A flat list with the path of all the files(no folders) that matches the condition given.
 */
function ls($pattern="*", $folder="", $recursivly=false, $options=array('return_files','return_folders')) {
    if($folder) {
        $current_folder = realpath('.');
        if(in_array('quiet', $options)) { // If quiet is on, we will suppress the 'no such folder' error
            if(!file_exists($folder)) return array();
        }
        
        if(!chdir($folder)) return array();
    }
    
    
    $get_files    = in_array('return_files', $options);
    $get_folders= in_array('return_folders', $options);
    $both = array();
    $folders = array();
    
    // Get the all files and folders in the given directory.
    if($get_files) $both = glob($pattern, GLOB_BRACE + GLOB_MARK);
    if($recursivly or $get_folders) $folders = glob("*", GLOB_ONLYDIR + GLOB_MARK);
    
    //If a pattern is specified, make sure even the folders match that pattern.
    $matching_folders = array();
    if($pattern !== '*') $matching_folders = glob($pattern, GLOB_ONLYDIR + GLOB_MARK);
    
    //Get just the files by removing the folders from the list of all files.
    $all = array_values(array_diff($both,$folders));
        
    if($recursivly or $get_folders) {
        foreach ($folders as $this_folder) {
            if($get_folders) {
                //If a pattern is specified, make sure even the folders match that pattern.
                if($pattern !== '*') {
                    if(in_array($this_folder, $matching_folders)) array_push($all, $this_folder);
                }
                else array_push($all, $this_folder);
            }
            
            if($recursivly) {
                // Continue calling this function for all the folders
                $deep_items = ls($pattern, $this_folder, $recursivly, $options); # :RECURSION:
                foreach ($deep_items as $item) {
                    array_push($all, $this_folder . $item);
                }
            }
        }
    }
    
    if($folder) chdir($current_folder);
    return $all;
}


function get_file($file)
{	
	if(!file_exists($file)) return show_404();
	header('Content-Description: File Transfer');
    header('Content-Type: video/mpeg');
    // Suggest better filename for browser to use when saving file:
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Content-Transfer-Encoding: binary');
    // Caching headers:
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    // This should be set:
    header('Content-Length: ' . filesize($file));
    // Clean output buffer without sending it, alternatively you can do ob_end_clean(); to also turn off buffering.
    ob_clean();
    // And flush buffers, don't know actually why but php manual seems recommending it:
    flush();
    // Read file and output it's contents:
    readfile( $file );
    // You need to exit after that or at least make sure that anything other is not echoed out:
    exit;
}


/**
 * Encodes a string as base64, and sanitizes it for use in a CI URI.
 * 
 * @param string $str The string to encode
 * @return string
 */
function url_base64_encode(&$str="")
{
    return strtr(
            base64_encode($str),
            array(
                '+' => '.',
                '=' => '-',
                '/' => '~'
            )
        );
}

/**
 * Decodes a base64 string that was encoded by ci_base64_encode.
 * 
 * @param object $str The base64 string to decode.
 * @return string
 */
function url_base64_decode(&$str="")
{
    return base64_decode(strtr(
            $str, 
            array(
                '.' => '+',
                '-' => '=',
                '~' => '/'
            )
        ));
}
?>