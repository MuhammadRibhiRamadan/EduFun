<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('articles')->insert([
            // ==================== DATA SCIENCE ====================
            [
                'title' => 'Machine Learning',
                'content' => 'Machine Learning (ML) enables computers to learn without being explicitly programmed. It allows systems to improve performance through experience and data-driven insights.',
                'published_at' => Carbon::now(),
                'category_id' => 1,
                'writer_id' => 1,
                'image' => 'https://images.pexels.com/photos/8386440/pexels-photo-8386440.jpeg',
            ],
            [
                'title' => 'Deep Learning',
                'content' => 'Deep Learning is a subset of machine learning that uses neural networks with many layers. It powers image recognition, natural language processing, and speech analysis.',
                'published_at' => Carbon::now(),
                'category_id' => 1,
                'writer_id' => 1,
                'image' => 'https://images.unsplash.com/photo-1559757175-5700dde675bc',
            ],
            [
                'title' => 'Natural Language Processing',
                'content' => 'Natural Language Processing (NLP) focuses on enabling computers to understand, interpret, and generate human language naturally using AI and linguistics.',
                'published_at' => Carbon::now(),
                'category_id' => 1,
                'writer_id' => 2,
                'image' => 'https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&w=1000&q=80',
            ],

            // ==================== NETWORK SECURITY ====================
            [
                'title' => 'Software Security',
                'content' => 'Software Security ensures applications are resistant to cyber threats by applying secure coding, vulnerability testing, and patch management best practices.',
                'published_at' => Carbon::now(),
                'category_id' => 2,
                'writer_id' => 2,
                'image' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=1000&q=80',
            ],
            [
                'title' => 'Network Administration',
                'content' => 'Network Administration focuses on managing, configuring, and monitoring systems to ensure reliable, secure, and efficient communication in IT environments.',
                'published_at' => Carbon::now(),
                'category_id' => 2,
                'writer_id' => 2,
                'image' => 'https://images.unsplash.com/photo-1581092795360-fd1ca04f0952',
            ],
            [
                'title' => 'Popular Network Technology',
                'content' => 'Modern networking technologies like VPN, SD-WAN, and Cloud Networking improve scalability, reliability, and data security for organizations worldwide.',
                'published_at' => Carbon::now(),
                'category_id' => 2,
                'writer_id' => 3,
                'image' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=1000&q=80', // digital global network map
            ],
        ]);
    }
}
