<?php

function transalete_model($model)
{
    if(!$model)
    {
        return $model;
    }
    $langCode = session()->get('lang','en');

    return $model->translate($langCode,'en');
}

/**
 * Created by PhpStorm.
 * User: saroj
 * Date: 8/7/18
 * Time: 4:59 PM
 */


if(!function_exists('getThumbnail'))
{
    function getThumbnail($image,$type = 'cropped')
    {
        // We need to get extension type ( .jpeg , .png ...)
        $ext = pathinfo($image, PATHINFO_EXTENSION);

        // We remove extension from file name so we can append thumbnail type
        $toRemove = '.'.$ext;
        $name = explode($toRemove,$image)[0];

        // We merge original name + type + extension
        return $name.'-'.$type.'.'.$ext;
    }
}

if(!function_exists('makeUrl'))
{
    function makeUrl($url)
    {
        $components = parse_url($url);
        $url = $url == '/'?'':$url;
        return (empty($components['host']))?env('APP_URL').'/'.session()->get('lang','en').$url:'/'.session()->get('lang','en').$url;
    }
}

if(!function_exists('isHomePage')){
    function isHomePage()
    {
        $curBaseUrl = env('APP_URL').'/'.session()->get('lang','en');
        $lastSection = explode($curBaseUrl,url()->current());
        $lastSection = isset($lastSection[1])?$lastSection[1]:'';
        return   ($lastSection==='' || $lastSection == '/')?true:false;
    }
}

if(!function_exists('makeBreadCrumb')){
    function makeBreadCrumb()
    {
        $current = url()->current();
        $curBaseUrl = env('APP_URL').'/'.session()->get('lang','en');
        $sections = explode('/',str_after($current,$curBaseUrl));
//        print_r($sections);exit;
        $str = '<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">';
        foreach ($sections as $key => $section)
        {
            if($section == '' || $section == '/')
            {
                $str.='<li class="breadcrumb-item"><a href="'.$curBaseUrl.'">Home</a></li>';
            }else{
                if($section == 'category' || $section == 'archive')
                {
                    continue;
                }
                end($sections);
                $pageTitle = ucwords(str_replace('-',' ',$section));

                $str.='<li class="breadcrumb-item ';
                if($key == key($sections)){
                    $str.='active" aria-current="page">'.$pageTitle;
                }else{
                    $str.='"><a href="'.$curBaseUrl.'/'.$section.'">'.$pageTitle.'</a>';
                }
                $str.='</li>';
            }

        }
        $str.='</ol></nav>';
        return $str;
    }
}

if(!function_exists('makeArchives')){
    function makeArchives($dateArray) {
        $newDate = array();
        foreach($dateArray as $date)
        {

            $newDate[] = $date->published_date->format('F Y');

        }
        $newDate = array_unique($newDate);
        $archives = [];
        foreach ($newDate as $d)
        {
            $archives[] = ['title'=>$d,'slug'=>str_replace(' ','-',$d)];
        }
        return $archives;
    }
}

if(!function_exists('current_page'))
{
    function current_page($uri){

        // if($uri != '/'){
        //     $uri = ltrim($uri,'/');
        // }
        return request()->path() == session()->get('lang','en').$uri;
        // return strstr(request()->path(),$uri);
    }
}

if (! function_exists('front_route')) {
    /**
     * Generate the URL to a named route.
     *
     * @param  array|string  $name
     * @param  array  $parameters
     * @param  bool  $absolute
     * @return string
     */
    function front_route($name, $parameters = [], $absolute = true)
    {
        $para = ['lang'=>session()->get('lang','en')];
        if(is_array($parameters))
        {
            $merge = array_merge($para,$parameters);
        }else{
            array_push($para, $parameters);
            $merge = $para;
        }
        // print_r($merge);

        return app('url')->route($name, $merge, $absolute);
    }
}
