<?php
class sysinfo{
    function GetLang() {
        $Lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 4);
        //使用substr()截取字符串，从 0 位开始，截取4个字符
        if (preg_match('/zh-c/i',$Lang)) {
        //preg_match()正则表达式匹配函数
            $Lang = '简体中文';
        }
        elseif (preg_match('/zh/i',$Lang)) {
            $Lang = '繁體中文';
        }
        else {
            $Lang = 'English';
        }
        return $Lang;
    }
    function GetBrowser() {
        $Browser = $_SERVER['HTTP_USER_AGENT'];
        if (preg_match('/MSIE/i',$Browser)) {
            $Browser = 'MSIE';
        }
        elseif (preg_match('/Firefox/i',$Browser)) {
            $Browser = 'Firefox';
        }
        elseif (preg_match('/Chrome/i',$Browser)) {
            $Browser = 'Chrome';
        }
        elseif (preg_match('/Safari/i',$Browser)) {
            $Browser = 'Safari';
        }
        elseif (preg_match('/Opera/i',$Browser)) {
            $Browser = 'Opera';
        }
        else {
            $Browser = 'Other';
        }
        return $Browser;
    }
    function GetOS() {
        $OS = $_SERVER['HTTP_USER_AGENT'];
        if (preg_match('/win/i',$OS)) {
            $OS = 'Windows';
        }
        elseif (preg_match('/mac/i',$OS)) {
            $OS = 'MAC';
        }
        elseif (preg_match('/linux/i',$OS)) {
            $OS = 'Linux';
        }
        elseif (preg_match('/unix/i',$OS)) {
            $OS = 'Unix';
        }
        elseif (preg_match('/bsd/i',$OS)) {
            $OS = 'BSD';
        }
        else {
            $OS = 'Other';
        }
        return $OS;
    }
    function GetIP() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        //如果变量是非空或非零的值，则 empty()返回 FALSE。
            $IP = explode(',',$_SERVER['HTTP_CLIENT_IP']);
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $IP = explode(',',$_SERVER['HTTP_X_FORWARDED_FOR']);
        }
        elseif (!empty($_SERVER['REMOTE_ADDR'])) {
            $IP = explode(',',$_SERVER['REMOTE_ADDR']);
        }
        else {
            $IP[0] = 'None';
        }
        return $IP[0];
    }
    private function GetAddIsp() {
        $IP = $this->GetIP();
        $AddIsp = mb_convert_encoding(file_get_contents('http://open.baidu.com/ipsearch/stn=ipjson&wd='.$IP),'UTF-8','GBK');
        //mb_convert_encoding() 转换字符编码。
        if (preg_match('/noresult/i',$AddIsp)) {
            $AddIsp = 'None';
        }
        else {
            $Sta = stripos($AddIsp,$IP) + strlen($IP) + strlen('来自');
            $Len = stripos($AddIsp,'"}')-$Sta;
            $AddIsp = substr($AddIsp,$Sta,$Len);
        }
        $AddIsp = explode(' ',$AddIsp);
        return $AddIsp;
    }
    function GetAdd() {
        $Add = $this->GetAddIsp();
        return $Add[0];
    }
    function GetIsp() {
        $Isp = $this->GetAddIsp();
        if ($Isp[0] != 'None' && isset($Isp[1])) {
            $Isp = $Isp[1];
        }
        else {
            $Isp = 'None';
        }
        return $Isp;
    }
}

function getSystemInfo(){
	$s = new sysinfo();
	$data['address'] = $s->GetAdd();
	$data['os'] = $s->GetOS();
	$data['browser'] = $s->GetBrowser();
	$data['ip'] = $s->GetIP();
	$data['lang'] = $s->GetLang();
    $data['phpv'] = PHP_VERSION;
    $data['serv'] = $_SERVER["SERVER_SOFTWARE"];
	return $data;
}