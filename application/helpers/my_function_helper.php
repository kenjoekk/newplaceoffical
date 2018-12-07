<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('loadView'))
{
	function loadView($viewName)
	{
		$CI =& get_instance();
		$CI->load->view($viewName);
	}
}

if ( ! function_exists('getNowVersion'))
{
	function getNowVersion()
	{
		return "7";
	}
}
if ( ! function_exists('getAsset'))
{
	function getAsset()
	{
		return base_url()."assets/";
	}
}
if ( ! function_exists('setImportAsset'))
{
	function setImportAsset($val)
	{
		if (strpos($val, '.css') !== false) {
			echo '<link rel="stylesheet" href="'.base_url()."assets/css/".$val."?".getNowVersion().'">';
		}else if (strpos($val, '.js') !== false) {
			echo '<script src="'.base_url()."assets/js/".$val."?".getNowVersion().'"></script>';
		}
	}
}

if ( ! function_exists('getVenuePath'))
{
	function getVenuePath($id)
	{
		$parts = parse_url(base_url());
		// return $parts['scheme']."://".$parts['host'] . $parts['path'];
		$path = "assets/images/venue/".$id."/";
		if(!is_dir($path)){
			mkdir($path,0777,true);
		}
		return $path.'/';
	}
}
if ( ! function_exists('getVenueFile'))
{
	function getVenueFile($id)
	{
		$parts = parse_url(base_url());
		// return $parts['scheme']."://".$parts['host'] . $parts['path'];
		return $parts['scheme']."://".$parts['host'] ."/newplaceofficial/assets/images/venue/".$id."/";
	}
}

if ( ! function_exists('getBanquetPath'))
{
	function getBanquetPath($id)
	{
		$parts = parse_url(base_url());
		// return $parts['scheme']."://".$parts['host'] . $parts['path'];
		$path = "assets/images/banquet/".$id."/";
		if(!is_dir($path)){
			mkdir($path,0777,true);
		}
		return $path.'/';
	}
}
if ( ! function_exists('getBanquetFile'))
{
	function getBanquetFile($id)
	{
		$parts = parse_url(base_url());
		// return $parts['scheme']."://".$parts['host'] . $parts['path'];
		return $parts['scheme']."://".$parts['host'] ."/newplaceofficial/assets/images/banquet/".$id."/";
	}
}

if ( ! function_exists('getNewsPath'))
{
	function getNewsPath($id)
	{
		$parts = parse_url(base_url());
		// return $parts['scheme']."://".$parts['host'] . $parts['path'];
		$path = "assets/images/news/".$id."/";
		if(!is_dir($path)){
			mkdir($path,0777,true);
		}
		return $path.'/';
	}
}
if ( ! function_exists('getNewsFile'))
{
	function getNewsFile($id)
	{
		$parts = parse_url(base_url());
		// return $parts['scheme']."://".$parts['host'] . $parts['path'];
		return $parts['scheme']."://".$parts['host'] ."/newplaceofficial/assets/images/news/".$id."/";
	}
}

if ( ! function_exists('getVideoPath'))
{
	function getVideoPath($id)
	{
		$parts = parse_url(base_url());
		// return $parts['scheme']."://".$parts['host'] . $parts['path'];
		$path = "assets/images/video/".$id."/";
		if(!is_dir($path)){
			mkdir($path,0777,true);
		}
		return $path.'/';
	}
}
if ( ! function_exists('getVideoFile'))
{
	function getVideoFile($id)
	{
		$parts = parse_url(base_url());
		// return $parts['scheme']."://".$parts['host'] . $parts['path'];
		return $parts['scheme']."://".$parts['host'] ."/newplaceofficial/assets/images/video/".$id."/";
	}
}


if ( ! function_exists('isFileExist'))
{
	function isFileExist($url)
	{
		$parts = parse_url($url);
		$dirname=dirname(__FILE__);

		$pos = strpos($dirname, '\\');
		if ($pos === false) {
			$temp0=str_replace("/alittleImg","alittleImg",$parts['path']);
			$temp=str_replace("uweiStore/uwei/application/helpers",$temp0,$dirname);
			$temp2=str_replace("CACHEDEV1_DATA/","",$temp);
			if(file_exists($temp2)==1){
				return 1;
			}else{
				return 0;
			}
		} else {
			$temp0=str_replace("/alittleImg","alittleImg",$parts['path']);
			$temp0=str_replace("/","\\",$temp0);
			$temp=str_replace("uweiStore\uwei\application\helpers",$temp0,$dirname);
			$temp2=str_replace("CACHEDEV1_DATA/","",$temp);
			if(file_exists($temp2)==1){
				return 1;
			}else{
				return 0;
			}
		}
	}
}

if ( ! function_exists('isDirEmpty'))
{
	function isDirEmpty($dir)
	{
		$handle = opendir($dir);
		while (false !== ($entry = readdir($handle))) {
			if ($entry != "." && $entry != "..") {
			return FALSE;
			}
		}
		return TRUE;
	}
}

if ( ! function_exists('set_user_session'))
{
    function set_user_session($user){
      $CI =& get_instance();
			$CI->load->library('session');
			$CI->session->set_userdata('user',$user);
			$CI->session->userdata('user');
    }
}

if ( ! function_exists('get_user_session'))
{
    function get_user_session($index=''){
      $CI =& get_instance();
			$CI->load->library('session');
			if($CI->session->has_userdata('user')){
				if($index!=''){
					$user = $CI->session->userdata('user');
					return $user[$index];
				}else{
					return $CI->session->userdata('user');
				}
			}else{
				redirect('console/login','refresh');
			}
			
    }
}

if ( ! function_exists('clean_user_session'))
{
    function clean_user_session(){
      $CI =& get_instance();
			$CI->load->library('session');
			$CI->session->unset_userdata('user');
    }
}

if ( ! function_exists('set_session_error'))
{
    function set_session_error($err){
        $session_data = array(
            'errMsg' => $err
        );
        $CI =& get_instance();
        $CI->load->library('session');
        $CI->session->set_userdata('logged_err', $session_data);
    }
}
if ( ! function_exists('get_session_errMsg'))
{
    function get_session_errMsg(){
        $CI =& get_instance();
        $CI->load->library('session');
        if (isset($CI->session->userdata['logged_err'])) {
            $errMsg = ($CI->session->userdata['logged_err']['errMsg']);
            return $errMsg;
        } else {
            return "";
        }
    }
}