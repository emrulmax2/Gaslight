<?php

namespace App\Fakers;

use Illuminate\Support\Collection;
use App\Fakers\Users;
use App\Fakers\Categories;

class Posts
{
    public $imageAssets;

    public function __construct()
    {
        $this->imageAssets = array_values(array_filter(getFileList(resource_path("images/products"), "jpg,jpeg,png,svg"), function ($file) {
            return strpos($file, "400x400");
        }));
    }

    public static function fakePosts(): Collection
    {
        $instance = new self();

        return collect([
            [
                "title" => "Getting Started with TypeScript",
                "content" =>
                "TypeScript is a superset of JavaScript that compiles to plain JavaScript. It provides optional static typing, classes, and interfaces. One of the key benefits of using TypeScript is its code navigation and refactoring capabilities. By adding type annotations, you can catch errors and bugs during the development phase, making it a powerful tool for building scalable and robust applications.",
                "author" => Users::fakeUsers()[0],
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "tags" => ["TypeScript", "JavaScript", "Programming"],
                "category" => Categories::fakeCategories()[0],
                "image" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)]
            ],
            [
                "title" => "Introduction to Artificial Intelligence",
                "content" =>
                "Artificial Intelligence (AI) is the simulation of human intelligence processes by machines, especially computer systems. These processes include learning, reasoning, and self-correction. AI is being used in various fields, including healthcare, finance, and automotive. It enables machines to perform tasks that typically require human intelligence. Some of the popular applications of AI include natural language processing, speech recognition, and computer vision.",
                "author" => Users::fakeUsers()[0],
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "tags" => ["AI", "Machine Learning", "Technology"],
                "category" => Categories::fakeCategories()[0],
                "image" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)]
            ],
            [
                "title" => "The Power of React Framework",
                "content" =>
                "React is a JavaScript library for building user interfaces. It allows developers to create large web applications that can change data, without reloading the page. React can be used to create single-page applications and mobile applications. It is efficient and flexible, making it one of the most popular choices for front-end development. React's component-based architecture enables building reusable UI components, resulting in faster development and easier maintenance.",
                "author" => Users::fakeUsers()[0],
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "tags" => ["React", "JavaScript", "Front-end Development"],
                "category" => Categories::fakeCategories()[0],
                "image" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)]
            ],
            [
                "title" => "Deep Dive into Node.js Ecosystem",
                "content" =>
                "Node.js is an open-source, cross-platform JavaScript runtime environment that allows developers to build server-side and networking applications. It uses an event-driven, non-blocking I/O model, making it lightweight and efficient for real-time applications. Node.js has a vast ecosystem of libraries and frameworks that enable developers to create scalable and high-performance applications. Some of the popular frameworks include Express.js, Nest.js, and Koa.js.",
                "author" => Users::fakeUsers()[0],
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "tags" => ["Node.js", "JavaScript", "Backend Development"],
                "category" => Categories::fakeCategories()[0],
                "image" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)]
            ],
            [
                "title" => "Understanding Python Programming Language",
                "content" =>
                "Python is a high-level programming language known for its simplicity and readability. It supports multiple programming paradigms, including procedural, object-oriented, and functional programming. Python is widely used in various domains such as web development, data science, machine learning, and automation. Its extensive standard library and community support make it an ideal choice for beginners and experienced developers alike.",
                "author" => Users::fakeUsers()[0],
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "tags" => ["Python", "Programming", "Scripting"],
                "category" => Categories::fakeCategories()[0],
                "image" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)]
            ],
            [
                "title" => "Exploring the World of Cybersecurity",
                "content" =>
                "Cybersecurity is the practice of protecting systems, networks, and programs from digital attacks. It includes a range of security measures to safeguard information and prevent unauthorized access. Cybersecurity professionals use various techniques such as encryption, penetration testing, and firewalls to ensure the security of data and systems. With the increasing frequency and sophistication of cyber threats, the demand for cybersecurity experts has grown significantly in recent years.",
                "author" => Users::fakeUsers()[0],
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "tags" => ["Cybersecurity", "Information Security", "Technology"],
                "category" => Categories::fakeCategories()[0],
                "image" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)]
            ],
            [
                "title" => "Mastering Data Structures and Algorithms",
                "content" =>
                "Data structures and algorithms are essential concepts in computer science that enable efficient data organization and manipulation. They form the basis for solving complex computational problems and optimizing the performance of software applications. Understanding data structures such as arrays, linked lists, and trees, along with algorithms like sorting and searching, is crucial for building robust and scalable software systems.",
                "author" => Users::fakeUsers()[0],
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "tags" => ["Data Structures", "Algorithms", "Computer Science"],
                "category" => Categories::fakeCategories()[0],
                "image" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)]
            ],
            [
                "title" => "The Art of User Experience Design",
                "content" =>
                "User Experience (UX) design focuses on creating meaningful and relevant experiences for users. It involves understanding user behaviors, needs, and motivations to design intuitive and user-friendly products. UX designers use various techniques such as wireframing, prototyping, and user testing to ensure that the final product meets user expectations and delivers a seamless experience. Good UX design can lead to increased customer satisfaction and loyalty.",
                "author" => Users::fakeUsers()[0],
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "tags" => ["UX Design", "User Experience", "Design"],
                "category" => Categories::fakeCategories()[0],
                "image" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)]
            ],
            [
                "title" => "Exploring the World of Cloud Computing",
                "content" =>
                "Cloud computing refers to the delivery of computing services, including servers, storage, databases, networking, software, analytics, and intelligence, over the internet. It offers faster innovation, flexible resources, and economies of scale. Cloud computing providers such as Amazon Web Services (AWS), Microsoft Azure, and Google Cloud Platform (GCP) offer a wide range of services that enable businesses to scale and grow without the need for large upfront investments in infrastructure.",
                "author" => Users::fakeUsers()[0],
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "tags" => ["Cloud Computing", "Technology", "Infrastructure"],
                "category" => Categories::fakeCategories()[0],
                "image" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)]
            ],
            [
                "title" => "The Evolution of Machine Learning",
                "content" =>
                "Machine Learning (ML) is a subset of artificial intelligence that focuses on enabling systems to learn and improve from experience without being explicitly programmed. It uses algorithms and statistical models to perform tasks without relying on explicit instructions. Machine learning is used in various applications such as data analysis, pattern recognition, and predictive modeling. With advancements in technology and the availability of large datasets, machine learning has become increasingly popular in recent years.",
                "author" => Users::fakeUsers()[0],
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "tags" => ["Machine Learning", "AI", "Data Science"],
                "category" => Categories::fakeCategories()[0],
                "image" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)]
            ],
        ])->shuffle();
    }
}
