<x-layouts.app :title="__('Home')">
    <main class="w-full">
        <section
            class="relative bg-cover bg-center bg-no-repeat h-[36rem] flex items-center justify-center text-center px-4"
            style="background-image: url('{{ asset('images/home-banner.png') }}');">
            <div class="absolute inset-0 bg-black/50"></div>
            <div class="relative z-10 text-white space-y-5">
                <h1 class="text-4xl md:text-5xl font-bold">From Kitchen to Career</h1>
                <h5 class="text-lg font-montserrat w-4/5 mx-auto">Master the art of culinary excellence with expert-led
                    courses
                    and hands-on training</h5>
                <div class="flex flex-col sm:flex-row gap-4 justify-center mt-6">
                    <a href="{{ route('home') }}"
                        class="px-8 py-3 bg-orange-950 hover:bg-orange-900 text-white font-semibold rounded-md transition">View
                        Courses</a>
                    <a href="{{ route('home') }}"
                        class="px-8 py-3 bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-md transition">Join
                        Now</a>
                </div>
            </div>
        </section>

        <section class="container mx-auto px-6 lg:px-8 py-12">
            <h2 class="text-3xl font-bold text-center mb-8 text-orange-950">Popular Courses</h2>
            <livewire:cooking-courses />
        </section>

        <section class="bg-gray-50  py-12">
            <h2 class="text-3xl font-bold text-center mb-8 text-orange-950">What Our Students Say</h2>
            <livewire:student-review />
        </section>

        <section class="bg-white py-12">
            <div class="container mx-auto px-4 grid md:grid-cols-3 gap-6 text-center">
                <div>
                    <div class="text-4xl font-bold text-orange-600 mb-2">1000+</div>
                    <div class="text-gray-700">Students Trained</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-orange-600 mb-2">50+</div>
                    <div class="text-gray-700">Professional Instructors</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-orange-600 mb-2">100+</div>
                    <div class="text-gray-700">Courses Available</div>
                </div>
            </div>
        </section>

        <section class="bg-gray-50 py-12">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl font-bold text-center mb-8 text-orange-950">Stay Updated</h2>
                <p class="text-gray-600 mb-6">Subscribe to our newsletter for the latest courses and culinary insights
                </p>
                <form class="flex flex-col md:flex-row justify-center gap-4 max-w-2xl mx-auto">
                    <input type="email" placeholder="Enter your email"
                        class="border border-gray-300 rounded px-4 py-2 w-full md:w-auto">
                    <button type="submit"
                        class="bg-orange-500 text-white px-6 py-2 rounded hover:bg-orange-600">Subscribe</button>
                </form>
            </div>
        </section>

        <footer class="bg-orange-950 text-gray-300 py-14">
            <div class="container mx-auto px-4 grid md:grid-cols-4 gap-6">
                <div>
                    <h3 class="text-lg font-bold mb-2">Culinary School</h3>
                    <p>Transforming passionate cooks into culinary professionals</p>
                </div>
                <div>
                    <h4 class="font-bold mb-2">Quick Links</h4>
                    <ul>
                        <li><a href="#" class="hover:text-white">About Us</a></li>
                        <li><a href="#" class="hover:text-white">Courses</a></li>
                        <li><a href="#" class="hover:text-white">Instructors</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-2">Resources</h4>
                    <ul>
                        <li><a href="#" class="hover:text-white">Recipe Library</a></li>
                        <li><a href="#" class="hover:text-white">Student Portal</a></li>
                        <li><a href="#" class="hover:text-white">Career Support</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-2">Contact Us</h4>
                    <p>123 Culinary Street<br>Cooking City, CC 12345</p>
                    <p class="mt-2">+1 (555) 123-4567</p>
                </div>
            </div>
            <div class="text-center text-sm text-gray-500 mt-8">
                &copy; 2025 Culinary School. All rights reserved.
            </div>
        </footer>
    </main>
</x-layouts.app>
