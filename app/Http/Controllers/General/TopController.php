<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Services\General\NoticeService as NoticeService;
use App\Services\BannerService as BannerService;
use App\Services\TopSlideImageService as TopSlideImageService;

class TopController extends Controller
{
//    private $notice;
//    private $banner;
//    private $top_slide_image;
//
//    public function __construct()
//    {
//        $this->notice = new NoticeService();
//        $this->banner = new BannerService();
//        $this->top_slide_image = new TopSlideImageService();
//    }
//
    /**
     * 一般HPTOP画面
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
//        $notice = $this->notice->getNoticeList();
//        $banner = $this->banner->getBannersList();
//        $top_slide_images = $this->top_slide_image->getTopSlideImage();

        return view('top');
    }
}
