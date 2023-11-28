<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home | Cinema XXV',
            'user' => 'Agfi',
        ];
        return view('index', $data);
    }
    public function login(): string
    {
        return view('login');
    }
    public function register(): string
    {
        return view('register');
    }
    public function movie(): string
    {
        $data = [
            'title' => 'Movie | Cinema XXV',
            'header' => 'Explore Movie',
        ];
        return view('movie', $data);
    }
    public function history(): string
    {
        $data = [
            'title' => 'History | Cinema XXV',
            'user' => 'Agfi',
        ];
        return view('history', $data);
    }
    public function ulasan(): string
    {
        $data = [
            'title' => 'Ulasan | Cinema XXV',
            'header' => 'Ulasan',
        ];
        return view('ulasan', $data);
    }
}
