<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = [
            [
                'image' => 'client/images/news/news-1.jpg',
                'day' => '15',
                'month' => 'apr',
                'category' => 'Travel',
                'title' => 'The best soft chocolate chip cookies',
                'description' => 'Lorem ipsum dolor sitamet consectetu ocilng elit. Donec eros aseb dui, suscipit ex uti commodo dignis justo acas turpis egestas. Nullam et cursus'
            ],
            [
                'image' => 'client/images/news/news-2.jpg',
                'day' => '02',
                'month' => 'Jan',
                'category' => 'lifestyle',
                'title' => 'A Simple Way to Feel Like Home',
                'description' => 'Lorem ipsum dolor sitamet consectetu ocilng elit. Donec eros aseb dui, suscipit ex uti commodo dignis justo acas turpis egestas. Nullam et cursus'
            ],
            [
                'image' => 'client/images/news/news-3.jpg',
                'day' => '20',
                'month' => 'sep',
                'category' => 'weekends',
                'title' => '5 tips to plan your weekends',
                'description' => 'Lorem ipsum dolor sitamet consectetu ocilng elit. Donec eros aseb dui, suscipit ex uti commodo dignis justo acas turpis egestas. Nullam et cursus'
            ],
            [
                'image' => 'client/images/news/news-4.jpg',
                'day' => '05',
                'month' => 'may',
                'category' => 'Lifestyle',
                'title' => 'The best to-do list to boost your productivity',
                'description' => 'Lorem ipsum dolor sitamet consectetu ocilng elit. Donec eros aseb dui, suscipit ex uti commodo dignis justo acas turpis egestas. Nullam et cursus'
            ],
            [
                'image' => 'client/images/news/news-5.jpg',
                'day' => '30',
                'month' => 'mar',
                'category' => 'Travel',
                'title' => 'What kind of travel you are?',
                'description' => 'Lorem ipsum dolor sitamet consectetu ocilng elit. Donec eros aseb dui, suscipit ex uti commodo dignis justo acas turpis egestas. Nullam et cursus'
            ],
            [
                'image' => 'client/images/news/news-6.jpg',
                'day' => '24',
                'month' => 'jun',
                'category' => 'Explore',
                'title' => 'Explore the whole world',
                'description' => 'Lorem ipsum dolor sitamet consectetu ocilng elit. Donec eros aseb dui, suscipit ex uti commodo dignis justo acas turpis egestas. Nullam et cursus'
            ]
        ];
        return view('client.pages.home',['posts' =>$posts]);
    }
}
