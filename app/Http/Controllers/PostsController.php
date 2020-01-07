<?php

    namespace App\Http\Controllers;

    class PostsController {

        public function show($slug){

            $post = \DB::table('posts')->where('slug', $slug)->first();

                // $randomArray = [
                //     'first' => 'first post goes here!!',
                //     'second' => 'second post goes here!!!'
                // ];

                // if(! array_key_exists($random, $randomArray)) {
                //     abort(404, 'Sorry, Post does not exist!');
                // }

                if(! $post) {
                    abort(404);
                }
                return view('test', [
                    // 'random' => $randomArray[$random]
                    'post' => $post
                ]);
        }

    }


